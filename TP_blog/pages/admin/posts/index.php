<?php 
$posts = App::getInstance()->getTable('POST')->all();

?>
<h1>Administrer les articles</h1>
<p>
    <a href="?p=posts.add" class="btn btn-success">Ajouter</a>
</p>
<table class="table">
    <thead>
        <tr>
            <td>Id</td>
            <td>titre</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($posts as $post): ?>
            <tr>
                <td><?= $post->id; ?></td>
                <td><?= $post->titre; ?></td>
                <td><a class="btn btn-primary" href="?p=posts.edit&id=<?= $post->id; ?>">Editer</a></td>
            </tr>
        <?php endforeach;  ?>
    </tbody>
</table>