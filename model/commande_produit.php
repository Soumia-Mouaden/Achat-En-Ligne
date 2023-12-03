<?php
class commande_produit {
    private $numCommande_Commande, $id_Produit, $quantité;

    public function __construct($numCommande_Commande, $id_Produit, $quantité) {
        $this->numCommande_Commande = $numCommande_Commande;
        $this->id_Produit = $id_Produit;
        $this->quantité = $quantité;
    }

    // Getters
    public function getNumCommande_Commande() {
        return $this->numCommande_Commande;
    }

    public function getId_Produit() {
        return $this->id_Produit;
    }

    public function getQuantité() {
        return $this->quantité;
    }

    // Setters
    public function setNumCommande_Commande($numCommande_Commande) {
        $this->numCommande_Commande = $numCommande_Commande;
    }

    public function setId_Produit($id_Produit) {
        $this->id_Produit = $id_Produit;
    }

    public function setQuantité($quantité) {
        $this->quantité = $quantité;
    }
}
