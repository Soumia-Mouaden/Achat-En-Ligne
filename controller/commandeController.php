<?php
include "../dao/daoCommande.php";

$action = $_GET['action'];
$dao = new DaoCommande();

switch ($action) {
    case 'insertionCommande':
        $quantite = $_POST['quantite'];
        $prixTotal = $_POST['prixTotal'];
        $ville = $_POST['ville'];
        $addresse = $_POST['adresse'];

        if (isset($quantite, $prixTotal, $ville, $adresse)) {
                $commande = new Commande($dateCreation, $dateLivraison, $etat, $villeLivraison, $adresse);
                $dao->save($commande);
                session_start();
                $_SESSION['utilisateur']=$utilisateur;
                header('location: ../view/accountForm.php');
        }
        break;
}
