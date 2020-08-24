<?php 
class Personnage {

    // propriete
    public $vie = 20;
    public $atk = 20;
    public $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    // methode function
    public function crier()
    {
        echo 'je crie';
    }

    public function regenerer($vie = null)
    {
        if(is_null($vie)){
            $this->vie = 100;
        } else {
            $this->vie += $vie;
        }
        
    }

    public function mort()
    {
       return $this->vie <= 0;
    }

    public function attaque($cible){
        $cible->vie -= $this->atk;
    }
}