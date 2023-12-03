<?php
include "../dao/daoCommande.php";

//include "../dao/daoCommandeProduit.php";

$action = $_GET['action'];
$daoC = new DaoCommande();



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
            $commandeProduit = new CommandeProduit($quantite,$idOfProduitt,$numCommandee);
            $daoC->insererCommandeProduit($commandeProduit);
            $_SESSION['commandeId']=$numCommandee;
            header('location: controlleFacture.php');  
        }
        // else header('location: ../view/detailProduit.php');   

        break;
}
