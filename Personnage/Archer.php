<?php
class Archer extends Personnage {
    
    public $arc = 3;
    protected $vie = 40;

    public function __construct($nom)
    {
        parent::__construct($nom);
    }

    public function attaque($cible)
    {
        $cible->vie -= 2 * $this->atk;
        parent::attaque($cible);
    }
}