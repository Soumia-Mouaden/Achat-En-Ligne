<?php

<<<<<<< HEAD
include "../dao/daoFacture.php";

$dao = new daoFacture();
=======
include "../Dao/daoFacture.php";

$dao = new DaoFacture();
>>>>>>> 101a1b67fb4ecb60b06c0388dac5a6cbe582a42d

    session_start();
    if (isset($_SESSION['commandeId'])) {
        $idFacture = $_SESSION['commandeId'];
        echo $idFacture;
        $facture = $dao->Facturation($idFacture);
<<<<<<< HEAD
        foreach ($facture as $commandeProduit) {
            echo '<td class="col-md-6">' . $commandeProduit->nom . '</td>';
            echo '<td class="col-md-3">' . $commandeProduit->quantité . '</td>';
            echo '<td class="col-md-3">' . $commandeProduit->quantité * $commandeProduit->prix . '</td>';
        }
        if ($facture) {
            
            
            $_SESSION['facture'] = $facture;
           

            
          header("Location: ../view/invoice.php");
           exit();
        } else {
            echo "Facture not found for command ID: $idFacture";
     }
    }
    else {
        echo "Error: \$idFacture is null.";
    }

=======
        echo $facture->numCommande;}
>>>>>>> 101a1b67fb4ecb60b06c0388dac5a6cbe582a42d
        
        
        

?>
