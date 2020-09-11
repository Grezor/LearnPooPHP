<?php 
namespace App\Table;
use App\App;

class Article extends Table {

    protected static $table = 'articles';

    // public function __get($key)
    // {
    //     $method = 'get' .ucfirst($key);
    //     $this->$key = $this->$method();
    //     return $this->$key;
    // }

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public static function find($id)
    {
        return self::query("SELECT articles.id, articles.titre, articles.contenu, categories.titre as categorie 
                                FROM articles 
                                LEFT JOIN categories ON category_id = categories.id 
                                WHERE articles.id = ?
                            ", [$id], get_called_class(), true);
    }
    /**
     * get last
     *
     * @return void
     */
    public static function getLast()
    {
        return self::query("SELECT articles.id, articles.titre, articles.contenu, categories.titre as categorie 
                                FROM articles 
                                LEFT JOIN categories ON category_id = categories.id
                                ORDER BY articles.date DESC
                        ");
    }
    /**
     * Undocumented function
     *
     * @param [type] $category_id
     * @return void
     */
    public static function lastByCategory($category_id)
    {
        return self::query("SELECT articles.id, articles.titre, articles.contenu, categories.titre as categorie 
                                FROM articles 
                                LEFT JOIN categories 
                                    ON category_id = categories.id 
                                WHERE category_id = ? 
                                ORDER BY articles.date DESC
                            ",[$category_id]);
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function getUrl()
    {
        return 'index.php?p=article&id='. $this->id;
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function getExtrait()
    {
        $html = '<p>'. substr($this->contenu,0, 100) .'...</p>';
        $html .= '<p><a href="'. $this->getUrl() .'">Voir la suite</a></p>';
        return $html;
    }
}