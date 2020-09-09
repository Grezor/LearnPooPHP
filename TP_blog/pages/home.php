<ul>
    <?php foreach (\App\Table\Article::getLast() as $post): ?>
        <h5><a href="<?= $post->url; ?>"><?= $post->titre; ?></a></h5>
        <p><?= $post->extrait; ?></p>
    <?php endforeach; ?>
</ul>