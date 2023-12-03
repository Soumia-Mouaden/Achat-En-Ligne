<?php
include "../model/commande.php";
include "../model/produit.php";
include "../model/commande_produit.php";

class DaoCommande
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
    public function save(Commande $commande)
    {
        $stm = $this->dbh->prepare("INSERT INTO commande VALUES (?, ?, ?, ?, ?, ?)");

        $stm->bindValue(1, $commande->getNumCommande());
        $stm->bindValue(2, $commande->getDateCreation());
        $stm->bindValue(3, $commande->getDateLivraison());
        $stm->bindValue(4, $commande->getEtat());
        $stm->bindValue(5, $commande->getVilleLivraison());
        $stm->bindValue(6, $commande->getAddresse());

        $stm->execute();
    }

    public function findCommande($email, $mdp)
    {
        $utilisateur = null;
        $stm = $this->dbh->prepare("SELECT * FROM commande");
        $stm->execute();

        $result = $stm->fetch(PDO::FETCH_ASSOC);
        if (!empty($result)) {
            $commande = new Commande(
                $result['numCommande'],
                $result['dateCreation'],
                $result['dateLivraison'],
                $result['etat'],
                $result['villeLivraison'],
                $result['adresse'],
            );
        }
        return $commande;
    }

    public function countCommandesToday()
    {
        $stm = $this->dbh->prepare("SELECT COUNT(*) as total FROM commande WHERE DATE(dateCreation) = DATE(NOW())");
        $stm->execute();
        $result = $stm->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    }

    public function countCaisse()
    {
        $stm = $this->dbh->prepare("SELECT * 
        FROM commande
        JOIN commande_produit ON commande.numCommande = commande_produit.numCommande_Commande
        JOIN produit ON commande_produit.id_Produit = produit.id
        WHERE commande.etat = 'Livrée';");
        $stm->execute();
        $results = $stm->fetchAll(PDO::FETCH_ASSOC); // Utiliser fetchAll pour récupérer toutes les lignes
    
        $caisse = 0;
        foreach ($results as $row) {
            $caisse += ($row['prix'] * $row['quantité']); // Utiliser les clés du tableau associatif
        }
        return $caisse;
    }
    

    



}

?>

