<?php
    namespace App\Model;
    use App\Utils\connectBdd;

class Roles extends connectBdd{
    private $id_roles;
    private $nom_roles;

    public function __construct($name){
    $this->id_roles = 1;
        $this->nom_roles = $name;
    }

    public function getIdRoles(){
        return $this->id_roles;
    }
    public function getNomRoles(){
        return $this->nom_roles;
    }
    public function setNomRoles($name):void{
        $this->nom_roles = $name;
    }




















}

?>