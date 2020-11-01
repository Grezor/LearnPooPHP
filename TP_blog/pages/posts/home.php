<div class="row">
    <div class="col-sm-8">
        <?php

        use App\Table\Categorie;
        

        foreach (App::getInstance()->getTable('Post')->last() as $post): ?>

            <h5><a href="<?= $post->url; ?>"><?= $post->titre; ?></a></h5>
            <p><em><?= $post->categorie; ?></em></p>
            <p><?= $post->extrait; ?></p>

        <?php endforeach; ?>
    </div>

    <div class="col-sm-4">

            <?php foreach (App::getInstance()->getTable('Category')->all() as $categorie): ?>
        <ul><li><a href="<?= $categorie->url; ?>"><?= $categorie->titre; ?></a></li>    </ul>
            <?php endforeach; ?>

    </div>
</div>
