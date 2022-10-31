<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Models\Category;
    use Illuminate\Http\Request;

    class CategoriesController extends Controller
    {
        public function __construct() {
            $this->middleware('auth');
        }

        public function index() {
//            dd(Category::all());
            return view('Admin.Categories.index');
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
    }
