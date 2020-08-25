<?php 
class Personnage {

    // propriete
    private $vie = 80;
    private $atk = 20;
    private $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    private function enpecher_negatif(){
        if ($this->vie < 0) {
            $this->vie = 0;
        }
    }

    public function getNom(){
        return $this->nom;
    }

    public function getVie(){
        return $this->vie;
    }

    public function getAtk(){
        return $this->atk;
    }

    public function setNom($nom){
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
        $cible->empecher_negatif();
    }
}