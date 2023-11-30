<?php include "../dao/daoProduit.php";

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
    <title>Cake | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

         <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__cart">
           <div class="offcanvas__cart__item">
                <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                <div class="cart__price">Panier: <span>$0.00</span></div>
            </div>
        </div>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="img/logo.png" alt=""></a>
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
                                <ul>
                                    
                                    <li><a href="#">Se connecter</a> <span class="arrow_carrot-down"></span></li>
                                </ul>
                            </div>
                            <div class="header__logo">
                                <a href="./index.html"><img src="img/logo.png" alt=""></a>
                            </div>
                            <div class="header__top__right">
                                <div class="header__top__right__cart">
                                    <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                                    <div class="cart__price">Panier: <span>$0.00</span></div>
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
                            <li class="active"><a href="./index.html">Home</a></li>
                            <li><a href="./about.html">About</a></li>
                            <li><a href="./shop.html">Shop</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__item set-bg">
        <div class="video-container">
                <video class="set-bg" autoplay loop muted playsinline>
                    <source src="img/hero/hero-1.mp4" type="video/mp4">
                    <!-- Ajoutez d'autres sources pour prendre en charge différents formats de vidéo -->
                    Votre navigateur ne prend pas en charge la balise vidéo.
                </video>
            
            </div>
            <div class="container" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 2; "">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="hero__text">
                            <h2>Savourer la douceur de la tradition marocaine à chaque bouchée !</h2>
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
        
                    if ($category == "GateauBeldi" && $image == "Corne_de_gazelle_classique.jpg") {
                        echo '
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/shop/gateauBeldi/' . $image . '">
                                    <div class="product__label">
                                        <span>' . $name . '</span>
                                    </div>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">' . $name . '</a></h6>
                                    <div class="product__item__price">' . $price . ' MAD</div>
                                    <div class="cart_add">
                                        <a href="#">Commander</a>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }
            
                if ($category == "GateauAuMiel" && $image == "1.jpg") {
                    echo '
                    <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/shop/gateauAuMiel/' . $image . '">
                    <div class="product__label">
                    <span>' . $name . '</span>
                    </div>
                    </div>
                    <div class="product__item__text">
                    <h6><a href="#">' . $name . '</a></h6>
                    <div class="product__item__price">' . $price . ' MAD</div>
                        <div class="cart_add">
                        <a href="#">Commander</a>
                   </div>
                   </div>
                   </div>
                   </div>';
                }
                if ($category == "Fekkas" && $image == "1.jpg") {
                    echo '
                    <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/shop/fekkas/' . $image . '">
                    <div class="product__label">
                    <span>' . $name . '</span>
                    </div>
                    </div>
                    <div class="product__item__text">
                    <h6><a href="#">' . $name . '</a></h6>
                    <div class="product__item__price">' . $price . ' MAD</div>
                        <div class="cart_add">
                        <a href="#">Commander</a>
                   </div>
                   </div>
                   </div>
                   </div>';
                }
                if ($category == "DattesEtSellou" && $image == "1.jpg") {
                    echo '
                    <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/shop/datteetsellou/' . $image . '">
                    <div class="product__label">
                    <span>' . $name . '</span>
                    </div>
                    </div>
                    <div class="product__item__text">
                    <h6><a href="#">' . $name . '</a></h6>
                    <div class="product__item__price">' . $price . ' MAD</div>
                        <div class="cart_add">
                        <a href="#">Commander</a>
                   </div>
                   </div>
                   </div>
                   </div>';
                }
                if ($category == "COMPOSITIONS" && $image == "1.jpg") {
                    echo '
                    <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/shop/COMPOSITIONS/' . $image . '">
                    <div class="product__label">
                    <span>' . $name . '</span>
                    </div>
                    </div>
                    <div class="product__item__text">
                    <h6><a href="#">' . $name . '</a></h6>
                    <div class="product__item__price">' . $price . ' MAD</div>
                        <div class="cart_add">
                        <a href="#">Commander</a>
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
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/gateauBeldi/Corne_de_gazelle_classique.jpg">
                            <div class="product__label">
                                <span>Gateaux beldi</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">CORNE DE GAZELLE CLASSIQUE</a></h6>
                            <div class="product__item__price">100 MAD</div>
                            <div class="cart_add">
                                <a href="#">Commander</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/gateauBeldi/Corne_de_Gazelle_aux_graines_de_sésamesjpg.jpg">
                            <div class="product__label">
                                <span>Gateaux beldi</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Corne de Gazelle aux graines de sésames</a></h6>
                            <div class="product__item__price">100 MAD</div>
                            <div class="cart_add">
                                <a href="#">Commander</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/gateauBeldi/Corne_de_gazelle_de_tetouan.jpg">
                            <div class="product__label">
                                <span>Gateaux beldi</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">CORNE DE GAZELLE DE TÉTOUAN</a></h6>
                            <div class="product__item__price">100 MAD</div>
                            <div class="cart_add">
                                <a href="#">Commander</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/gateauBeldi/Corne_de_Gazelle_mfenedjpg.jpg">
                            <div class="product__label">
                                <span>Gateaux beldi</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Corne de_Gazelle m'fened</a></h6>
                            <div class="product__item__price">100 MAD</div>
                            <div class="cart_add">
                                <a href="#">Commander</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/gateauBeldi/Gâteau_aux_dattesjpg.jpg">
                            <div class="product__label">
                                <span>Gateaux beldi</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Gâteau aux dattes</a></h6>
                            <div class="product__item__price">100 MAD</div>
                            <div class="cart_add">
                                <a href="#">Commander</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/gateauBeldi/Ghriba_au_beurre_et_aux_amandesjpg.jpg">
                            <div class="product__label">
                                <span>Gateaux beldi</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Ghriba au beurre et aux amandes</a></h6>
                            <div class="product__item__price">100 MAD</div>
                            <div class="cart_add">
                                <a href="#">Commander</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/gateauBeldi/GHRIBA_AU_BEURREjpg.jpg">
                            <div class="product__label">
                                <span>Gateaux beldi</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">GHRIBA AU BEURRE</a></h6>
                            <div class="product__item__price">100 MAD</div>
                            <div class="cart_add">
                                <a href="#">Commander</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/gateauBeldi/Ghriba_aux_amandesjpg.jpg">
                            <div class="product__label">
                                <span>Gateaux beldi</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Ghriba aux amandes</a></h6>
                            <div class="product__item__price">100 MAD</div>
                            <div class="cart_add">
                                <a href="#">Commander</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/gateauBeldi/Ghriba_aux_noix.jpg">
                            <div class="product__label">
                                <span>Gateaux beldi</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Ghriba aux noix</a></h6>
                            <div class="product__item__price">100 MAD</div>
                            <div class="cart_add">
                                <a href="#">Commander</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/gateauBeldi/Maamoulejpg.jpg">
                            <div class="product__label">
                                <span>Gateaux beldi</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Maamoule</a></h6>
                            <div class="product__item__price">100 MAD</div>
                            <div class="cart_add">
                                <a href="#">Commander</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/gateauBeldi/MINI_CORNES_DE_GAZELLE_CLASSIQUEjpg.jpg">
                            <div class="product__label">
                                <span>Gateaux beldi</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">MINI CORNES DE GAZELLE CLASSIQUE</a></h6>
                            <div class="product__item__price">100 MAD</div>
                            <div class="cart_add">
                                <a href="#">Commander</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/gateauBeldi/Mini_ghriba_au_beurrejpg.jpg">
                            <div class="product__label">
                                <span>Gateaux beldi</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Mini ghriba au beurre</a></h6>
                            <div class="product__item__price">100 MAD</div>
                            <div class="cart_add">
                                <a href="#">Commander</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/gateauBeldi/Mini_Ghriba_aux_amandes.jpg">
                            <div class="product__label">
                                <span>Gateaux beldi</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Mini Ghriba aux amandes</a></h6>
                            <div class="product__item__price">100 MAD</div>
                            <div class="cart_add">
                                <a href="#">Commander</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section Begin gatteau aux miel -->
    <section class="product spad category-product" id="GateauAuMiel">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/gateauAuMiel/1.jpg">
                            <div class="product__label">
                                <span>Gateaux au miel</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Cigare au lait et aux amandes</a></h6>
                            <div class="product__item__price">100 MAD</div>
                            <div class="cart_add">
                                <a href="#">Commander</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/gateauAuMiel/2.jpg">
                            <div class="product__label">
                                <span>Gateaux au miel</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">M'HANCHA COUPÉ</a></h6>
                            <div class="product__item__price">100 MAD</div>
                            <div class="cart_add">
                                <a href="#">Commander</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/gateauAuMiel/3.jpg">
                            <div class="product__label">
                                <span>Gateaux au miel</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">M’hancha classique</a></h6>
                            <div class="product__item__price">100 MAD</div>
                            <div class="cart_add">
                                <a href="#">Commander</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/gateauAuMiel/4.jpg">
                            <div class="product__label">
                                <span>Gateaux au miel</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Briwattes au miel</a></h6>
                            <div class="product__item__price">100 MAD</div>
                            <div class="cart_add">
                                <a href="#">Commander</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/gateauAuMiel/5.jpg">
                            <div class="product__label">
                                <span>Gateaux au miel</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Mini Briwattes au miel</a></h6>
                            <div class="product__item__price">100 MAD</div>
                            <div class="cart_add">
                                <a href="#">Commander</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/gateauAuMiel/6.jpg">
                            <div class="product__label">
                                <span>Gateaux au miel</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Chebbakia</a></h6>
                            <div class="product__item__price">100 MAD</div>
                            <div class="cart_add">
                                <a href="#">Commander</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/gateauAuMiel/7.jpg">
                            <div class="product__label">
                                <span>Gateaux au miel</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Makroute</a></h6>
                            <div class="product__item__price">100 MAD</div>
                            <div class="cart_add">
                                <a href="#">Commander</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End gatteau aux miel -->
    <!-- Product Section Begin Fekkas -->
    <section class="product spad category-product" id="Fekkas">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6" >
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/fekkas/1.jpg">
                            <div class="product__label">
                                <span>Fekkas</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Fekkas aux amandes</a></h6>
                            <div class="product__item__price">100 MAD</div>
                            <div class="cart_add">
                                <a href="#">Commander</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6" >
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/fekkas/2.jpg">
                            <div class="product__label">
                                <span>Fekkas</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Fekkas aux noix</a></h6>
                            <div class="product__item__price">$30.00</div>
                            <div class="cart_add">
                                <a href="#">Commander</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6" >
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/fekkas/3.jpg">
                            <div class="product__label">
                                <span>Fekkas</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Fekkas à la créme fraiche</a></h6>
                            <div class="product__item__price">$31.00</div>
                            <div class="cart_add">
                                <a href="#">Commander</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End Fekkas -->
    <!-- Product Section Begin Dattes et sellou -->
    <section class="product spad category-product" id="DattesEtSellou">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-3 col-md-6 col-sm-6" >
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/datteetsellou/1.jpg">
                            <div class="product__label">
                                <span>Dattes et sellou</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">sellou traditionnel</a></h6>
                            <div class="product__item__price">100 MAD</div>
                            <div class="cart_add">
                                <a href="#">Commander</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6" >
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/datteetsellou/2.jpg">
                            <div class="product__label">
                                <span>Dattes et sellou</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Dattes fourrées</a></h6>
                            <div class="product__item__price">100 MAD</div>
                            <div class="cart_add">
                                <a href="#">Commander</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End Dattes et sellou -->
    <!-- Product Section Begin COMPOSITIONS -->
    <section class="product spad category-product" id="COMPOSITIONS">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6" >
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/compositions/1.jpg">
                            <div class="product__label">
                                <span>COMPOSITIONS</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Plateau de mignardises de pâtisseries beldi</a></h6>
                            <div class="product__item__price">100 MAD</div>
                            <div class="cart_add">
                                <a href="#">Commander</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6" >
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/compositions/2.jpg">
                            <div class="product__label">
                                <span>COMPOSITIONS</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Plateaux de gâteaux beldi</a></h6>
                            <div class="product__item__price">100 MAD</div>
                            <div class="cart_add">
                                <a href="#">Commander</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
               
                </div>
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
                    <div class="team__item set-bg" data-setbg="img/team/team-1.jpg">
                        <div class="team__item__text">
                            <h6>Randy Butler</h6>
                            <span>Decorater</span>
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
                    <div class="team__item set-bg" data-setbg="img/team/team-2.jpg">
                        <div class="team__item__text">
                            <h6>Randy Butler</h6>
                            <span>Decorater</span>
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
                    <div class="team__item set-bg" data-setbg="img/team/team-3.jpg">
                        <div class="team__item__text">
                            <h6>Randy Butler</h6>
                            <span>Decorater</span>
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
                    <div class="team__item set-bg" data-setbg="img/team/team-4.jpg">
                        <div class="team__item__text">
                            <h6>Randy Butler</h6>
                            <span>Decorater</span>
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
                        <span>Témoignage</span>
                        <h2>Notre client a dit</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial__slider owl-carousel">
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="img/testimonial/ta-1.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Kerry D.Silva</h5>
                                    <span>New york</span>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="img/testimonial/ta-2.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Kerry D.Silva</h5>
                                    <span>New york</span>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="img/testimonial/ta-1.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Ophelia Nunez</h5>
                                    <span>London</span>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="img/testimonial/ta-2.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Kerry D.Silva</h5>
                                    <span>New york</span>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="img/testimonial/ta-1.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Ophelia Nunez</h5>
                                    <span>London</span>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="img/testimonial/ta-2.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Kerry D.Silva</h5>
                                    <span>New york</span>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
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
                                <img src="img/instagram/instagram-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic middle__pic">
                                <img src="img/instagram/instagram-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/instagram/instagram-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/instagram/instagram-4.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic middle__pic">
                                <img src="img/instagram/instagram-5.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/instagram/instagram-3.jpg" alt="">
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
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>HEURE DE TRAVAIL</h6>
                        <ul>
                            <li>LUNDI - VENDREDI: 08:00 am – 08:30 pm</li>
                            <li>SAMEDI: 10:00 am – 16:30 pm</li>
                            <li>DIMANCHE: 10:00 am – 16:30 pm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
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
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.barfiller.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/main.js"></script>
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
</script>
</script>
</body>

</html>