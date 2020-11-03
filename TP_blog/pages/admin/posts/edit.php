<?php
$postTable = App::getInstance()->getTable('Post');
if(!empty($_POST)){
    $result = $postTable->update($_GET['id'], [
        'titre' => $_POST['titre'], 
        'contenu' => $_POST['contenu'],
        'category_id' =>$_POST['category_id']
    ]);
    if ($result) { ?>
        <div class="alert alert-success">L'article a bien été ajouté</div>
    <?php 
    }
}
$post = $postTable->find($_GET['id']);
// recuperation des categories
$categories = App::getInstance()->getTable('category')->extract('id', 'titre');
$form = new \Core\HTML\BootstrapForm($_POST);
?>

<form method="POST">
    <?= $form->input('titre', 'titre de l\'article'); ?>
    <?= $form->input('contenu', 'contenu', ['type' => 'textarea']); ?>
    <?= $form->select('category_id', 'Catégorie', $categories); ?>
    <button class="btn btn-primary">sauvegarder</button>
</form>