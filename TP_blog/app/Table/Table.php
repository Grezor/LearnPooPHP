<?php 
namespace App\Table;
use App\App;
use \PDO;
class Table {
    
    protected static $table;

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public static function find($id)
    {
        return static::query("SELECT * FROM " . static::$table . "WHERE id = ? ", [$id], true);
    }

    /**
     * Undocumented function
     *
     * @param [type] $statement
     * @param [type] $attributes
     * @param boolean $one, s on veux recuperer que un seule, par default false
     * @return void
     */
    public static function query($statement, $attributes = null, $one = false){
        if ($attributes) {
            return App::getDatabase()->prepare($statement, $attributes, get_called_class(), $one);
        } else {
            return App::getDatabase()->query($statement, get_called_class(), $one);
        }
      
    }

    public static function all()
    {
        return App::getDatabase()->query("SELECT * FROM " . self::$table . " ", get_called_class());
    }


    public function __get($key)
    {
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key();
    }
}