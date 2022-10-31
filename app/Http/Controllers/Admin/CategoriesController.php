<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Models\Category;
    use Illuminate\Http\Request;
    use Illuminate\Database\Eloquent\Builder;

    /**
     * @mixin Builder
     */

    class CategoriesController extends Controller
    {
        public function __construct() {
            $this->middleware('auth');
        }

        public function index() {
//            dd(Category::all());
            $categories = Category::all();
            return view('Admin.Categories.index', ['categories' => $categories]);
        }

        public function store(Request $request) {
//            $newCategory = new Category();
//            $newCategory->name = $request->name;
//            $newCategory->save();
            $newCategory = Category::create($request->all());
            return redirect()->back();
//            return response()->json(
//                [
//                    "Result" => 1,
//                    "Mensaje" => "Registro agregado",
//                    "Data" => $newCategory
//                ],
//                200);

        }

        public function update(Request $request, $id){
            $category = Category::find($id);
            $category->update($request->all());
            return redirect()->back();
        }

        public function delete($id){
            $category = Category::find($id);
            $category->delete();
            return redirect()->back();
        }
    }
