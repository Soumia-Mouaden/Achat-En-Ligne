<?php
include "../model/commande.php";
include "../model/produit.php";
include "../model/commandeProduit.php";

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
    public function insererCommande(Commande $commande)
    {
        $stm = $this->dbh->prepare("INSERT INTO commande(adresse ,dateCreation, etat, villeLivraison, dateLivraison) VALUES (?, ?, ?, ?, ?)");

        $stm->bindValue(1, $commande->getAdresse());
        $stm->bindValue(2, $commande->getDateCreation());
        $stm->bindValue(3, $commande->getEtat());
        $stm->bindValue(4, $commande->getVilleLivraison());
        $stm->bindValue(5, $commande->getDateLivraison());

        $stm->execute();

        $idCommande = $this->dbh->lastInsertId();

        return $idCommande;
    }

    // public function findCommande($email, $mdp)
    // {
    //     $utilisateur = null;
    //     $stm = $this->dbh->prepare("SELECT * FROM commande");
    //     $stm->execute();

    //     $result = $stm->fetch(PDO::FETCH_ASSOC);
    //     if (!empty($result)) {
    //         $commande = new Commande(
    //             $result['numCommande'],
    //             $result['dateCreation'],
    //             $result['dateLivraison'],
    //             $result['etat'],
    //             $result['villeLivraison']
    //         );
    //     }
    //     return $commande;
    // }
    
    public function insererCommandeProduit(CommandeProduit $commandeProduit)
    {
        $stm = $this->dbh->prepare("INSERT INTO commande_produit(quantite, id_Produit, numCommande_Commande) VALUES (?, ?, ?)");

        $stm->bindValue(1, $commandeProduit->getQuantite());
        $stm->bindValue(2, $commandeProduit->getIdProduit());
        $stm->bindValue(3, $commandeProduit->getNumCommande());

        $stm->execute();
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
            $caisse += ($row['prix'] * $row['quantite']); // Utiliser les clés du tableau associatif
        }
        return $caisse;
    }

}

?>

