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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/posts', 'Api\PostController@index')->name('posts.index');
Route::get('/posts/{slug}', 'Api\PostController@show')->name('posts.show');

Route::get("/categories", "Api\CategoryController@index")->name("categories.index");
Route::get("/categories/{id}", "Api\CategoryController@show")->name("categories.show");
