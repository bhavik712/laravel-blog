<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\Author;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// go inside the Controller
Route::get('/',[PostController::class ,'index']);

//Route model binding 
//if you want to bind another field can pass it as route link
//here posts/{post:slug} or In Post class return this field from getRouteKey function

Route::get('posts/{post}',[PostController::class, 'show']);

Route::get('categories/{category:name}', function (Category $category) {
    return view('posts',[
        'posts' => $category->posts,
        'categories' => Category::all(),
        'currentCategory' => $category
    ]);
});

Route::get('authors/{author:name}', function (Author $author) {
    return view('posts',[
        'posts' => $author->posts,
        'categories' => Category::all()
    ]);
});

