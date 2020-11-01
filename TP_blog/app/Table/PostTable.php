<?php
namespace App\Table;
use Core\Table\Table;
/**
 * Class PostTable
 * @package App\Table
 */
class PostTable extends Table{
    
    protected $table = 'article';


    /**
     * récupère les derniers articles
     * @return array
     */

     public function last(){
         return $this->query("SELECT article.id, article.titre, article.contenu, article.date, categories.titre as categorie
                                FROM article
                                LEFT JOIN categories 
                                    ON article.category_id = categories.id
                                ORDER BY article.date DESC
                            ");
     }

     /**
     * récupère les derniers articles de la catégorie demandé
     * @param $category_id int
     * @return array
     */

    public function lastByCategory($category_id){
        return $this->query("SELECT article.id, article.titre, article.contenu, article.date, categories.titre as categorie
                                FROM article
                                LEFT JOIN categories
                                    ON article.category_id = categories.id
                                WHERE article.category_id = ?
                                ORDER BY article.date DESC", [$category_id]);
    }

     /**
     * récupère un article en lian la cétégorie associée
     * $param $id int
     * @return \App\Entity\PostEntity
     */

    public function find($id){
        return $this->query("SELECT article.id, article.titre, article.contenu, article.date, categories.titre as categorie
                                FROM article
                                LEFT JOIN categories
                                    ON article.category_id = categories.id
                                WHERE article.id = ?", [$id], true
                            );
    }

}
?>