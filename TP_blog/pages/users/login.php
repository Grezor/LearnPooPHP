<?php
// si j'ai des données qui sont poster
if(!empty($_POST)){
    $auth = new \Core\Auth\DBAuth(App::getInstance()->getDb());
    if($auth->login($_POST['username'], $_POST['password'])){
        header('Location: admin.php');
    } else {
    ?>
        <div class="alert alert-danger">
            Identifiant Incorrect
        </div>
    <?php
    }
}
$form = new \Core\HTML\BootstrapForm($_POST);
?>

<form method="POST">
    <?= $form->input('username', 'pseudo'); ?>
    <?= $form->input('password', 'mot de passe', ['type' => 'password']); ?>
    <button class="btn btn-primary">Envoyer</button>
</form>