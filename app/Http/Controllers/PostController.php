<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    //
    public function index(){
        //used Query Scope --> will go to model scopeFilter
        return view('posts',[
            'posts' => Post::latest('id')->filter(request(['search']))->get(),
            'categories' => Category::all()
        ]);
    }

    public function show(Post $post){
        return view('post',[
            'post' => $post,
        ]);
    }
}
