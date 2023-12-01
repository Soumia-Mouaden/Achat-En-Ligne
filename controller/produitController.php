<?php
include "../config.php";
include "../dao/daoProduit.php";

$daoProduit = new DaoProduit($pdo);
$idOfProduit = isset($_GET['idOfProduit']) ? $_GET['idOfProduit'] : "";
$produit = $daoProduit->findProduct($idOfProduit);
$categoryOfProduct = $produit->getCategorie();
$produits = $daoProduit->ProductsOfCategory($categoryOfProduct,$idOfProduit);

?>