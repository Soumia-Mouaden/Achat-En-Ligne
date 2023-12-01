<?php
include __DIR__ . "/../model/produit.php";

class DaoProduit
{

    private $dbh;

    public function __construct()
    {
        try {
            $this->dbh = new PDO('mysql:host=localhost;dbname=patisserie', "root", "");
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function findProduct($idOfProduit)
    {
        $produit = null;
        $stm = $this->dbh->prepare("SELECT * FROM Produit where id=?");
        $stm->bindValue(1, $idOfProduit);

        $stm->execute();

        $result = $stm->fetch(PDO::FETCH_ASSOC);
        if (!empty($result)) {
            $produit = new Produit($result['id'],$result['nom'],$result['categorie'], $result['image'], $result['prix'], $result['description'],$result['ingredients'],$result['allergie'],$result['conservation']);
        }
        return $produit;
    }

    public function ProductsOfCategory($categoryOfProduct,$idOfProduct)
    {
        $stm = $this->dbh->prepare("SELECT * FROM Produit WHERE categorie=? AND id!=?");
        $stm->bindValue(1, $categoryOfProduct);
        $stm->bindValue(2, $idOfProduct);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);

        $produits = [];
        foreach ($result as $row) {
            $produit = new Produit($row['id'],$row['nom'],$row['categorie'], $row['image'], $row['prix'], $row['description'],$row['ingredients'],$row['allergie'],$row['conservation']);
            $produits[] = $produit;
        }

        return $produits;
    }
    public function listProduits(){
        $stm = $this->dbh->prepare("SELECT * FROM Produit");
        $stm->execute();
        $result=$stm;
        return  $result;

    }


}

?>
