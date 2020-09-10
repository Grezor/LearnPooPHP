<?php
use App\App;
use App\Table\Article;
use App\Table\Categorie;

$categorie = Categorie::find($_GET['id']);
$articles = Article::lastByCategory($_GET['id']);
$categories = Categorie::all();
if($categorie === false){
    App::notFound();
}
?>
<h1><?= $categorie->titre ?></h1>

<div class="row">
    <div class="col-sm-8">
    <ul>
        <?php foreach ($articles as $post): ?>
            <h5><a href="<?= $post->url; ?>"><?= $post->titre; ?></a></h5>
            <p><em><?= $post->categorie; ?></em></p>
            <p><?= $post->extrait; ?></p>
        <?php endforeach; ?>
    </ul>
    </div>
    <div class="col-sm-4">
        <?php foreach (\App\Table\Categorie::all() as $categorie): ?> 
            <li><a href="<?= $categorie->url; ?>"><?= $categorie->titre; ?></a></li>
        <?php endforeach ?>
    </div>
</div>

