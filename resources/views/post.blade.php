<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to My Blog</title>
        <link rel="stylesheet" href="/app.css">
    </head>
    <body>
        <article class="article">
            <div class="title"><?= $post->title ?></a></div>
            <div class="body"><?= $post->body?></div>
            
        </article>
        <a href="/">Home</a>
    </body>
</html>