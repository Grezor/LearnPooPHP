<?php 
namespace Tutoriel;
/**
 * Class form
 * Permet de générer un formulaire rapidement et simplement
 */
class Form {
    /**
     * @var array donnée utilisées par le formulaire
     */
    protected $data;

    /**
     * @var string Tag utilisé pour entourer les champs
     */
    public $surround = 'p';

    /**
     * @param array $data
     */
    public function __construct($data = [])
    {
        $this->data = $data;
    }
    
    /**
     * @param $html string Code HTML a entourer 
     * @return string
     */
    protected function surround($html)
    {
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    /**
     * @param $index string  index de la valeur a récuperer
     * @return string
     */
    protected function getValue($index)
    {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * @param $name string
     * @return string
     */
    public function input($name)
    {
        return $this->surround('<input type="text" name="'. $name .'" value="'. $this->getValue($name) .'">');
    }
    
    /**
     * @return string
     */
    public function submit()
    {
       return $this->surround('<button type="submit">Envoyer</button>');
    }
}