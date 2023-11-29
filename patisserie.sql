#Ma base de données : 

DROP TABLE IF EXISTS Produit;
CREATE TABLE Produit(
        id     int(25) AUTO_INCREMENT,
        nom     Varchar (50),
        categorie     Varchar (50),
        image     Varchar (1000),
        prix     Float (25),
        description     Text (25),
        ingredients     Text (3000),
        allergie     Text (3000),
        conservation     Text (3000),
        PRIMARY KEY (id)
)ENGINE=InnoDB;



DROP TABLE IF EXISTS Utilisateur;
CREATE TABLE Utilisateur(
        id     int(25) AUTO_INCREMENT,
        nom     Varchar (50),
        prenom     Varchar (50),
        email     Varchar (100),
        tel     Varchar (20),
        genre     Varchar (50),
        mdp     Varchar (50),
        ville     Varchar (100),
        role     Varchar (50),
        PRIMARY KEY (id)
)ENGINE=InnoDB;



DROP TABLE IF EXISTS Commande;
CREATE TABLE Commande(
        numCommande     int(25) AUTO_INCREMENT,
        dateCreation     Date ,
        dateLivraison     Date ,
        etat     Varchar (25),
        villeLivraison     Varchar (50),
        -- id_Facture      int(25),
        PRIMARY KEY (numCommande)
)ENGINE=InnoDB;



DROP TABLE IF EXISTS Facture ;
CREATE TABLE Facture (
        id     int(25) AUTO_INCREMENT,
        dateFacturation     Date ,
        numCommande_Commande     int(25),
        PRIMARY KEY (id)
)ENGINE=InnoDB;



DROP TABLE IF EXISTS Avis ;
CREATE TABLE Avis (
        contenu     Text (4000),
        dateCreation     Date ,
        id_Utilisateur    int(25),
        id_Produit     int(25),
        PRIMARY KEY (id_Utilisateur,id_Produit)
)ENGINE=InnoDB;



DROP TABLE IF EXISTS Commande_Produit;
CREATE TABLE Commande_Produit(
        quantité     Int (25),
        id_Produit     int(25),
        numCommande_Commande     int(25),
        PRIMARY KEY (id_Produit,numCommande_Commande)
)ENGINE=InnoDB;



-- ALTER TABLE Commande ADD CONSTRAINT FK_Commande_id_Facture  FOREIGN KEY (id_Facture ) REFERENCES Facture (id)
ALTER TABLE Facture  ADD CONSTRAINT FK_Facture_numCommande_Commande FOREIGN KEY (numCommande_Commande) REFERENCES Commande(numCommande);
ALTER TABLE Avis  ADD CONSTRAINT FK_Avis_id_Utilisateur FOREIGN KEY (id_Utilisateur) REFERENCES Utilisateur(id);
ALTER TABLE Avis  ADD CONSTRAINT FK_Avis_id_Produit FOREIGN KEY (id_Produit) REFERENCES Produit(id);
ALTER TABLE Commande_Produit ADD CONSTRAINT FK_Commande_Produit_id_Produit FOREIGN KEY (id_Produit) REFERENCES Produit(id);
ALTER TABLE Commande_Produit ADD CONSTRAINT FK_Commande_Produit_numCommande_Commande FOREIGN KEY (numCommande_Commande) REFERENCES Commande(numCommande);
