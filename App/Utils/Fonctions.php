<?php
    namespace App\Utils;
    
    class Fonctions{
        //!nettoyer les entrées du form!
        public static function CleanInput($value){
            return htmlspecialchars(strip_tags(trim($value)));
        }
    }

?>