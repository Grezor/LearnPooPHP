<?php 
require 'Personnage.php';
$merlin = new Personnage("Merlin");
$harry = new Personnage('Harry');

// $merlin->regenerer();
$merlin->attaque($harry);


$harry->regenerer();

if ($harry->mort()) {
    echo 'harry est mort';
} else {
    echo 'harry est vivant';
}

echo '<pre>';
var_dump($merlin, $harry);
echo '</pre>';