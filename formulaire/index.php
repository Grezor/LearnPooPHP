<?php 
require_once('form.php');
$form = new Form($_POST);
?>

<form action="#" method="POST">
<?php
    echo $form->input('username');
    echo $form->input('password');
    echo $form->submit();
?>
</form>