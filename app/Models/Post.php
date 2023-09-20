<?php

namespace App\Models;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post{

    public function __construct(public $title, public $excerpt, public $id, public $body){

    }
    public static function all(){
        return cache()->rememberForever('allPosts',function(){
            $files = File::files(resource_path("posts/"));

            return collect($files)->map(fn($file)=>YamlFrontMatter::parseFile($file))->map(fn($document)=>new Post(
                $document->title,
                $document->excerpt,
                $document->id,
                $document->body()
            ))->sortByDesc('id');
        });

        // return array_map(fn($file)=>$file->getContents(), $files);


    }


    public static function find($slug){
        // $path = resource_path("posts/{$slug}.html");
        
        $posts = static::all();
        
        $post = $posts->firstWhere('id', $slug);

        if(!isset($post)){
            throw New ModelNotFoundException();
        };
        
        return $post;

    }
}

















?>