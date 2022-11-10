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

        public function getAll(){
            $categories = Category::all();
            return response()->json(
                [
                    "Result" => 1,
                    "Mensaje" => "Registros Obtenidos",
                    "data" => $categories
                ],
                200
            );
        }

        public function index() {
            $response = $this->getAll()->getData();
            $categories = $response->data;

            return view('Admin.Categories.index',
                [
                    'categories' => $categories
                ]
            );
        }

        public function create(Request $request){
            $newCategory = Category::create($request->all());

            return response()->json(
                [
                    "Result" => 1,
                    "Mensaje" => "Registro Agregado",
                    "data" => $newCategory
                ],
                200);
        }

        public function store(Request $request) {
            $response = $this->create($request)->getData();

            return redirect()->back();
        }

        public function modify(Request $request, $id){
            $category = Category::find($id);
            $category->update($request->all());

            return response()->json(
                [
                    "Result" => 1,
                    "Mensaje" => "Registro modificado",
                    "Data" => $category
                ]
            );
        }

        public function update(Request $request, $id){
            $response = $this->modify($request, $id)->getData();

            return redirect()->back();
        }

        public function destroy($id){
            $category = Category::find($id);
            $category->delete();

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
