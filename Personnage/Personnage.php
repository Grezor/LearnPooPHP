<?php 
class Personnage {
    const MAX_VIE = 100;
    // private static $max_vie = 130

    // propriete
    protected $vie = 80;
    protected $atk = 20; 
    protected $nom;

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
            // $this->vie = 100;
            // $this->vie = self::$max_vie; // 130
            $this->vie = self::MAX_VIE; //100
            
        } else {
            $this->vie += $vie;
        }
    }

    public function mort()
    {
       return $this->vie <= 0;
    }

    // public function attaque($cible){
    //     $cible->vie -= $this->atk;
    //     $cible->empecher_negatif();
    // }
}