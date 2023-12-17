<?php
 include "dao/daoProduit.php";
include "dao/daoUtilisateur.php";
$dao = new DaoProduit();
$allProducts = $dao->listProduits();
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
    <link rel="stylesheet" href="view/css/SStyle.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
    <!-- <div class="offcanvas__cart">
           <div class="offcanvas__cart__item">
                <a href="#"><img src="view/img/icon/cart.png" alt=""> <span>0</span></a>
                <div class="cart__price">Panier: <span>$0.00</span></div>
            </div>
        </div>-->
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
                            session_start();
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

                            <div class="header__logo">
                                <a href="./index.html"><img src="view/img/logo.png" alt=""></a>
                            </div>
                            <div class="header__top__right">
                               <!-- <div class="header__top__right__cart">
                                    <a href="#"><img src="view/img/icon/cart.png" alt=""> <span>0</span></a>
                                    <div class="cart__price">Panier: <span>$0.00</span></div>
                                </div>-->
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
        
                    if ($category == "GateauBeldi" && $image == "img/produit/Corne_de_gazelle_classique.jpg") {
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
                                    <a href="view/detailProduit.php?idOfProduit=' . $idOfProduit . '">Commander</a>

                                    </div>
                                </div>
                            </div>
                        </div>';
                    }
            
                if ($category == "GateauAuMiel" && $image == "img/produit/1.jpg") {
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
                        <a href="view/detailProduit.php?idOfProduit=' . $idOfProduit . '">Commander</a>
                        

                       
                   </div>
                   </div>
                   </div>
                   </div>';
                }
                if ($category == "Fekkas" && $image == "img/produit/fekkas1.jpg") {
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
                        <a href="view/detailProduit.php?idOfProduit=' . $idOfProduit . '">Commander</a>
                   </div>
                   </div>
                   </div>
                   </div>';
                }
                if ($category == "DattesEtSellou" && $image == "img/produit/d1.jpg") {
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
                        <a href="view/detailProduit.php?idOfProduit=' . $idOfProduit . '">Commander</a>
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
                        <a href="view/detailProduit.php?idOfProduit=' . $idOfProduit . '">Commander</a>
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
                                        
                                        <a href="view/detailProduit.php?idOfProduit=' . $idOfProduit . '">Commander</a>
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
                                        <a href="view/detailProduit.php?idOfProduit=' . $idOfProduit . '">Commander</a>
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
                                        <a href="view/detailProduit.php?idOfProduit=' . $idOfProduit . '">Commander</a>
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
                                        <a href="view/detailProduit.php?idOfProduit=' . $idOfProduit . '">Commander</a>
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
                                        <a href="view/detailProduit.php?idOfProduit=' . $idOfProduit . '">Commander</a>
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
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                
                                <div class="testimonial__author__text">
                                    <h5>Mohamed</h5>
                                    <span>Casablance</span>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <p>La patisserie marocaine n'est pas seulement réputée pour ses délices, mais aussi pour son service exceptionnel. Une équipe qui prend soin de chaque détail.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                
                                <div class="testimonial__author__text">
                                    <h5>Nawal</h5>
                                    <span>Tanger</span>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <p>La patisserie marocaine à son apogée! Des créations sucrées qui célèbrent l'héritage culinaire du Maroc avec chaque bouchée. Un vrai régal pour les papilles.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                
                                <div class="testimonial__author__text">
                                    <h5>Samia</h5>
                                    <span>Rabat</span>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <p>Une explosion de saveurs sucrées qui m'a transporté dans les ruelles parfumées du Maroc. Un arrêt incontournable pour les amateurs de pâtisseries exotiques.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                
                                <div class="testimonial__author__text">
                                    <h5>Malak</h5>
                                    <span>Guelmim</span>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <p>Une escapade gourmande au Maroc sans quitter la ville! Les pâtisseries sont une invitation au voyage, une expérience sucrée qui émerveille à chaque visite.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                
                                <div class="testimonial__author__text">
                                    <h5>Yousra</h5>
                                    <span>Fes</span>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <p>Un délice sucré qui reflète l'art et la passion de la pâtisserie marocaine. Chaque gâteau est une œuvre d'art, chaque saveur une histoire à savourer.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                               
                                <div class="testimonial__author__text">
                                    <h5>Marwa</h5>
                                    <span>Kenitra</span>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <p>Un service rapide et professionnel qui complète parfaitement la délicatesse des pâtisseries. Une équipe dévouée qui met la satisfaction du client en priorité.</p>
                        </div>
                    </div>
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
        }
</script>
</script>
</body>

</html>