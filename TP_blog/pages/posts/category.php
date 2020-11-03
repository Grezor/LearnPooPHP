<?php
$app = App::getInstance();

$categorie = $app->getTable('Category')->find($_GET['id']);
if ($categorie === false) {
    $app->notFound();
}

$articles = $app->getTable('Post')->lastByCategory($_GET['id']);
$categories = $app->getTable('Category')->all();
?>
<h1><?= $categorie->titre; ?></h1>
<div class="row">
    <div class="col-sm-8">
        <?php foreach ($article as $post): ?>
            <h5><a href="<?= $post->url; ?>"><?= $post->titre; ?></a></h5>
            <p><em><?= $post->categorie; ?></em></p>
            <p><?= $post->extrait; ?></p>
        <?php endforeach; ?>
    </div>

    <div class="col-sm-4">

        <?php foreach ($categories as $categorie): ?>
            <ul><li><a href="<?= $categorie->url; ?>"><?= $categorie->titre; ?></a></li>    </ul>
        <?php endforeach; ?>

    </div>
</div>