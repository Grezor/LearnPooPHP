<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    

<?php 
require_once('form.php');
require_once('BootstrapForm.php');
require_once('text.php');
$form = new BootstrapForm($_POST);
// var_dump(Text::withZero(10))
?>

<form action="#" method="POST">
<?php
    echo $form->input('username');
    echo $form->input('password');
    echo $form->submit();
?>
</form>

</body>
</html>