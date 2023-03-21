<?php
    namespace App\Model;
    use App\Utils\connectBdd;

class Chocoblast extends connectBdd{
    private $id_chocoblast;
    private $slogan_chocoblast;
    private $date_chocoblast;
    private $statut_chocoblast;
    private $cible_chocoblast;
    private $auteur_chocoblast;

    public function __constructor(){
        
    }

    public function getIdChocoblast():?int{
        return $this->id_cho
    }
}


?>