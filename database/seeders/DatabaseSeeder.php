<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $authors = Author::factory(2)->create();

        $php = Category::create([
            'name'=>'Php'
        ]);

        $html = Category::create([
            'name'=>'Html'
        ]);

        $post1 = Post::create([
            'author_id' => Author::first()->id,
            'category_id' => Category::find(2)->id,
            'title' => 'Introduction to Html',
            'excerpt' => 'This is My first blog on HTML.',
            'body' =>'This is My first blog on HTML.<ul><li>HTML stands for Hyper Text Markup Language</li><li>HTML describes the structure of a Web page</li><li>HTML consists of a series of elements</li><li>PHP is a widely-used, open source scripting language</li><li>HTML elements tell the browser how to display the content</li><li>HTML elements label pieces of content such as "this is a heading", "this is a paragraph", "this is a link", etc.</li></ul>'

        ]);

        $post2 = Post::create([
            'author_id' => Author::find(2)->id,
            'category_id' => Category::first()->id,
            'title' => 'Introduction to Php',
            'excerpt' => 'This is My first blog on Php.',
            'body' => 'This is My first blog on Php.<ul><li>PHP is an acronym for "PHP: Hypertext Preprocessor"</li><li>PHP is a widely-used, open source scripting language</li><li>PHP scripts are executed on the server</li><li>PHP is free to download and use</li></ul>'

        ]);
    }
}
