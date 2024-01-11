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
        $etat = "En cours de traitement";

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
    case 'confirmationPanier' :
        $villeLivraison = $_POST['ville'];
        $adresse = $_POST['adresse'];
        $dateCreation = date("Y-m-d H:i:s");
        $dateLivraison = "";
        $etat = "En cours de traitement";

        if (isset($villeLivraison, $adresse)) {
                $commande = new Commande($dateCreation, $dateLivraison, $etat, $villeLivraison, $adresse);
                $numCommandee = $daoC->insererCommande($commande);
        }
        $villeLivraison = $_POST['ville'];
        $adresse = $_POST['adresse'];

        $donneesSupplementaires = $_POST['donneesSupplementaires'];

    // Décoder la chaîne JSON en tableau PHP
    $cartItems = json_decode($donneesSupplementaires, true);
    session_start();
    // Parcourir le tableau et extraire les valeurs d'ID et de quantité
    foreach ($cartItems as $item) {
        $idOfProduit = $item['id'];
        $quantite = $item['quantity'];
        $commandeProduit = new CommandeProduit($quantite,$idOfProduit,$numCommandee);
        $daoC->insererCommandeProduit($commandeProduit);
        $_SESSION['commandeId']=$numCommandee;
        header('location: controlleFacture.php');  
    }
        break;
}
