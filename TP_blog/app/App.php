<?php

namespace App;

class App
{

    const DB_NAME = 'blog';
    const DB_USER = 'root';
    const DB_PASS = '';
    const DB_HOST = 'localhost';


    private static $database;
    private static $titleOnglet = 'Mon super site';

    // connexion a al base de donnée
    public static function getDb()
    {
        if (self::$database === null) {
            self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
        }
        return self::$database;
    }

    public static function notFound()
    {
        header("HTTP/1.0 404 Not Found");
        header('Location:index.php?p=404');
    }

    // affiche le nom de la categorie dans l'onglet
    /**
     * Return le titre de l'article
     * @return string
     */
    public static function getTitleOnglet()
    {
        return self::$titleOnglet;
    }

    public static function setTitleOnglet($title)
    {
        self::$titleOnglet = $title;
    }

} 