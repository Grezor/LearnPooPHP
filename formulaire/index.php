<?php 
require_once('form.php');
require_once('text.php');
$form = new Form($_POST);
var_dump(Text::withZero(10))
?>

<form action="#" method="POST">
<?php
    echo $form->input('username');
    echo $form->input('password');
    echo $form->submit();
?>
</form>