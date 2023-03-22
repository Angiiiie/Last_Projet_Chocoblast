<?php
    namespace App\Controller;
    use App\Model\Utilisateur;
    use App\Utils\Fonctions;

    class UserController extends Utilisateur{
        //fonction pour ajout utilisateur en bdd
        public function insertUser(){
            //var pour stocker les msg d'erreur
            $msg = "";
            //logique de la 
            //test si le bouton est cliqué
            if(isset($_POST['submit'])){
                //Récupère et nettoie les input du form
                $nom = Fonctions::cleanInput($_POST['nom_utilisateur']);
                $prenom = Fonctions::cleanInput($_POST['prenom_utilisateur']);
                $mail = Fonctions::cleanInput($_POST['mail_utilisateur']);
                $password = Fonctions::cleanInput($_POST['password_utilisateur']);
                
                if(!empty($nom) AND !empty($prenom) AND !empty ($mail) AND !empty($password)){
                    $user = new Utilisateur();



                    $this->setMailUtilisateur($mail);
                    $user->setMailUtilsateur($mail);
                    //vérifier si le compte existe déjà
                    if($this->getUserByMail()){
                        $msg = "Les informations sont incorrectes";

                    }else{ 
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $this->setNomUtilisateur($nom);
                    $this->setPrenomUtilisateur($prenom);
                    $this->setPasswordUtilisateur($password);
                    //var_dump($this);
                    
                    $this->addUser();
                    
                    $msg = "Le compte: ".$mail." a été ajouté en Bdd";
                    }
                }
                else{
                    //Si les champs ne sont pas tous remplis
                    $msg = "Veuillez remplir tous les champs du formulaire";
                }


            }
            //importer la vue 
            include './App/Vue/viewAddUser.php';

        }
    }










?>