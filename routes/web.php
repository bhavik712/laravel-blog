<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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
        'posts' => Post::all()
    ]);
});

//Route model binding 
//if you want to bind another field can pass it as route link
//here posts/{post:slug} or In Post class return this field from getRouteKey function

Route::get('posts/{post}', function (Post $post) {
    return view('post',[
        'post' => $post
    ]);
});
