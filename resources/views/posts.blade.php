<!DOCTYPE html>

    <title>Blog</title>

    <link rel="stylesheet" href="/app.css">

    <body>

        <h1>Blog</h1>

        <?php foreach ($posts as $post) : ?>
            <article>
                <h2>
                    <a href="/posts/<?= $post->slug; ?>">                    
                        <?= $post->title; ?>
                    </a>
                </h2>
                <div>
                    <?= $post->body; ?>
                </div>
            </article>
        <?php endforeach; ?>

    </body>
</html>
