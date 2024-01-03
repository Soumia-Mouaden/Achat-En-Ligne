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

    public function afficherComTimeline()
    {
        $stm = $this->dbh->prepare("SELECT * FROM  commande WHERE etat != 'Livrée';");
        $stm->execute();
        $result = $stm;
        return  $result;
    }

    public function insererCommandeProduit(CommandeProduit $commandeProduit)
    {
        $stm = $this->dbh->prepare("INSERT INTO commande_produit(quantite, id_Produit, numCommande_Commande) VALUES (?, ?, ?)");

        $stm->bindValue(1, $commandeProduit->getQuantite());
        $stm->bindValue(2, $commandeProduit->getIdProduit());
        $stm->bindValue(3, $commandeProduit->getNumCommande());

        $stm->execute();
    }

    public function countCommandes($jour, $etat)
    {
        $stm = $this->dbh->prepare("SELECT COUNT(*) as total FROM commande WHERE DATE(dateCreation) = ? AND commande.etat = ?; ");
        $stm->bindValue(1, $jour);
        $stm->bindValue(2, $etat);
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
            $caisse += ($row['prix'] * $row['quantite']);
        }
        return $caisse;
    }

    public function countVente($mois, $jour)
    {
        $stm = $this->dbh->prepare("SELECT * 
        FROM commande
        JOIN commande_produit ON commande.numCommande = commande_produit.numCommande_Commande
        JOIN produit ON commande_produit.id_Produit = produit.id
        WHERE MONTH(commande.dateLivraison) = ? AND DAY(commande.dateLivraison) = ? AND commande.etat = 'Livrée';");

        $stm->bindValue(1, $mois);
        $stm->bindValue(2, $jour);
        $stm->execute();
        $results = $stm->fetchAll(PDO::FETCH_ASSOC);
        $vente = 0;
        foreach ($results as $row) {
            $vente += ($row['prix'] * $row['quantite']);
        }
        return $vente;
    }

    public function countLast3Days()
    {
        $liste = [];
        $jour  = intval(date('d'));
        $moisPrecedent = intval(date('m')) - 1;
        if ($moisPrecedent === 0) {
            $moisPrecedent = 12;
        }
        $nombreJours = cal_days_in_month(CAL_GREGORIAN, $moisPrecedent, date('Y'));
        if ($jour == 1) {

            $liste = [1, $nombreJours, $nombreJours - 1];
        } elseif ($jour == 2) {
            $liste = [1, 2, $nombreJours];
        } else {
            $liste = [$jour, $jour - 1, $jour - 2];
        }
        return $liste;
    }
}
