<ul>
    <?php foreach ($db->query('SELECT * FROM articles', 'App\Table\Article') as $post): ?>
        <h5><a href="<?= $post->url; ?>"><?= $post->titre; ?></a></h5>
        <p><?= $post->extrait; ?></p>
    <?php endforeach; ?>
</ul>