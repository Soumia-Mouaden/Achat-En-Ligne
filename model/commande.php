<?php
class Commande{
    private $numCommande, $dateCreation, $dateLivraison, $etat, $villeLivraison, $adresse;

<<<<<<< HEAD
    public function __construct($dateCreation, $dateLivraison, $etat, $villeLivraison, $adresse)
=======
    public function __construct( $dateCreation, $dateLivraison, $etat, $villeLivraison, $adresse)
>>>>>>> 9c95e88fb7e124e7cc6b89f43b5d2cd8d067f56d
    {
        $this->dateCreation = $dateCreation;
        $this->dateLivraison = $dateLivraison;
        $this->etat = $etat;
        $this->villeLivraison = $villeLivraison;
<<<<<<< HEAD
        $this->adresse = $adresse;
=======
        $this->$adresse = $adresse;
>>>>>>> 9c95e88fb7e124e7cc6b89f43b5d2cd8d067f56d
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

<<<<<<< HEAD
    public function setAdresse($adresse)
=======
    public function setAdresse()
>>>>>>> 9c95e88fb7e124e7cc6b89f43b5d2cd8d067f56d
    {
        $this->adresse = $adresse;
    }
}
