<?php
include "../model/commande.php";

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

}

?>

