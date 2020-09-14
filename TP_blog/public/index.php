<?php

use App\App;

session_start();
require '../app/Autoloader.php';
\App\Autoloader::register();

$app = App::getInstance();
$app->title = "titre de test";




?>