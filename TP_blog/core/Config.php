<?php 
namespace Core;

class Config {
    
    private $settings = [];
    private static $_instance;

    public function __construct($file)
    {
        $this->settings = require($file);
    }

    public static function getInstance($file)
    {
        // si je n'est pas d'instance de la class static.
        if(is_null(self::$_instance)){
            // initialise
            self::$_instance = new Config($file);
        }
        return self::$_instance;
    }

    public function get($key) 
    {
        if (!isset($this->settings[$key])) {
            return null;
        }
        return $this->settings[$key];
    }
}