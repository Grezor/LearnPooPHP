<?php 
use App\App;
use App\Table\Article;
use App\Table\Categorie;

$post = Article::find($_GET['id']);
if ($post === false) {
    App::notFound();
}
App::setTitle($post->titre);

?>

<h2><?= $post->titre ?></h2>
<h2><?= $post->categorie; ?></h2>
<p><?= $post->contenu ?></p>