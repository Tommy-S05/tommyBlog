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

Route::get('/admin', function (){
    return view('adminLTE');
})->middleware('auth')->name('admin');

Route::get('/admin/categories', [App\Http\Controllers\Admin\CategoriesController::class, 'index'])->name('admin.categories');

Auth::routes();


