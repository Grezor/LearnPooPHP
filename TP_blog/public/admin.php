<?php

use Core\Auth\DBAuth;

define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';

App::load();
if (isset($_GET['p'])) {
    $page = $_GET['p'];
} else {
    $page = 'home';
}
// auth
$app = App::getInstance();
$auth = new DBAuth($app->getDb());

// si n'est pas
if ($auth->logged()) {
    $app->forbidden();
}


ob_start();
if($page === 'home'){
    require ROOT . '/pages/admin/posts/index.php';
}elseif ($page === 'posts.edit'){
    require ROOT . '/pages/admin/posts/edit.php';
}elseif ($page === 'posts.add'){
    require ROOT . '/pages/admin/posts/add.php';
}
$content = ob_get_clean();
require ROOT . '/pages/templates/default.php';
// var_dump($toto)
?>