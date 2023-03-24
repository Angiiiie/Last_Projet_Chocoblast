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


    public function addRoles():void{
        try{
            //récupérer les données
            $roles = $this->nom_roles;

            //appel connexion
            $req = $this->connexion()->prepare('INSERT INTO roles(nom_roles) VALUES(?)');
            $req->bindParam(1, $roles, \PDO::PARAM_STR);

            //executer la requête
            $req->execute();
        }
        catch(\Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }











}

?>