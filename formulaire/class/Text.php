<?php 
class Text {

    private static $suffix = ' €';
    const SUFFIX = " $";

    // public static function publicWithZero($chiffre){
    //     return self::withZero($chiffre);
    // }
    
    /**
     * [private] et activé la methode au dessus
     */
    public static function withZero($chiffre){
        if($chiffre < 10) {
            return '0' . $chiffre . self::$suffix . self::SUFFIX;
        } else {
            return $chiffre . self::$suffix . self::SUFFIX;
        }
    }
}