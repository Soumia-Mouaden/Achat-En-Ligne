<?php

include "../Dao/daoFacture.php";

$dao = new DaoFacture();

    session_start();
    if (isset($_SESSION['commandeId'])) {
        $idFacture = $_SESSION['commandeId'];
        echo $idFacture;
        $facture = $dao->Facturation($idFacture);
        echo $facture->numCommande;}
        
        
        

?>
