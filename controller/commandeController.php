<?php
include "../dao/daoCommande.php";
include "../dao/daoProduit.php";
include "../dao/daoCommandeProduit.php";

$action = $_GET['action'];
$daoC = new DaoCommande();
$daoCP = new DaoCommandeProduit();


switch ($action) {   
    case 'insertionCommande':
        $villeLivraison = $_POST['ville'];
        $adresse = $_POST['adresse'];
        $dateCreation = date("Y-m-d H:i:s");
        $dateLivraison = "";
        $etat = "en attente";

        if (isset($villeLivraison, $adresse)) {
                $commande = new Commande($dateCreation, $dateLivraison, $etat, $villeLivraison, $adresse);
                $numCommandee = $daoC->insererCommande($commande);
        }

        session_start();
        $idOfProduitt = $_SESSION['idOfProductt'];
        $quantite = $_POST['quantite'];

        if (isset($idOfProduitt, $quantite, $numCommandee)) {
<<<<<<< HEAD
            $commandeProduit = new CommandeProduit($quantite,$idOfProduitt,$numCommandee);
            $daoCP->insererCommandeProduit($commandeProduit);
            $_SESSION['facture']=$numCommandee;
            // header('location: ../view/detailProduit.php');  
        }
        // else header('location: ../view/detailProduit.php');   

        break;
=======
                
                $commandeProduit = new CommandeProduit($quantite,$idOfProduitt,$numCommandee);
                $daoCP->insererCommandeProduit($commandeProduit);
                $_SESSION['commandeId']=$numCommandee;
                header('location: ../controller/controlleFacture.php');
            }
            else header('location: ../view/detailProduit.php');   
    
            break;
>>>>>>> 422e47f2c95cbe4a1b83468d9b975dc64c4adcf4
}
