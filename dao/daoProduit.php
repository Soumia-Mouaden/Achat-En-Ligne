<?php
include "../model/produit.php";

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
    // public function save(User $utilisateur)
    // {
    //     $stm = $this->dbh->prepare("INSERT INTO user VALUES (?, ?, ?, ?, ?, ?)");

    //     $stm->bindValue(1, $utilisateur->getEmail());
    //     $stm->bindValue(2, $utilisateur->getPassword());
    //     $stm->bindValue(3, $utilisateur->getName());
    //     $stm->bindValue(4, $utilisateur->getSurname());
    //     $stm->bindValue(5, $utilisateur->getTelephone());
    //     $stm->bindValue(6, $utilisateur->getGender());

    //     $stm->execute();
    // }

    public function findProduct($nomOfProduit)
    {
        $produit = null;
        $stm = $this->dbh->prepare("SELECT * FROM Produit where nom=?");
        $stm->bindValue(1, $nomOfProduit);

        $stm->execute();

        $result = $stm->fetch(PDO::FETCH_ASSOC);
        if (!empty($result)) {
            $produit = new Produit($result['id'],$result['nom'],$result['categorie'], $result['image'], $result['prix'], $result['description'],$result['ingredients'],$result['allergie'],$result['conservation']);
        }
        return $produit;
    }

}

?>
