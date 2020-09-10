<?php 
use App\App;
use App\Table\Post;
use \App\Table\Article;

    $post = Post::find($_GET['id']);
    if($_POST === false){
       App::notFound();
    }
    $categorie = Categorie::find($post->category_id);
?>

<h2><?= $post->titre ?></h2>
<h2><?= $categorie->titre; ?></h2>
<p><?= $post->contenu ?></p>