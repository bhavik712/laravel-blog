<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\Author;

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

Route::get('/', function () {
    return view('posts',[
        'posts' => Post::latest('id')->get(),
        'categories' => Category::all()
    ]);
});

//Route model binding 
//if you want to bind another field can pass it as route link
//here posts/{post:slug} or In Post class return this field from getRouteKey function

Route::get('posts/{post}', function (Post $post) {
    return view('post',[
        'post' => $post,
        'categories' => Category::all()
    ]);
});

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

