## les propriété et methodes statiques

Si on crée une function static 
```php
class Debutant {

    public static function apprentissage($debutant){
        if($debutant < $pro) {
            return 'il faut encore apprendre' . $debutant ;
        }else {
            return 'vous pouvez passer un niveau' . $debutant ;
        }
    }
}
```
dans le fichier index : 
```php 
    Debutant::apprentissage()
```

le self fait référence a $this
