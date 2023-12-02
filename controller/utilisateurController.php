<?php
    include "../dao/daoUtilisateur.php";
    $email1 = $_POST['email'];
    $mdp1 = $_POST['mdp'];
    $action = $_GET['action'];
    
    switch($action){
        case 'connexion':
            // Cas de connexion d'un client
            $con1 = new DaoUtilisateur();
            $utilisateur = $con1->findUtilisateur($email1,$mdp1);
            session_start();
            $_SESSION['utilisateur'] =$utilisateur;
            $_SESSION['id'] = $utilisateur->getId(); 
            if($utilisateur!=null){
                header("Location: ../index.php");
                exit();

            }
            

            // Cas ou Mot de passe ou email erronée ou pas un membre
            else{
               header("Location: ../view/reconnexion.php");
            }
           break;
        
        case 'deconnexion':
            session_start();
            $con1 = new DaoUtilisateur();
            $utilisateur = $con1->findUtilisateur("","");
            session_start();
            $_SESSION['utilisateur'] =$utilisateur;
            //session_reset();
            //session_destroy(); Supprime le tableau superglobal $_SESSION ==>> error dans la index.php (indefined key cin !!)
            header("Location: ../index.php");
        case 'create':
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            $mdp = $_POST['mdp'];
            $genre= $_POST['genre'];
            $ville = $_POST['ville'];
            $role = $_POST['role'];
            
            if (isset($nom, $prenom, $tel, $email, $mdp ,$ville, $genre, $role)) {
                $dao = new DaoUtilisateur();
                $client = new Utilisateur($nom,$prenom,$email,$tel,$genre,$mdp,$ville,$role);
                $dao->save($client);
                header('location: ../view/connexion.php');
            }
            break;
        
            case 'commander':
                session_start();
            
                // Vérifier si l'utilisateur est connecté
                if (isset($_SESSION['utilisateur'])) {
                    // Utilisateur connecté, rediriger vers la page d'accueil
                    header("Location: ../index.php");
                    exit();
                } else {
                    // Utilisateur non connecté, rediriger vers la page de connexion
                    header("Location: ../view/connexion.php");
                    exit();
                }
                break;}
            
?>