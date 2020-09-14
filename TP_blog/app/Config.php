<?php 
namespace App;

class Config {
    
    private $settings = [];
    private static $_instance;

    public function __construct()
    {
        $this->id = uniqid();
        $this->settings = require dirname(__DIR__) . '/config/config.php';
    }

    public static function getInstance()
    {
        return new Config();
        // si je n'est pas d'instance de la class static.
        if(is_null(self::$_instance)){
            // initialise
            self::$_instance = new Config();
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