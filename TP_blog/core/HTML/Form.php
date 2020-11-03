<?php 
namespace Core\HTML;

/**
 * Class Form
 * permet de générer un formulaire rapidement et simplement
 */

class Form {
    /**
     * @var array données utilisés par le formulaire
     */
    private $data;

    /**
     * @var string tag utilisé pour entourer les champs
     */
    public $surround = 'p';

    /**
     * @param array $data données utilisés par le formulaire
     */
    public function __construct($data = array()){
        $this->data = $data;
    }

    /**
     * @param $html string code html à entourer
     * @return string
     */
    protected function surround($html){
        return "<{$this->surround}>{$html}</'$this->surround}>";
    }

    /**
     * @param $index string Index de la valeur à récupérer
     * @return string
     */
    protected function getValue($index){
        if(is_object($this->data)){
            return $this->data->$index;
        }
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * Undocumented function
     *
     * @param string $name
     * @param $label
     * @param array $options
     * @return string
     */
    public function input($name, $label, $options = []){
        // si on passe le type en paramétre, ca sera le type sinon champs text
        $type = isset($options['type']) ? $options['type'] : 'text';
        return $this->surround('<input type="'. $type .'" name="' . $name . '" value="' .$this->getValue($name) . '">');
    }

    /**
     * @return string
     */
    public function submit(){
        return $this->surround ('<button type="submit">Envoyer</button>');
    }
}
?>