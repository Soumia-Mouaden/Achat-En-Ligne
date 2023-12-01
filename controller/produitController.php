<?php
include "../config.php";
include "../dao/daoProduit.php";

$daoProduit = new DaoProduit($pdo);
$idOfProduit = isset($_POST['idOfProduit']) ? $_POST['idOfProduit'] : "";
$produit = $daoProduit->findProduct($idOfProduit);
header('Location: ../view/detailProduit.php?produit=' . $produit);

$categoryOfProduct = $produit->getCategorie();
$produits = $daoProduit->ProductsOfCategory($categoryOfProduct,$idOfProduit);
header('location : ../view/detailProduit.php?produit='.$produit.'');

?>