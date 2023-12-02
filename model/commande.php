<?php
class Commande{
    private $numCommande, $dateCreation, $dateLivraison, $etat, $villeLivraison, $adresse;

    public function __construct( $dateCreation, $dateLivraison, $etat, $villeLivraison, $adresse)
    {
        $this->dateCreation = $dateCreation;
        $this->dateLivraison = $dateLivraison;
        $this->etat = $etat;
        $this->villeLivraison = $villeLivraison;
        $this->$adresse = $adresse;
    }

    // Getters
    public function getAdresse()
    {
        return $this->adresse;
    }

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

    public function setAdresse()
    {
        $this->adresse = $adresse;
    }
}
