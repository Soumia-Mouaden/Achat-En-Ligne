<?php
class Commande{
    private $numCommande, $dateCreation, $dateLivraison, $etat, $villeLivraison;

    public function __construct($numCommande, $dateCreation, $dateLivraison, $etat, $villeLivraison)
    {
        $this->numCommande = $numCommande;
        $this->dateCreation = $dateCreation;
        $this->dateLivraison = $dateLivraison;
        $this->etat = $etat;
        $this->villeLivraison = $villeLivraison;
    }

    // Getters
    public function getNumCommande()
    {
        return $this->numCommande;
    }

    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    public function getDateLivraison()
    {
        return $this->dateLivraison;
    }

    public function getEtat()
    {
        return $this->etat;
    }

    public function getVilleLivraison()
    {
        return $this->villeLivraison;
    }

    // Setters
    public function setNumCommande($numCommande)
    {
        $this->numCommande = $numCommande;
    }

    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    }

    public function setDateLivraison($dateLivraison)
    {
        $this->dateLivraison = $dateLivraison;
    }

    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    public function setVilleLivraison($villeLivraison)
    {
        $this->villeLivraison = $villeLivraison;
    }
}
