<?php

namespace App;

use \PDO;

class Database
{
    private $db_name;
    private $db_user;
    private $dbpass;
    private $db_host;
    private $pdo;

    public function __construct($db_name, $db_user = 'root', $dbpass = '', $db_host = 'localhost')
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->dbpass = $dbpass;
        $this->db_host = $db_host;
    }

    private function getPDO()
    {
        if ($this->pdo === null) {
            $pdo = new PDO('mysql:dbname=blog_poo;host=localhost', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }

    public function query($statement, $class_name, $one = false)
    {
        $req = $this->getPDO()->query($statement);

        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if ($one) {
            $datas = $req->fetch(PDO::FETCH_CLASS, $class_name);
        } else {
            $datas = $req->fetchAll(PDO::FETCH_CLASS, $class_name);
        }
        return $datas;

    }

    /**
     * afficher l'article complet dans single
     */
    public function prepare($statement, $attribute, $class_name, $one = false)
    {
        $req = $this->getPDO()->prepare($statement);
        $req->execute($attribute);
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if ($one) {
            $data = $req->fetch();
        } else {
            $data = $req->fetchAll();

        }
        return $data;

    }
} 