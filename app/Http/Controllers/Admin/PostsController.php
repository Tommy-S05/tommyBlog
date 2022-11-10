<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Models\Category;
    use App\Models\Post;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;

    class PostsController extends Controller
    {
        public function __construct() {
            $this->middleware('auth');
        }

        public function getAll(){
            $posts = Post::getAllPosts();
            $categories = Category::all();

            $data = [
              'posts' => $posts,
              'categories' => $categories
            ];

            return response()->json(
                [
                    "Result" => 1,
                    "Mensaje" => "Registros Obtenidos",
                    "data" => $data
                ],
                200
            );
        }

        public function index() {
            $response = $this->getAll()->getData();
            $posts = $response->data->posts;
            $categories = $response->data->categories;

            return view('Admin.Posts.index',
                [
                    'posts' => $posts,
                    'categories' => $categories
                ]);
        }

        public function create(Request $request){

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


            return response()->json(
                [
                    "Result" => 1,
                    "Mensaje" => "Registro agregado",
                    "Data" => $newPost
                ],
                200
            );
        }

        public function store(Request $request) {
            $response = $this->create($request)->getData();

            return redirect()->back();
        }

        public function modify(Request $request, $id){
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

            return response()->json(
                [
                    "Result" => 1,
                    "Mensaje" => "Registro modificado",
                    "Data" => $post
                ],
                200
            );
        }

        public function update(Request $request, $id){
            $response = $this->modify($request, $id)->getData();

            return redirect()->back();
        }

        public function destroy($id){
            $post = Post::find($id);
            $post->delete();

            return response()->json(
                [
                    "Result" => 1,
                    "Mensaje" => "Registro eliminado",
                    "Data" => null
                ],
                200
            );
        }

        public function delete($id){
            $response = $this->destroy($id)->getData();

            return redirect()->back();
        }
    }
