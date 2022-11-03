<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Models\Category;
    use App\Models\Post;
    use Illuminate\Http\Request;

    class PostsController extends Controller
    {
        public function __construct() {
            $this->middleware('auth');
        }

        public function index() {
//            dd(Category::all());
            $posts = Post::all();
            $categories = Category::all();
            return view('Admin.Posts.index',
                [
                    'posts' => $posts,
                    'categories' => $categories
                ]);
        }

        public function store(Request $request) {
//            $newCategory = new Category();
//            $newCategory->name = $request->name;
//            $newCategory->save();

            if ($request->hasFile('featured')){
                $file = $request->file('featured');
                $destinationPath = 'images/featureds/';
                $filename = time() . "-" . $file->getClientOriginalName();
                $uploadSuccess = $request->file('featured')->move($destinationPath, $filename);
                $request->featured = "".$destinationPath . $filename;

                $newPost = new Post();
                $newPost->category_id = $request->category_id;
                $newPost->title = $request->title;
                $newPost->content = $request->content;
                $newPost->author = $request->author;
                $newPost->featured = $request->featured;
                $newPost->save();
//                $newPost = Post::create($request->all());
            }

            return redirect()->back();
//            return response()->json(
//                [
//                    "Result" => 1,
//                    "Mensaje" => "Registro agregado",
//                    "Data" => $newCategory
//                ],
//                200);

        }
//
        public function update(Request $request, $id){
            $post = Post::find($id);
//
            if ($request->hasFile('featured')){
                $file = $request->file('featured');
                $destinationPath = 'images/featureds/';
                $filename = time() . "-" . $file->getClientOriginalName();
                $uploadSuccess = $request->file('featured')->move($destinationPath, $filename);
                $request->featured = "".$destinationPath . $filename;
                $post->featured = $request->featured;
            }
//
            $post->category_id = $request->category_id;
            $post->title = $request->title;
            $post->content = $request->content;
            $post->author = $request->author;
            $post->save();

//            $post->update($request->all());
            return redirect()->back();
        }
//
        public function delete($id){
            $post = Post::find($id);
            $post->delete();
            return redirect()->back();
        }
    }
