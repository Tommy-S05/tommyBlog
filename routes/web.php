<?php

    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
    Route::get('/post', [App\Http\Controllers\HomeController::class, 'post'])->name('post');

    Route::get('/admin', function () {
        return view('adminLTE');
    })->middleware('auth')->name('admin');

    Route::get('/admin/categories', [App\Http\Controllers\Admin\CategoriesController::class, 'index'])->name('admin.categories.index');
    Route::post('/admin/categories/store', [App\Http\Controllers\Admin\CategoriesController::class, 'store'])->name('admin.categories.store');
    Route::put('/admin/categories/update/{id}', [App\Http\Controllers\Admin\CategoriesController::class, 'update'])->name('admin.categories.update');
    Route::delete('/admin/categories/delete/{id}', [App\Http\Controllers\Admin\CategoriesController::class, 'delete'])->name('admin.categories.delete');

    Route::get('/admin/posts', [App\Http\Controllers\Admin\PostsController::class, 'index'])->name('admin.posts.index');
    Route::post('/admin/posts/store', [App\Http\Controllers\Admin\PostsController::class, 'store'])->name('admin.posts.store');
    Route::put('/admin/posts/update/{id}', [App\Http\Controllers\Admin\PostsController::class, 'update'])->name('admin.posts.update');
    Route::delete('/admin/posts/delete/{id}', [App\Http\Controllers\Admin\PostsController::class, 'delete'])->name('admin.posts.delete');

    Auth::routes();


