<?php
 include "dao/daoProduit.php";
include "dao/daoUtilisateur.php";
include "dao/daoAvis.php";
$daov = new DaoAvis();
$dao = new DaoProduit();
$daoU=new DaoUtilisateur();
$allProducts = $dao->listProduits();
$allAvis = $daov->findAllAvis();
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HLOU'IN</title>
     <!-- logo -->
     <link rel="icon" href="view/img/logo.png">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="view/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="view/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="view/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="view/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="view/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="view/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="view/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="view/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="view/css/slicknav.min.css" type="text/css">
    
  


    <!-- Pour Panier-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">

    <link rel="stylesheet" href="view/css/style.css" type="text/css">
<<<<<<< HEAD
    <!-- Ajoutez ceci dans la section <head> de votre page -->

=======
    <link rel="stylesheet" href="view/stylePanierH.css" type="text/css">
>>>>>>> 08b8cf77c5ab060d2d6d1e032b38ccec7d7f223d
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">

        <div class="offcanvas__logo">
            <a href="./index.html"><img src="view/img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__option">
            <ul>
                <li><a href="#">Sign in</a> <span class="arrow_carrot-down"></span></li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header__top__inner">
                            <div class="header__top__left">
                            <?php
                            
                             if (isset($_SESSION["utilisateur"])) {
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
                                <a href="./index.html"><img src="view/img/logo.png" alt=""></a>
                            </div>

                            <div class="header__top__right">
                               <div class="header__top__right__cart">
<<<<<<< HEAD
                                    <a href="view/testPanier.php"><img src="view/img/icon/cart.png" alt=""> <span class="cart-count">0</span></a>
                                    
=======
                                    <a href="#" data-toggle="modal" data-target="#myModal"><img src="view/img/icon/cart.png" alt=""> <span class="cart-count">0</span></a>
                                    <p>panier</p>
>>>>>>> 08b8cf77c5ab060d2d6d1e032b38ccec7d7f223d
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
      <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="hero__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="../index.php">Accueil</a></li>
                            <li><a href="view/about.php">A propos</a></li>
                            
                            <li><a href="view/contact.php">Contact</a></li>
                            <li><a href="view/commandeClient.php">Mes commandes</a></li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
            <div class="hero__item set-bg">
       
            <div class="video-container">
       
                <video class="back_video" autoplay loop muted playsinline>
                    <source src="view/img/hero/hero-1.mp4" type="video/mp4">
                    Votre navigateur ne prend pas en charge la balise vidéo.
                </video>
            
            </div>
            
                
           
            <div class="container" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 2; "">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="hero__text">
                            <h2>Savourez la douceur de la tradition marocaine à chaque bouchée !</h2>
                            <a href="#product-section" class="primary-btn">nos produits</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <!-- Hero Section End -->

    

    <!-- Categories Section Begin -->
    <div class="categories about spad">
        <div class="container">
            <div class="row">
                
                <div class="categories__slider owl-carousel">
                    <div class="categories__item" data-category="GateauBeldi">
                        <div class="categories__item__icon">
                            
                            <span class="flaticon-029-cupcake-3"></span>
                            <h5>Gateaux beldi</h5>

                        </div>
                    </div>
                    <div class="categories__item" data-category="GateauAuMiel">
                        <div class="categories__item__icon">
                            <span class="flaticon-034-chocolate-roll"></span>
                            <h5>Gateaux au meil</h5>
                        </div>
                    </div>
                    <div class="categories__item" data-category="Fekkas">
                        <div class="categories__item__icon">
                            <span class="flaticon-005-pancake"></span>
                            <h5>Fekkas</h5>
                        </div>
                    </div>
                    <div class="categories__item" data-category="DattesEtSellou">
                        <div class="categories__item__icon">
                            <span class="flaticon-030-cupcake-2"></span>
                            <h5>Dattes et sellou</h5>
                        </div>
                    </div>
                    <div class="categories__item" data-category="COMPOSITIONS">
                        <div class="categories__item__icon">
                            <span class="flaticon-006-macarons"></span>
                            <h5>COMPOSITIONS</h5>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Section End -->

    <!-- Product Section Begin -->
    <section  id="product-section"class="product spad general-product">
        <div class="container">
            <div class="row">
            <?php
                // Deserialize $allProducts from the URL parameter
                // Assuming you have fetched the product data from the database and stored it in an array called $allProducts
                while($product=$allProducts->fetch(PDO::FETCH_ASSOC)) {
                    $image = $product['image'];
                    $name = $product['nom'];
                    $price = $product['prix'];
                    $category = $product['categorie'];
                    $idOfProduit = $product['id'];
        
                    if ($category == "GateauBeldi" && $image == "img/shop/gateauBeldi/Corne_de_gazelle_classique.jpg") {
                        echo '
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="view/' . $image . '">
                                    <div class="product__label">
                                        <span>' . $name . '</span>
                                    </div>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">' . $name . '</a></h6>
                                    <div class="product__item__price">' . $price . ' MAD pour 1Kg</div>
                                    <div class="cart_add">
                                    <a href="view/detailProduit.php?idOfProduit=' . $idOfProduit . '">Commander</a>&nbsp;&nbsp;&nbsp;
                                    <a href="#" class="addToCart" data-id="' . $idOfProduit . '">Ajouter</a>


                                    </div>
                                </div>
                            </div>
                        </div>';
                    }
            
                if ($category == "GateauAuMiel" && $image == "img/shop/gateauAuMiel/1.jpg") {
                    echo '
                    <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="view/' . $image . '">
                    <div class="product__label">
                    <span>' . $name . '</span>
                    </div>
                    </div>
                    <div class="product__item__text">
                    <h6><a href="#">' . $name . '</a></h6>
                    <div class="product__item__price p-1 ml-5">' . $price . ' MAD pour 1Kg</div>
                        <div class="cart_add">
                        <a href="view/detailProduit.php?idOfProduit=' . $idOfProduit . '">Commander</a>&nbsp;&nbsp;&nbsp;
                        <a href="#" class="addToCart" data-id="' . $idOfProduit . '">Ajouter</a>

                       
                   </div>
                   </div>
                   </div>
                   </div>';
                }
                if ($category == "Fekkas" && $image == "img/shop/fekkas/1.jpg") {
                    echo '
                    <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="view/' . $image . '">
                    <div class="product__label">
                    <span>' . $name . '</span>
                    </div>
                    </div>
                    <div class="product__item__text">
                    <h6><a href="#">' . $name . '</a></h6>
                    <div class="product__item__price p-1 ml-5">' . $price . ' MAD pour 1Kg</div>
                        <div class="cart_add">
                        <a href="view/detailProduit.php?idOfProduit=' . $idOfProduit . '">Commander</a>&nbsp;&nbsp;&nbsp;
                        <a href="#" class="addToCart" data-id="' . $idOfProduit . '">Ajouter</a>
                   </div>
                   </div>
                   </div>
                   </div>';
                }
                if ($category == "DattesEtSellou" && $image == "img/shop/datteetsellou/1.jpg") {
                    echo '
                    <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="view/' . $image . '">
                    <div class="product__label">
                    <span>' . $name . '</span>
                    </div>
                    </div>
                    <div class="product__item__text">
                    <h6><a href="#">' . $name . '</a></h6>
                    <div class="product__item__price p-1 ml-5">' . $price . ' MAD pour 1Kg</div>
                        <div class="cart_add">
                        <a href="view/detailProduit.php?idOfProduit=' . $idOfProduit . '">Commander</a>&nbsp;&nbsp;&nbsp;
                        <a href="#" class="addToCart" data-id="' . $idOfProduit . '">Ajouter</a>
                   </div>
                   </div>
                   </div>
                   </div>';
                }
                if ($category == "COMPOSITIONS" && $image == "img/produit/c1.jpg") {
                    echo '
                    <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="view/' . $image . '">
                    <div class="product__label">
                    <span>' . $name . '</span>
                    </div>
                    </div>
                    <div class="product__item__text">
                    <h6><a href="#">' . $name . '</a></h6>
                    <div class="product__item__price p-1 ml-5">' . $price . ' MAD pour 1Kg</div>
                        <div class="cart_add">
                        <a href="view/detailProduit.php?idOfProduit=' . $idOfProduit . '">Commander</a>&nbsp;&nbsp;&nbsp;
                        <a href="#" class="addToCart" data-id="' . $idOfProduit . '">Ajouter</a>
                   </div>
                   </div>
                   </div>
                   </div>';
                }

                
            }
       
?>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
    <!-- Product Section Begin gatteau beldi -->
    <section class="product spad category-product" id="GateauBeldi">
        <div class="container">
            <div class="row">
            <?php
            $allProducts->execute();
            while($product=$allProducts->fetch(PDO::FETCH_ASSOC)) {
                    $image = $product['image'];
                    $name = $product['nom'];
                    $price = $product['prix'];
                    $category = $product['categorie'];
                    $idOfProduit = $product['id'];
        
                    if ($category == "GateauBeldi" ) {
                        echo '
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="view/' . $image . '">
                                    <div class="product__label">
                                        <span>' . $category . '</span>
                                    </div>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">' . $name . '</a></h6>
                                    <div class="product__item__price p-1 ml-5">' . $price . ' MAD pour 1Kg</div>
                                    <div class="cart_add">
                                        
                                        <a href="view/detailProduit.php?idOfProduit=' . $idOfProduit . '">Commander</a>&nbsp;&nbsp;&nbsp;
                                        <a href="#" class="addToCart" data-id="' . $idOfProduit . '">Ajouter</a>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }}?>  
            </div>
        </div>
    </section>
    <!-- Product Section Begin gatteau aux miel -->
    <section class="product spad category-product" id="GateauAuMiel">
        <div class="container">
            <div class="row">
            <?php
            $allProducts->execute();
            while($product=$allProducts->fetch(PDO::FETCH_ASSOC)) {
                    $image = $product['image'];
                    $name = $product['nom'];
                    $price = $product['prix'];
                    $category = $product['categorie'];
                    $idOfProduit = $product['id'];
        
                    if ($category == "GateauAuMiel" ) {
                        echo '
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="view/' . $image . '">
                                    <div class="product__label">
                                        <span>' . $category . '</span>
                                    </div>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">' . $name . '</a></h6>
                                    <div class="product__item__price p-1 ml-5">' . $price . ' MAD pour 1Kg</div>
                                    <div class="cart_add">
                                        <a href="view/detailProduit.php?idOfProduit=' . $idOfProduit . '">Commander</a>&nbsp;&nbsp;&nbsp;
                                        <a href="#" class="addToCart" data-id="' . $idOfProduit . '">Ajouter</a>

                                    </div>
                                </div>
                            </div>
                        </div>';
                    }}?>  
            </div>
        </div>
    </section>
    <!-- Product Section End gatteau aux miel -->
    <!-- Product Section Begin Fekkas -->
    <section class="product spad category-product" id="Fekkas">
        <div class="container">
            <div class="row">
            <?php
            $allProducts->execute();
            while($product=$allProducts->fetch(PDO::FETCH_ASSOC)) {
                    $image = $product['image'];
                    $name = $product['nom'];
                    $price = $product['prix'];
                    $category = $product['categorie'];
                    $idOfProduit = $product['id'];
                    
                    if ($category == "Fekkas" ) {
                        echo '
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="view/' . $image . '">
                                    <div class="product__label">
                                        <span>' . $category . '</span>
                                    </div>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">' . $name . '</a></h6>
                                    <div class="product__item__price p-1 ml-5">' . $price . ' MAD pour 1Kg</div>
                                    <div class="cart_add">
                                        <a href="view/detailProduit.php?idOfProduit=' . $idOfProduit . '">Commander</a>&nbsp;&nbsp;&nbsp;
                                        <a href="#" class="addToCart" data-id="' . $idOfProduit . '">Ajouter</a>

                                    </div>
                                </div>
                            </div>
                        </div>';
                    }}?> 
            </div>
        </div>
    </section>
    <!-- Product Section End Fekkas -->
    <!-- Product Section Begin Dattes et sellou -->
    <section class="product spad category-product" id="DattesEtSellou">
        <div class="container">
            <div class="row">
            <?php
            $allProducts->execute();
            while($product=$allProducts->fetch(PDO::FETCH_ASSOC)) {
                    $image = $product['image'];
                    $name = $product['nom'];
                    $price = $product['prix'];
                    $category = $product['categorie'];
                    $idOfProduit = $product['id'];
        
                    if ($category == "DattesEtSellou" ) {
                        echo '
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="view/' . $image . '">
                                    <div class="product__label">
                                        <span>' . $category . '</span>
                                    </div>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">' . $name . '</a></h6>
                                    <div class="product__item__price p-1 ml-5">' . $price . ' MAD pour 1Kg</div>
                                    <div class="cart_add">
                                        <a href="view/detailProduit.php?idOfProduit=' . $idOfProduit . '">Commander</a>&nbsp;&nbsp;&nbsp;
                                        <a href="#" class="addToCart" data-id="' . $idOfProduit . '">Ajouter</a>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }}?> 
            </div>
        </div>
    </section>
    <!-- Product Section End Dattes et sellou -->
    <!-- Product Section Begin COMPOSITIONS -->
    <section class="product spad category-product" id="COMPOSITIONS">
        <div class="container">
            <div class="row">
            <?php
            $allProducts->execute();
            while($product=$allProducts->fetch(PDO::FETCH_ASSOC)) {
                    $image = $product['image'];
                    $name = $product['nom'];
                    $price = $product['prix'];
                    $category = $product['categorie'];
                    $idOfProduit = $product['id'];
        
                    if ($category == "COMPOSITIONS" ) {
                        echo '
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="view/' . $image . '">
                                    <div class="product__label">
                                        <span>' . $category . '</span>
                                    </div>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">' . $name . '</a></h6>
                                    <div class="product__item__price p-1 ml-5">' . $price . ' MAD pour 1Kg</div>
                                    <div class="cart_add">
                                        <a href="view/detailProduit.php?idOfProduit=' . $idOfProduit . '">Commander</a>&nbsp;&nbsp;&nbsp;
                                        <a href="#" class="addToCart" data-id="' . $idOfProduit . '">Ajouter</a>
                                        </div>
                                </div>
                            </div>
                        </div>';
                    }}?>
            </div>
        </div>
    </section>

    <!-- Team Section Begin -->
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7">
                    <div class="section-title">
                        <span>Notre équipe</span>
                        <h2>Excellents chefs</h2>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item set-bg" data-setbg="view/img/team/team-1.jpg">
                        <div class="team__item__text">
                            <h6>Mohamed Sediki</h6>
                            <span>Decorateur</span>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item set-bg" data-setbg="view/img/team/team-2.jpg">
                        <div class="team__item__text">
                            <h6>Meryem Zahidi</h6>
                            <span>Decorateur</span>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item set-bg" data-setbg="view/img/team/team-3.jpg">
                        <div class="team__item__text">
                            <h6>Omar Hassani</h6>
                            <span>Decorateur</span>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item set-bg" data-setbg="view/img/team/team-4.jpg">
                        <div class="team__item__text">
                            <h6>Haitam Lbyed</h6>
                            <span>Decorateur</span>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Témoignages</span>
                        <h2>Nos clients ont dit</h2>
                    </div>
                </div>
            </div>
            <div class="row">
    <div class="testimonial__slider owl-carousel">
        <?php
        while ($avis = $allAvis->fetch(PDO::FETCH_ASSOC)) {
            $commentaire = $avis['contenu'];
            $prenom = $daoU->findUtilisateurById($avis['id_Utilisateur'])->getPrenom();
            $ville = $daoU->findUtilisateurById($avis['id_Utilisateur'])->getVille();

            echo '
                <div class="col-lg-6">
                    <div class="testimonial__item">
                        <div class="testimonial__author">
                            <div class="testimonial__author__text">
                                <h5>' . $prenom . '</h5>
                                <span>' . $ville . '</span>
                            </div>
                        </div>
                        <div class="rating">
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star-half_alt"></span>
                        </div>
                        <p>' . $commentaire . '</p>
                    </div>
                </div>';
        }
        ?>
    </div>
</div>

        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Instagram Section Begin -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 p-0">
                    <div class="instagram__text">
                        <div class="section-title">
                            <span>Suis nous sur instagram
                             </span>
                            <h2>   Les doux moments sont conservés comme souvenirs.</h2>
                        </div>
                        <h5><i class="fa fa-instagram"></i> @patisserie_marocaine</h5>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="view/img/instagram/instagram-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic middle__pic">
                                <img src="view/img/instagram/instagram-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="view/img/instagram/instagram-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="view/img/instagram/instagram-4.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic middle__pic">
                                <img src="view/img/instagram/instagram-5.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="view/img/instagram/instagram-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->

    <!-- Map Begin -->
    <div class="map">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-7">
                    <div class="map__inner">
                        <h6>Ecole Hassania des travaux publics</h6>
                        <ul>
                            <li>7 Rte d'El Jadida, Casablanca</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="map__iframe">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3325.3017524361944!2d-7.652900924589815!3d33.54553544431639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda62d268e15ba97%3A0xf667112bba6b818!2sEcole%20Hassania(EHTP)_!5e0!3m2!1sfr!2sma!4v1700777575167!5m2!1sfr!2sma" height="300" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            
        </div>
    </div>
    <!-- Map End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="view/img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>HEURES DE TRAVAIL</h6>
                        <ul>
                            <li>LUNDI - VENDREDI: 08:00  – 20:30 </li>
                            <li>SAMEDI: 10:00  – 16:30 </li>
                            <li>DIMANCHE: 10:00  – 16:30 </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="view/img/footer-logo.png" alt=""></a>
                        </div>
                        <p>Découvrez l'authenticité de la pâtisserie marocaine à chaque bouchée.</p>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__newslatter">
                        <h6>Subscribe</h6>
                        <p>Recevez les dernières mises à jour et offres.</p>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <p class="copyright__text text-white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | BY <i class="fa fa-heart" aria-hidden="true"></i>  <a href="https://colorlib.com" target="_blank">2GI GIRLS EHTP</a>
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      </p>
                  </div>
                  <div class="col-lg-5">
                    <div class="copyright__widget">
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Site Map</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->



<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content p-0">


      <div class="card cardPanier w-100">
        <div class="row rowpanier">
            <div class="col-md-8 cart">
                <div class="titlePanier">
                    <div class="row rowpanier">
                        <div class="col"><h4><b>Mon panier</b></h4></div>
                    </div>
                </div>    
                <div class="row border-top border-bottom rowpanier">
                    <div class="row main align-items-center rowpanier mainpanier">
                        <div class="col-2 col-2Panier"><img class="img-fluid" src="view/img/shop/dattesellou.jpg"></div>
                        <div class="col col-2Panier">
                            <div class="row text-muted rowpanier">Dattes et sellou</div>
                            <div class="row rowpanier">Dattes</div>
                        </div>
                        <div class="col col-2Panier">
                            <a href="#" class="lien">-</a><a href="#" class="border lien">1</a><a href="#" class="lien">+</a>
                        </div>
                        <div class="col col-2Panier">&euro; 44.00 <span class="close">&#10005;</span></div>
                    </div>
                </div>
                <div class="row border-top border-bottom rowpanier">
                    <div class="row main align-items-center rowpanier mainpanier">
                        <div class="col-2 col-2Panier"><img class="img-fluid" src="view/img/shop/dattesellou.jpg"></div>
                        <div class="col col-2Panier">
                            <div class="row text-muted rowpanier">Dattes et sellou</div>
                            <div class="row rowpanier">Dattes</div>
                        </div>
                        <div class="col col-2Panier">
                            <a href="#" class="lien">-</a><a href="#" class="border lien">1</a><a href="#" class="lien">+</a>
                        </div>
                        <div class="col col-2Panier">&euro; 44.00 <span class="close">&#10005;</span></div>
                    </div>
                </div>
                <div class="row border-top border-bottom rowpanier">
                    <div class="row main align-items-center rowpanier mainpanier">
                        <div class="col-2 col-2Panier"><img class="img-fluid" src="view/img/shop/dattesellou.jpg"></div>
                        <div class="col col-2Panier">
                            <div class="row text-muted rowpanier">Dattes et sellou</div>
                            <div class="row rowpanier">Dattes</div>
                        </div>
                        <div class="col col-2Panier">
                            <a href="#" class="lien">-</a><a href="#" class="border lien">1</a><a href="#" class="lien">+</a>
                        </div>
                        <div class="col col-2Panier">&euro; 44.00 <span class="close">&#10005;</span></div>
                    </div>
                </div>
                <div class="row border-top border-bottom rowpanier">
                    <div class="row main align-items-center rowpanier mainpanier">
                        <div class="col-2 col-2Panier"><img class="img-fluid" src="view/img/shop/dattesellou.jpg"></div>
                        <div class="col col-2Panier">
                            <div class="row text-muted rowpanier">Dattes et sellou</div>
                            <div class="row rowpanier">Dattes</div>
                        </div>
                        <div class="col col-2Panier">
                            <a href="#" class="lien">-</a><a href="#" class="border lien">1</a><a href="#" class="lien">+</a>
                        </div>
                        <div class="col col-2Panier">&euro; 44.00 <span class="close">&#10005;</span></div>
                    </div>
                </div>
                <div class="row border-top border-bottom rowpanier">
                    <div class="row main align-items-center rowpanier mainpanier">
                        <div class="col-2 col-2Panier"><img class="img-fluid" src="view/img/shop/dattesellou.jpg"></div>
                        <div class="col col-2Panier">
                            <div class="row text-muted rowpanier">Dattes et sellou</div>
                            <div class="row rowpanier">Dattes</div>
                        </div>
                        <div class="col col-2Panier">
                            <a href="#" class="lien">-</a><a href="#" class="border lien">1</a><a href="#" class="lien">+</a>
                        </div>
                        <div class="col col-2Panier">&euro; 44.00 <span class="close">&#10005;</span></div>
                    </div>
                </div>
                <div class="row border-top border-bottom rowpanier">
                    <div class="row main align-items-center rowpanier mainpanier">
                        <div class="col-2 col-2Panier"><img class="img-fluid" src="view/img/shop/dattesellou.jpg"></div>
                        <div class="col col-2Panier">
                            <div class="row text-muted rowpanier">Dattes et sellou</div>
                            <div class="row rowpanier">Dattes</div>
                        </div>
                        <div class="col col-2Panier">
                            <a href="#" class="lien">-</a><a href="#" class="border lien">1</a><a href="#" class="lien">+</a>
                        </div>
                        <div class="col col-2Panier">&euro; 44.00 <span class="close">&#10005;</span></div>
                    </div>
                </div>
                <div class="row rowpanier">
                    <div class="row main align-items-center rowpanier mainpanier rowpanier">
                        <div class="col-2 col-2Panier"><img class="img-fluid imgPanier" src="view/img/shop/fekkas.jpg"></div>
                        <div class="col col-2Panier">
                            <div class="row text-muted rowpanier">Categorie Fekkas</div>
                            <div class="row rowpanier">Fekkas</div>
                        </div>
                        <div class="col col-2Panier">
                            <a href="#" class="lien">-</a><a href="#" class="border lien">1</a><a href="#" class="lien">+</a>
                        </div>
                        <div class="col col-2Panier">&euro; 44.00 <span class="close">&#10005;</span></div>
                    </div>
                </div>

                <div class="back-to-shop"><a href="#">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
            </div>
            <div class="col-md-4 summaryPanier">
                <div><h4 style=" margin-top: 4vh;"><b>Total</b></h4></div>
                <hr style="margin-top: 1.25rem;">
                <div class="row rowpanier">
                    <div class="col col-2Panier" style="padding-left:0;">ITEMS 3</div>
                    <div class="col col-2Panier text-right">&euro; 132.00</div>
                </div>
                <form style="padding: 2vh 0;">
                    <p>SHIPPING</p>
                    <select class="selectPanier"><option class="text-muted">Standard-Delivery- &euro;5.00</option></select>
                    <p>GIVE CODE</p>
                    <input id="code" class="inputPanier" placeholder="Enter your code">
                </form>
                <div class="row rowpanier" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                    <div class="col col-2Panier">TOTAL PRICE</div>
                    <div class="col  col-2Panier text-right">&euro; 137.00</div>
                </div>
                <button class="btn btnPanier">CHECKOUT</button>
            </div>
        </div>
        
    </div>


    
  
</div>  
        
    </div>
  </div>
  
</div>






















<!-- Js Plugins -->
<script src="view/js/jquery-3.3.1.min.js"></script>
<script src="view/js/bootstrap.min.js"></script>
<script src="view/js/jquery.nice-select.min.js"></script>
<script src="view/js/jquery.barfiller.js"></script>
<script src="view/js/jquery.magnific-popup.min.js"></script>
<script src="view/js/jquery.slicknav.js"></script>
<script src="view/js/owl.carousel.min.js"></script>
<script src="view/js/jquery.nicescroll.min.js"></script>
<script src="view/js/main.js"></script>
<script src="view/js/object-fit-videos.js"></script>
<script src="view/js/app.js"></script>
<script>
    
    $(document).ready(function() {
        // Masquer toutes les sections de produits sauf la générale au démarrage
        $(".category-product").hide();

        // Gérer le clic sur une catégorie
        $(".categories__item").on("click", function() {
            // Masquer toutes les sections de produits
            $(".category-product").hide();
            $(".general-product").hide();

            // Récupérer l'ID de la catégorie sélectionnée
            var categoryId = $(this).data("category");

            // Afficher la section de produits spécifique à la catégorie sélectionnée
            $("#" + categoryId).show();

            // Mettre à jour les styles pour indiquer la catégorie active si nécessaire
            $(".categories__item").removeClass("active");
            $(this).addClass("active");
        });
    });
    function redirectToDetailProduit(nom) {
            window.location.href = "view/detailProduit.php?nomOfProduit=" + nom + "";
        };
        document.addEventListener("DOMContentLoaded", function () {
    var cartCountElement = document.querySelector('.cart-count');
    var addToCartButtons = document.querySelectorAll('.addToCart');

    // Retrieve the array of product IDs from the cookie
    var cartItems = JSON.parse(getCookie('cartItems')) || [];

    var cartCount = cartItems.length;
    cartCountElement.textContent = cartCount;

    addToCartButtons.forEach(function (button) {
        button.addEventListener('click', function (event) {
            event.preventDefault();

            // Retrieve the data-id attribute value from the clicked button
            var productId = button.getAttribute('data-id');

            // Add the product ID to the array
            cartItems.push(productId);

            // Update the cart count and set the cookie
            cartCount = cartItems.length;
            cartCountElement.textContent = cartCount;
            setCookie('cartItems', JSON.stringify(cartItems), 7);
            console.log("cartItems:", cartItems);
        });
    });

    // Function to set a cookie
    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + value + expires + "; path=/";
    }

    // Function to get the value of a cookie
    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }
});

</script>
</script>


</body>

</html>