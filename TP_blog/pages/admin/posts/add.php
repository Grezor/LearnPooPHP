<?php
$postTable = App::getInstance()->getTable('Post');
if(!empty($_POST)){
    $result = $postTable->create([
        'titre' => $_POST['titre'], 
        'contenu' => $_POST['contenu'],
        'category_id' =>$_POST['category_id']
    ]);
    if ($result) {
       header('Location: admin.php?p=posts.edit&id='. App::getInstance()->getDb()->lastInsertId());
    }
}

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