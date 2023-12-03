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
        $prixTotal = $_POST['prixTotal'];
        $ville = $_POST['ville'];
        $addresse = $_POST['addresse'];

        if (isset($quantite, $prixTotal, $ville, $addresse)) {
                $commande = new Commande($dateCreation, $dateLivraison, $etat, $villeLivraison, $addresse);
                $dao->save($commande);
                session_start();
                $_SESSION['utilisateur']=$utilisateur;
                header('location: ../view/accountForm.php');
        }

        break;
}
