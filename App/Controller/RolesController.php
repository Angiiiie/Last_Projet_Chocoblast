<?php
    namespace App\Controller;
    use App\Model\roles;
    use App\Utils\Fonctions;

    class RolesController extends roles{
        public function insertRoles(){
            $msg = "";

            if(isset($_POST['submit'])){
            $roles = Fonctions::cleanInput($_POST['nom_roles']);

                if(!empty($roles)){
                $this->setNomRoles($roles);

                    $msg = "Le rôle" .$roles. "a bien été ajouté en Bdd";
                    
            
                }else{
                $msg = "Erreur";                
                }
            }

        }
    }























?>