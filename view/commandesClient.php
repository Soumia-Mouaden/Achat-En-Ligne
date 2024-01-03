<?php
include "../dao/daoUtilisateur.php";
include "../dao/daoCommande.php";
$dao = new DaoCommande();
$allCommande = $dao->afficherComTimeline();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mes commandes</title>
    <!-- logo -->
    <link rel="icon" href="view/img/logo.png">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <!-- <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css"> -->
    <!-- <link rel="stylesheet" href="css/style.css" type="text/css"> -->
    <link rel="stylesheet" href="css/commandeStyle.css" type="text/css">

</head>

<body>
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header__top__inner">
                            <div class="header__top__left">
                                <?php
                                session_start();
                                if (isset($_SESSION['utilisateur'])) {
                                    $utilisateur = $_SESSION['utilisateur'];
                                    // Check if the user is logged in
                                    // If the user is logged in, display the "Se déconnecter" button
                                    if ($utilisateur != null) {
                                        echo '
                                            <ul>
                                                <li>Bienvenue ' . $utilisateur->getPrenom() . '</li>
                                            <li><a href="controller/utilisateurController.php?action=deconnexion">Se déconnecter</a></li>
                                            </ul>';
                                    }
                                } else {
                                    // If the user is not logged in, display the "Se connecter" button
                                    echo '
                                        <ul>
                                            <li><a href="view/connexion.php">Se connecter</a> </li>
                                        </ul>';
                                }
                                ?>

                            </div>
                            <div class="header__logo">
                                <a href="./index.html"><img src="img/logo.png" alt=""></a>
                            </div>
                            <div class="header__top__right">
                                <div class="header__top__right__cart">
                                    <!--   <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                                    <div class="cart__price">Cart: <span>$0.00</span></div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="../index.php">Accueil</a></li>
                            <li class="active"><a href="commandesClient.php">Mes Commandes</a></li>
                            <li><a href="about.php">A propos </a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section style="width:100%;">
        <div id="encours" class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="commandeEnCours" class="content">
                        <?php
                        $commande = $allCommande->fetch(PDO::FETCH_ASSOC);
                        $etat = $commande['etat'];

                        if ($commande === false) {
                            echo '<h1>Aucune commande pour le moment</h1> ';
                        } else {
                            echo '<h1>Mes commandes en cours</h1> ';
                            do {
                                echo '
                            
                       <div class="timeline-container" >
                           <figure style="margin:20px;">
                               <img src="img/produit/1.jpg" alt="image1" class="imgProd">
                               <figcaption> ' . $commande['numCommande']. ' </figcaption>
                           </figure>
                           <div class="swiper-container">
                               <p class="swiper-control">
                                   <button type="button" class="btn btn-default btn-sm prev-slide" style="background-color: rgb(207, 102, 102);">Annuler</button>
                                   <button type="button" class="btn btn-default btn-sm prev-slide">Voir détails</button>
                               </p>
                               <div class="swiper-wrapper timeline">
                               <div class="swiper-slide">
                               <div class="status" >
                                   <span id="trait" class="en-cours">En cours de traitement</span>
                               </div>
                           </div>
                           <div class="swiper-slide">
                               <div class="status" >
                                   <span id="traitee" class="' . (($etat === 'Traitée' || $etat === 'En cours de livraison') ? 'traitée' : '') . '">Traitée</span>
                               </div>
                           </div>
                           <div class="swiper-slide" style="width:30%;">
                               <div class="status">
                                   <span id="liv" class="' . ($etat === 'En cours de livraison' ? 'en-livraison' : '') . '">En cours de livraison</span>
                               </div>
                           </div>

                               </div>
                           </div>
                       </div>
                       <p> </p>
                   
                       '; $etat = $commande['etat'];
                            } while ($commande = $allCommande->fetch(PDO::FETCH_ASSOC));
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div id="historique">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Historique des commandes</h1>

                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th>Référence</th>
                                <th>Produit</th>
                                <th>Date de création</th>
                                <th>Quantité</th>
                                <th>Total</th>
                                <th>Date de livraison</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>123637</td>
                                <td><img src="img/produit/2.jpg" alt="" class="imgTab"></td>
                                <td>1/1/2023</td>
                                <td>2</td>
                                <td>250 MAD</td>
                                <td>12/1/2023</td>
                                <td><button class="btn btn-default btn-sm prev-slide">Voir détails</button></td>
                            </tr>
                            <tr>
                                <td>736483</td>
                                <td><img src="imguno.jpg" alt="" class="imgTab"></td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div> -->
    </section>
</body>

</html>