<?php 
require 'Personnage.php';
$merlin = new Personnage("Merlin");
$harry = new Personnage('Harry');

var_dump($merlin->getNom());
var_dump($merlin->getAtk());

$merlin->setNom('Merlin l\'enchanteur');

// $merlin->regenerer();
// $merlin->attaque($harry);


// if ($harry->mort()) {
//     echo 'harry est mort';
// } else {
//     echo 'harry est vivant avec' . $harry->vie ;
// }

echo '<pre>';
var_dump($merlin, $harry);
echo '</pre>';