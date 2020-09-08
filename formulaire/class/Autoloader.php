<?php 
class Autoloader {
    static function register(){
        spl_autoload_register([
            __CLASS__, 'autoload'
        ]);
    }

    static function autoload($class){
        $class_name = str_replace('Tutoriel', '', $class);
        $class_name = str_replace('\\', '/', $class_name);
        var_dump($class_name);
        require 'class/' . $class_name . '.php';
    }
}