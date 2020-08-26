<?php 
require 'Personnage.php';
require 'Archer.php';

$merlin = new Personnage("Merlin");
$harry = new Personnage('Harry');
$arrow = new Archer('Oliver Queen');

$merlin->setNom('Merlin l\'enchanteur');
var_dump($merlin->getNom());
var_dump($merlin->getAtk());

$arrow->attaque($harry);
// $merlin->regenerer();
// $merlin->attaque($harry);


// if ($harry->mort()) {
//     echo 'harry est mort';
// } else {
//     echo 'harry est vivant avec' . $harry->vie ;
// }


var_dump($merlin, $harry, $arrow);