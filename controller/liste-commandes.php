<?php 
include "../dao/daoCommande.php";
//include "../dao/daoProduit.php";
$dao = new DaoCommande();
$listeCommandes = $dao->listeCommandes();

$LC = "";
if (!empty($listeCommandes) > 0){
    while ($row = $listeCommandes->fetch(PDO::FETCH_ASSOC)){
        $LC .= '<tr>
            <td>
										<span >
											<input type="checkbox" id="checkbox1" name="options[]" value="1">
											<label for="checkbox1"></label>
										</span>
									</td>
                                    <td> ' . $row["numCommande"] . '</td>                    
            <td>' . $row["dateCreation"] . '</td>
            <td>'. $row["dateLivraison"] . '</td>
            <td>'. $row["villeLivraison"] . '</td>
            <td><span class="status text-success">&bull;</span>'. $row["etat"] . '</td>
            <td>                       
            <a href="#detailComdModal'. $row["numCommande"] . '" class="read" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit"> &#x1F441;</i></a>
										<a href="#editProdModal'. $row["numCommande"] . '" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
										
									</td>
           
        </tr>';


        $LC .= '<div id="detailComdModal' . $row["numCommande"] . '" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                
                    <div class="modal-header">						
                        <h4 class="modal-title">Liste des produits</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
            <div style="display: flex; ">
            <div class="main"> ';

        $liste_Prod_Com=$dao->liste_Prod_Commande($row["numCommande"]);
        if (!empty($liste_Prod_Com) > 0){
            while ($produit = $liste_Prod_Com->fetch(PDO::FETCH_ASSOC)){
                $LC .= '<div class="row row-main ">
            <div class="col-3"> <img class="img-fluid" src="../view/' . $produit["image"] . '" alt="product"> </div>
            <div class="col-6">
                <div class="row d-flex">
                    <p><b>' . $produit["nom"] . '</p>
                </div>
                <div class="row d-flex">
                    <p class="text-muted">Quantité: ' . $produit["quantite"] . 'Kg</p>
                </div>
            </div>
            <div class="col d-flex justify-content-end">
                <p><b>' . $produit["prix"] . ' MAD</b></p>
            </div>

        </div>
        ';
            }}

        $total=$dao->Prix_Commande($row["numCommande"]);
        $LC .= '<hr>
        <div class="total">
            <div class="row">
                <div class="col"> <b> Total:</b> </div>
                <div class="col d-flex justify-content-end"> <b>'.$total.' MAD</b> </div>
            </div>
        </div>
    </div>
                         
                    </div>
                   
               
            </div>
        </div>
        </div>
        </div>';

}
}


echo $LC;
?>