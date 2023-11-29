<?php
include "../config.php";
include "../dao/daoProduit.php";

$daoProduit = new DaoProduit($pdo);
$nomOfProduit = isset($_GET['nomOfProduit']) ? $_GET['nomOfProduit'] : "";
$produit = $daoProduit->findProduct($nomOfProduit);
?>