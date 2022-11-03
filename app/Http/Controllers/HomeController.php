<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $posts = Post::all();
//        $category = Category::find(1);
//        dd($category->posts);
        return view('posts',
        [
            'categories' => $categories,
            'posts' => $posts
        ]);
    }

    public function postByCategory($category){
        $categories = Category::all();
        $category = Category::where('name', '=', $category)->first();
        $categoryIdSelected = $category->id;
        $posts = Post::where('category_id', "=", $categoryIdSelected)->get();

        return view('posts',
            [
                'categories' => $categories,
                'posts' => $posts,
                'categoryIdSelected' => $categoryIdSelected
            ]);
    }

    public function post()
    {
        return view('post');
    }
}
