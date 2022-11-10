<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//    Route::post('/admin/categories/store', [App\Http\Controllers\Admin\CategoriesController::class, 'store'])->name('admin.categories.store');

    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
    });

    Route::get('/admin/getCategories', [App\Http\Controllers\Admin\CategoriesController::class, 'getAll']);
    Route::post('/admin/categories/create', [App\Http\Controllers\Admin\CategoriesController::class, 'create']);
    Route::put('/admin/categories/modify/{id}', [App\Http\Controllers\Admin\CategoriesController::class, 'modify']);
    Route::delete('/admin/categories/destroy/{id}', [App\Http\Controllers\Admin\CategoriesController::class, 'destroy']);

    Route::get('/admin/getPosts', [App\Http\Controllers\Admin\PostsController::class, 'getAll']);
    Route::post('/admin/posts/create', [App\Http\Controllers\Admin\PostsController::class, 'create']);
    Route::put('/admin/posts/modify/{id}', [App\Http\Controllers\Admin\PostsController::class, 'modify']);
    Route::delete('/admin/posts/destroy/{id}', [App\Http\Controllers\Admin\PostsController::class, 'destroy']);
