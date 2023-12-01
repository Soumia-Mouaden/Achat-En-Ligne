-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 01 déc. 2023 à 09:13
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `patisserie`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `contenu` text DEFAULT NULL,
  `dateCreation` date DEFAULT NULL,
  `id_Utilisateur` int(25) NOT NULL,
  `id_Produit` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `numCommande` int(25) NOT NULL,
  `dateCreation` date DEFAULT NULL,
  `dateLivraison` date DEFAULT NULL,
  `etat` varchar(25) DEFAULT NULL,
  `villeLivraison` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `commande_produit`
--

CREATE TABLE `commande_produit` (
  `quantité` int(25) DEFAULT NULL,
  `id_Produit` int(25) NOT NULL,
  `numCommande_Commande` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `id` int(25) NOT NULL,
  `dateFacturation` date DEFAULT NULL,
  `numCommande_Commande` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(25) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `categorie` varchar(50) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `prix` double DEFAULT NULL,
  `description` tinytext DEFAULT NULL,
  `ingredients` text DEFAULT NULL,
  `allergie` text DEFAULT NULL,
  `conservation` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `categorie`, `image`, `prix`, `description`, `ingredients`, `allergie`, `conservation`) VALUES
(1, 'Corne de gazelle classique', 'GateauBeldi', 'img/shop/gateauBeldi/Corne_de_gazelle_classique.jpg', 130, 'Le symbole de la pâtisserie traditionnelle marocaine. Tendre et moelleuse, puissance des goûts, révélation de l\'oranger et saveurs d\'amandes torréfiées - Taille classique\r\n \r\n\r\nPuissance des goûts, révélation de l\'oranger et saveurs d\'amandes tor', 'Amandes, Sucre, Farine de blé, Eau de Fleur d\'oranger, Beurre, Gomme arabique, Eau, Huile', 'Produit fabriqué dans des ateliers utilisant: œuf, lait, gluten, graines de sésame et fruits à coques.', '15 jours à température ambiante à l\'abri de l\'humidité.'),
(2, 'Mini cornes de gazelle classique', 'GateauBeldi', 'img/shop/gateauBeldi/MINI_CORNES_DE_GAZELLE_CLASSIQUEjpg.jpg', 200, 'Le symbole de la pâtisserie traditionnelle marocaine. Tendre et moelleuse, puissance des goûts, révélation de l\'oranger et saveurs d\'amandes torréfiées - Taille mignardise\r\n \r\n\r\nPuissance des goûts, révélation de l\'oranger et saveurs d\'amandes to', 'Amandes, Sucre, Farine de blé, Eau de Fleur d\'oranger, Beurre, Gomme arabique, Eau, Huile', 'Produit fabriqué dans des ateliers utilisant: œuf, lait, gluten, graines de sésame et fruits à coques.', ' 15 jours à température ambiante à l\'abri de l\'humidité.'),
(3, 'Corne de Gazelle de Tétouan', 'GateauBeldi', 'img/shop/gateauBeldi/Corne_de_gazelle_de_tetouan.jpg', 220, ' La plus élégante des cornes de gazelle. Croustillante et fondante avec une finition dentelée, spécialité de la ville de Tétouan ( Nord du Maroc)\r\n \r\n \r\n\r\nLa corne de gazelle du bord de mer joue la différence: façonnnée plus au nord que les autre', 'Amandes, Sucre, Farine de blé, Eau de Fleur d’Oranger, Cannelle, Beurre, Eau, Gomme Arabique', ' produit fabriqué dans des ateliers utilisant: œuf, lait, gluten, graines de sésame et fruits à coques.', '15 jours à température ambiante à l\'abri de l\'humidité.'),
(4, 'Corne de Gazelle aux graines de sésames', 'GateauBeldi', 'img/shop/gateauBeldi/Corne_de_Gazelle_aux_graines_de_sésamesjpg.jpg', 220, 'L\'emblématique corne de gazelle réhaussée de graines de sésames torréfiées  \r\n \r\n\r\nPour faire honneur à la saveur torréfiée du sésame doré, Maymana vous présente sa fameuse corne de gazelle habillée de graines de sésame. L\'alliance du sésam', 'Amandes, Sésame, Sucre, Cannelle, Eau de Fleur d’Oranger, Beurre, Gomme Arabique, Oeuf', 'produit fabriqué dans des ateliers utilisant: œuf, lait, gluten, graines de sésame et fruits à coques.', '15 jours à température ambiante à l\'abri de l\'humidité.'),
(5, 'Corne de Gazelle m\'fened', 'GateauBeldi', 'img/shop/gateauBeldi/Corne_de_Gazelle_mfenedjpg.jpg', 220, 'La plus parfumée des cornes de gazelle, croquante et moelleuse\r\n \r\n\r\nPlus petite que ses cousines, on pourrait penser la corne de gazelle M\'fened plus timide. Ne vous y fiez pas! Elle renferme un cœur tendre intensément imprégné d\'eau de fleur d\'oran', 'Amandes , Cannelle, Gomme arabique, Eau de fleur d’oranger, Beurre, Sucre', 'Produit fabriqué dans des ateliers utilisant: œuf, lait, gluten, graines de sésame et fruits à coque', '15 jours à température ambiante à l\'abri de l\'humidité.'),
(6, 'Ghriba au beurre et aux amandes', 'GateauBeldi', 'img/shop/gateauBeldi/Ghriba_au_beurre_et_aux_amandesjpg.jpg', 180, 'Sablé gourmand au beurre et aux amandes torréfiées, à la fois aérien, fondant et croquant \r\n \r\n\r\nLa ghriba au beurre et aux amandes est idéale pour accompagner un café ou un thé. Sablé très léger, fondant et croquant à souhait, il se caractér', 'Farine de blé, Amandes, Beurre, Sucre, Huile, Levure.\r\nConservation: 15 jours à température ambiante à l\'abri de l\'humidité.', 'Produit fabriqué dans des ateliers utilisant: œuf, lait, gluten, graines de sésame et fruits à coques. ', '15 jours à température ambiante à l\'abri de l\'humidité.'),
(7, 'Ghriba aux amandes', 'GateauBeldi', 'img/shop/gateauBeldi/Ghriba_aux_amandesjpg.jpg', 220, 'Macaron tendre et moelleux à base d’amandes et de zestes de citron\r\n \r\n\r\nIl se raconte que la ghriba est l\'ancêtre du macaron français aux amandes. Légèrement parfumée par des zestes de citron, sa texture est très moelleuse, finement craquelée. ', 'Amandes, Sucre, Citron,  Œufs, Levure Conservation: 15 jours à température ambiante à l\'abri de l\'air.', 'Produit fabriqué dans des ateliers utilisant: œuf, lait, gluten, graines de sésame et fruits à coques', ' 15 jours à température ambiante à l\'abri de l\'humidité.'),
(8, 'Mini Ghriba aux amandes', 'GateauBeldi', 'img/shop/gateauBeldi/Mini_Ghriba_aux_amandes.jpg', 230, 'Macaron tendre et moelleux à base d’amandes et de zestes de citron\r\n \r\n\r\nIl se raconte que la ghriba est l\'ancêtre du macaron français aux amandes. Légèrement parfumée par des zestes de citron, sa texture est très moelleuse, finement craquelée. ', 'Amandes, Sucre, Citron,  Œufs, Levure Conservation: 15 jours à température ambiante à l\'abri de l\'air.', 'Produit fabriqué dans des ateliers utilisant: œuf, lait, gluten, graines de sésame et fruits à coques', ' 15 jours à température ambiante à l\'abri de l\'humidité.'),
(9, 'Ghriba au beurre', 'GateauBeldi', 'img/shop/gateauBeldi/GHRIBA_AU_BEURREjpg.jpg', 140, 'Sablé gourmand au beurre, aérien et Fondant - Taille classique \r\n \r\n\r\nLa ghriba au beurre est idéale pour accompagner un café ou un thé. Il ravira les enfants par sa texture sablée et son goût simple des goûters de l’enfance… Sablé très lég', 'Farine de blé, Beurre, Sucre, Huile, Levure.', 'Produit fabriqué dans des ateliers utilisant: œuf, lait, gluten, graines de sésame et fruits à coques\r\n', ' 15 jours à température ambiante à l\'abri de l\'humidité.'),
(10, 'Mini ghriba au beurre', 'GateauBeldi', 'img/shop/gateauBeldi/Mini_ghriba_au_beurrejpg.jpg', 180, 'Sablé gourmand au beurre, aérien et Fondant - Taille mignardise \r\n \r\n\r\nLa ghriba au beurre est idéale pour accompagner un café ou un thé. Il ravira les enfants par sa texture sablée et son goût simple des goûters de l’enfance… Sablé très lé', 'farine de blé, Beurre, Sucre, Huile, Levure.', 'Produit fabriqué dans des ateliers utilisant: œuf, lait, gluten, graines de sésame et fruits à coques', ' 15 jours à température ambiante à l\'abri de l\'humidité.'),
(11, 'Ghriba aux noix', 'GateauBeldi', 'img/shop/gateauBeldi/Ghriba_aux_noix.jpg', 300, 'Macaron tendre et moelleux à base de noix \r\n \r\n\r\nCes ghribas aux noix font partie des recettes phares et historiques de notre patisserie. DéIicieusement craquant sur le dessus et extra moelleux à l\'intérieur, vous verrez que ces gâteaux ne resteront ', 'Farine de blé, Amandes, Beurre, Sucre, Huile, Levure.', 'Produit fabriqué dans des ateliers utilisant: œuf, lait, gluten, graines de sésame et fruits à coques', ' 15 jours à température ambiante à l\'abri de l\'humidité.'),
(12, 'Gâteau aux dattes', 'GateauBeldi', 'img/shop/gateauBeldi/Gâteau_aux_dattesjpg.jpg', 160, 'Gâteau marocain sablé aux dattes délicieusement parfumé\r\n \r\n\r\nCe gâteau marocain aux dattes se différencie du Maâmoul  par sa technique de préparation et sa composition. La pâte est réalisée par crémage du beurre avec le sucre et l’eau de fl', 'Farine de blé, Beurre, Sucre, Eau de Fleur d\'Oranger, Dattes, Amandes, Cannelle, Gomme Arabique.', 'Produit fabriqué dans des ateliers utilisant: œuf, lait, gluten, graines de sésame et fruits à coques\r\n', '15 jours à température ambiante à l\'abri de l\'humidité.'),
(13, 'Maamoule', 'GateauBeldi', 'img/shop/gateauBeldi/Maamoulejpg.jpg', 160, 'Pâtisserie sablée aux amandes et à la semoule de blé dur. Fourrée d\'une pâte de dattes à la fleur d\'oranger, à la cannelle et à la la gomme arabique  \r\n \r\n\r\nConfectionné en dôme et façonné avec une empreinte en bois, le maâmoule est  fourré', 'farine de blé dur, Dattes,  Amandes, Sucre, Beurre, Eau de Fleur d\'Oranger, Gomme Arabique, Cannelle.', 'Produit fabriqué dans des ateliers utilisant: œuf, lait, gluten, graines de sésame et fruits à coques', '15 jours à température ambiante à l\'abri de l\'humidité.'),
(14, 'Cigare au lait et aux amandes', 'GateauAuMiel', 'img/shop/gateauAuMiel/1.jpg', 220, 'Petit ciagre fourré à la crème de lait, miellé et parsemé d\'amandes  crumble\r\n \r\n\r\nVoici une petite gâterie à déguster autour d\'un bon thé vert. Des petits cigares à base de warka fourrés aux amandes et à la crème de lait. Ils sont ensuite cu', 'Farine de blé, Beurre, Fromage au lait, Miel, Amandes', 'Produit fabriqué dans des ateliers utilisant: œuf, lait, gluten, graines de sésame et fruits à coque', '15 jours à température ambiante, à l\'abri de l\'humidité et de la chaleur.'),
(15, 'M\'hancha coupé', 'GateauAuMiel', 'img/shop/gateauAuMiel/2.jpg', 220, 'Cigare bizeauté aux amandes et à la cannelle enveloppés dans de fines feuilles de warka, cuit au four et enrobé de miel\r\n \r\n\r\nPour la petite histoire la Mhincha signifie serpentin, forme selon laquelle le gâteau est traditionnellement offert sur un g', 'Amandes, Miel, Sucre, Gomme Arabique, Beurre, Cannelle, Feuille de brick.', 'Produit fabriqué dans des ateliers utilisant: œuf, lait, gluten, graines de sésame et fruits à coque', '30 jours à température ambiante, à l\'abri de l\'humidité.'),
(16, 'M’hancha classique ', 'GateauAuMiel', 'img/shop/gateauAuMiel/3.jpg', 270, 'Serpentin à base de feuilles de warka farcies aux amandes et à la cannelle, cuit au four, enrobé de miel, parsemé d\'amandes concassées, de sucre et de cannelle.\r\n \r\n\r\nPour la petite histoire la Mhincha signifie serpentin, forme selon laquelle le gât', 'Amandes, Miel, Sucre, Gomme Arabique, Beurre, Cannelle, Feuille de brick.', 'Produit fabriqué dans des ateliers utilisant: œuf, lait, gluten, graines de sésame et fruits à coque', '30 jours à température ambiante, à l\'abri de l\'humidité et de la chaleur.'),
(17, 'Briwattes au miel', 'GateauAuMiel', 'img/shop/gateauAuMiel/4.jpg', 220, 'Triangle au amandes parfumé à la fleur d\'oranger, enveloppé par de fines feuilles de warka, cuit et longuement trempé dans du miel de montagne - Taille classique\r\n \r\n\r\nUn classique incontournable de la pâtisserie fine marocaine. C\'est le gâteau au m', 'Amandes, Miel, Cannelle, Sucre, Gomme Arabique, Eau de Fleur d\'Oranger, Beurre, Feuille de Brick', 'Produit fabriqué dans des ateliers utilisant: œuf, lait, gluten, graines de sésame et fruits à coques\r\n', ' 15 jours dans un endroit frais et sec.'),
(18, 'Mini Briwattes au miel', 'GateauAuMiel', 'img/shop/gateauAuMiel/5.jpg', 260, 'Mini triangle aux amandes parfumé à la fleur d\'oranger, enveloppé par de fines feuilles de warka, cuit et longuement trempé dans du miel de montagne - Taille mignardise\r\n \r\n\r\nUn classique incontournable de la pâtisserie fine marocaine. C\'est le gâte', 'Amandes, Miel, Cannelle, Sucre, Gomme Arabique, Eau de Fleur d\'Oranger, Beurre, Feuille de Brick', 'Produit fabriqué dans des ateliers utilisant: œuf, lait, gluten, graines de sésame et fruits à coques', '15 jours dans un endroit frais et sec.'),
(19, 'Chebbakia', 'GateauAuMiel', 'img/shop/gateauAuMiel/6.jpg', 200, 'Spécialité marocaine au miel, aux épices, et aux graines de sésame Appelé aussi selon les régions du Maroc : Griwech à Fès, ou encore M\'kharka à Rabat.\r\nMets incontournable des tables marocaines pendant le Ramadan\r\n \r\n\r\nGâteau oriental incontour', 'Farine de blé, Sésame, Anis, Cannelle, Gomme Arabique, Oeufs, Beurre, Sucre, Eau de Fleur d\'oranger, Vinaigre, Huile, Sel, Levure.', 'Produit fabriqué dans des ateliers utilisant: œuf, lait, gluten, graines de sésame et fruits à coque', ' 15 jours à température ambiante, à l\'abri de l\'humidité et de la chaleur'),
(20, 'Makroute', 'GateauAuMiel', 'img/shop/gateauAuMiel/7.jpg', 220, 'Makrout aux dattes à base de semoule de blé et de poudre d’amande, doucement cuit au four et arrosé de miel de fleur d\'oranger\r\n \r\n\r\nPâtisserie originaire d’Algérie, le makrout (aussi appelé makroud ou maqroudh) est aussi confectionné au nord-e', 'Farine de blé dur, Dattes,  Amandes, Sucre, Beurre, Eau de Fleur d\'Oranger, Gomme Arabique, Cannell, Miel.', 'Produit fabriqué dans des ateliers utilisant: œuf, lait, gluten, graines de sésame et fruits à coques', '15 jours dans un endroit frais et sec.'),
(21, 'Fekkas aux amandes', 'Fekkas', 'img/shop/fekkas/1.jpg', 150, 'Biscuit croquant à la texture sablée aux amandes, aux graines de sésame et à l\'anis. Un classique de la biscuiterie marocaine\r\n \r\n\r\nFekkas dans la pure tradition marocaine : croquant, texture sablée aux amandes, aux graines de sésame torréfiées et', 'Farine de blé, Beurre, Sucre, Œufs, Amandes, Sésame, Anis, Eau de Fleur d’Oranger, Levure', ' Produit fabriqué dans des ateliers utilisant: œuf, lait, gluten, graines de sésame et fruits à coques', '30 jours à température ambiante, à l\'abri de l\'humidité.'),
(22, 'Fekkas au noix', 'Fekkas', 'img/shop/fekkas/2.jpg', 160, 'Biscuit croquant à pâte sablée tendre aux noix parfumée à la confiture d’abricot et au sucre vanillé. Gourmand et parfumé\r\n \r\n\r\nLe Fekkas est un biscuit traditionnel croquant très réputé dans la pâtisserie marocaine. Délicatement découpé e', 'Farine de blé, Beurre, Sucre, Noix, Confiture d\'abricot, Oeufs, Sel, Lait en poudre', 'Produit fabriqué dans des ateliers utilisant: œuf, lait, gluten, graines de sésame et fruits à coques.', '30 jours à température ambiante, à l\'abri de l\'humidité.\r\n'),
(23, 'Fekkas à la crème fraîche', 'Fekkas', 'img/shop/fekkas/3.jpg', 220, 'Le traditionnel Fekkas aux amandes réinventé pour le plaisir des gourmands\r\n \r\n\r\nNotre patisserie partage cette recette familiale pour succomber encore une fois à la gourmandise. Le biscuit sablé et fondant aux amandes révèle pleinement sa saveur to', 'Amande, Sucre, Farine de blé, Crème Fraiche.', 'Produit fabriqué dans des ateliers utilisant: œuf, lait, gluten, graines de sésame et fruits à coques', '15 jours à température ambiante à l\'abri de l\'humidité.'),
(24, 'Sellou traditonnel', 'DattesEtSellou', 'img/shop/datteetsellou/1.jpg', 200, 'Le crumble à la marocaine à désuter à la petite cuillère. Gourmandise par excellence pendant le Ramandan, ou pour sublimer de vos desserts. \r\n \r\n\r\nSubtil mélange de farine torréfiée, amandes grillées, cannelle, anis, graines de sésame, miel, beu', 'Amandes, Sésame, Farine, Sucre, Huile, Beurre, Cannelle, Anis, Gomme arabique.', 'Produit fabriqué dans des ateliers utilisant: œuf, lait, gluten, graines de sésame et fruits à coque', '60 jours à température ambiante, à l\'abri de l\'humidité.'),
(25, 'Dattes fourrées', 'DattesEtSellou', 'img/shop/datteetsellou/2.jpg', 380, 'Assortiment de dattes Majhoul fourrées, aux amandes grillées, à la pâte d\'amande et aux noix torréfiées \r\n \r\n\r\nDattes Majhoul de l\'oasis du Tafilalet situé au sud-est du Maroc, de belle couleur brune et orangé, de très grosse taille, délicieusem', 'Dattes majhoul, Amandes grillées, noix, Pâte d\'amande.\r\nConservation: 20 jours  dans un endroit frais et sec.', 'Produit fabriqué dans des ateliers utilisant: œuf, lait, gluten, graines de sésame et fruits à coques', '7 jours à température ambiante à l\'abri de l\'humidité.'),
(26, 'Plateau de mignardises de pâtisseries beldi', 'COMPOSITIONS', '1.jpg', 99, 'Assortiment de 5 sortes de mignardises de pâtisseries traditionnelles marocaines. Composition aléatoire : corne de gazelles, Kahk,  briouates aux amandes, cornes de gazelle aux graines de sésame, ghribas aux amandes, Maâmoule, lune à l\'orange\r\n\r\n \r\n\r', NULL, 'Produit fabriqué dans des ateliers utilisant: œuf, lait, gluten, graines de sésame et fruits à coque\r\n ', ' 10 jours à température ambiante, à l\'abri de l\'humidité.'),
(27, 'Plateaux de gâteaux beldi', 'COMPOSITIONS', '2.jpg', 190, 'Assortiment de 5 sortes de pâtisseries traditionnelles marocaines.  Composition aléatoire : corne de gazelles, Kahk,  briouates aux amandes, cornes de gazelle aux graines de sésame, ghribas aux amandes, Maâmoule, lune à l\'orange\r\n\r\n \r\n\r\nDressées dan', NULL, 'Produit fabriqué dans des ateliers utilisant: œuf, lait, gluten, graines de sésame et fruits à coque\r\n ', '10 jours à température ambiante, à l\'abri de l\'humidité.');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(25) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  `ville` varchar(100) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id_Utilisateur`,`id_Produit`),
  ADD KEY `FK_Avis_id_Produit` (`id_Produit`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`numCommande`);

--
-- Index pour la table `commande_produit`
--
ALTER TABLE `commande_produit`
  ADD PRIMARY KEY (`id_Produit`,`numCommande_Commande`),
  ADD KEY `FK_Commande_Produit_numCommande_Commande` (`numCommande_Commande`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Facture_numCommande_Commande` (`numCommande_Commande`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `numCommande` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `FK_Avis_id_Produit` FOREIGN KEY (`id_Produit`) REFERENCES `produit` (`id`),
  ADD CONSTRAINT `FK_Avis_id_Utilisateur` FOREIGN KEY (`id_Utilisateur`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `commande_produit`
--
ALTER TABLE `commande_produit`
  ADD CONSTRAINT `FK_Commande_Produit_id_Produit` FOREIGN KEY (`id_Produit`) REFERENCES `produit` (`id`),
  ADD CONSTRAINT `FK_Commande_Produit_numCommande_Commande` FOREIGN KEY (`numCommande_Commande`) REFERENCES `commande` (`numCommande`);

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `FK_Facture_numCommande_Commande` FOREIGN KEY (`numCommande_Commande`) REFERENCES `commande` (`numCommande`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
