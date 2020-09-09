<?php 
namespace App\Table;
use App\App;

class Article {

    public static function getLast()
    {
        return App::getDatabase()->query('SELECT * FROM articles', __CLASS__);
    }

    public function __get($key)
    {
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key();
    }

    public function getUrl()
    {
        return 'index.php?p=posts.show&id='. $this->id;
    }

    public function getExtrait()
    {
        $html = '<p>'. substr($this->contenu,0, 100) .'...</p>';
        $html .= '<p><a href="'. $this->getURL() .'">Voir la suite</a></p>';
        return $html;
    }
}