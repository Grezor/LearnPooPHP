<?php

// use App\App;

session_start();
require '../app/Autoloader.php';
\App\Autoloader::register();
//apel du singleton
$app = App\App::getInstance();
// factory
$post = $app->getTable('Posts');




?>