<div class="row">
    <div class="col-sm-8">
        <?php

        use App\Table\Categorie;
        use App\Table\Article;

        foreach (Article::getLast() as $post): ?>

            <h5><a href="<?= $post->url; ?>"><?= $post->titre; ?></a></h5>
            <p><em><?= $post->categorie; ?></em></p>
            <p><?= $post->extrait; ?></p>

        <?php endforeach; ?>
    </div>
    <div class="col-sm-4">
        <?php foreach(Categorie::all() as $categorie): ?>
        <li><a href="<?= $categorie->url; ?>"><?= $categorie->titre; ?></a></li>
        <?php endforeach; ?>
    </div>
</div>