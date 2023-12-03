<?php

include "../Dao/daoFacture.php";

$dao = new DaoFacture();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['commandId'])) {
        $idFacture = $_GET['commandId'];
        $facture = $dao->Facturation($idFacture);
        
        
        if ($facture) {
            
            session_start();
            $_SESSION['facture'] = $facture;

            
          header("Location: ../view/invoice.php");
           exit();
        } else {
            echo "Facture not found for command ID: $idFacture";
     }
    } else {
       echo "Command ID not set in the form submission.";
    }
}
?>
