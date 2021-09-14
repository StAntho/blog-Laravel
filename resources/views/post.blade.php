<!DOCTYPE html>

    <title>Blog</title>

    <link rel="stylesheet" href="/app.css">
    
    <body>        
        <article>
            <h2>
            <?= $post->title; ?>
            </h2>
            <div>
            <?= $post->body; ?>
            </div>
        </article>
        <a href="/">Go Back</a>
    </body>