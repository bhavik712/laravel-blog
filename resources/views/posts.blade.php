<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to My Blog</title>
        <link rel="stylesheet" href="/app.css">
    </head>
    <body>
        <?php foreach($posts as $post): ?>
            <article class="article">
                <div class="title"><a href="posts/<?= $post->id ?>"><?= $post->title ?></a></div>
                <div class="body"><?= $post->excerpt?></div>
            </article>
        <?php endforeach; ?>

        
    </body>
</html>