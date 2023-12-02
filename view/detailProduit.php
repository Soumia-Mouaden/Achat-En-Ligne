<?php
include "../dao/daoProduit.php";

$daoProduit = new DaoProduit();
$idOfProduit = isset($_GET['idOfProduit']) ? $_GET['idOfProduit'] : "";
$produit = $daoProduit->findProduct($idOfProduit);
$categoryOfProduct = $produit->getCategorie();
$produits = $daoProduit->ProductsOfCategory($categoryOfProduct,$idOfProduit);
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>product details</title>

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
                <div class="cart__price">Cart: <span>$0.00</span></div>
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
                                    
                                    <li><a href="#">Sign in</a> <span class="arrow_carrot-down"></span></li>
                                </ul>
                            </div>
                            <div class="header__logo">
                                <a href="./index.html"><img src="img/logo.png" alt=""></a>
                            </div>
                            <div class="header__top__right">
                                <div class="header__top__right__cart">
                                    <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                                    <div class="cart__price">Cart: <span>$0.00</span></div>
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

    <!-- Shop Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product__details__img">

                        <div class="product__details__big__img"> 
                            <?php
                                if (isset($produit)) {
                                $imageProduit = $produit->getImage();
                                }
                            ?>
                            <img class="big_img" src="<?php echo $imageProduit; ?>" alt=""> 
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        
                        <div class="product__label">
                            <?php
                                if (isset($produit)) {
                                echo $produit->getCategorie();
                                }
                            ?>
                        </div>

                        <h2>
                            <?php
                                if (isset($produit)) {
                                echo $produit->getNom();
                                }
                            ?>
                        </h2>

                        <h6 style="border-bottom: 1px solid #724502;">
                            <?php
                                if (isset($produit)) {
                                echo $produit->getPrix();
                                }
                            ?> MAD pour 1Kg
                        </h6>

                        <p>
                            <?php
                                if (isset($produit)) {
                                echo $produit->getDescription();
                                }
                            ?>
                        </p>
                        <div class="product__details__option mt-5 mb-0">
                            <p>Quantité: <span>(en Kg)</span></p>

                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="2" id="qq">
                                </div>
                            </div>
                            <button type="button" class="primary-btn" data-toggle="modal" data-target="#myModal">Commander</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__details__tab">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" data-toggle="tab" href="#tabs-2" role="tab">Informations supplémentaires</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" data-toggle="tab" href="#tabs-3" role="tab">Avis(1)</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-2" role="tabpanel">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <table class="table">
                                        <tbody>
                                          <tr>
                                            <th style="color:rgb(145, 107, 58)">Ingrédients</th>

                                            <td>
                                                <?php
                                                if (isset($produit)) {
                                                echo $produit->getIngredients();
                                                }
                                                ?>
                                          </td>
                                          
                                          </tr>
                                          <tr>
                                            <th style="color:rgb(145, 107, 58)">Méthode de conservation</th>

                                            <td>
                                                <?php
                                                if (isset($produit)) {
                                                echo $produit->getConservation();
                                                }
                                                ?>
                                            </td>

                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tabs-3" role="tabpanel">  
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <div class="mt-4 mb-5">
                                        <div class="media border p-3" style="height: 100px;">
                                          <img src="img/profil.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:40px;">
                                          <div class="media-body">
                                            <small>John Doe <small><i>Décembre 19, 2023</i></small></small>
                                            <h6 class="mt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>      
                                          </div>
                                        </div>
                                      </div>

                                    <form action="/action_page.php">
                                        <div class="form-group mt-3">
                                          <label for="comment">Donner votre avis :</label>
                                          <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                                        </div>
                                        <button type="submit" class="border-0 p-1" style="background-color: rgb(209, 193, 141);">Envoyer</button>
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Details Section End -->

    <!-- Related Products Section Begin --> 
    <section class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title mb-5 mt-4"> 
                        <h2>Vous aimerez aussi ces produits</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="related__products__slider owl-carousel">

                    <?php foreach ($produits as $produitC) : 
                        if (isset($produitC)) {
                            $imageProduitC = $produitC->getImage();
                            $categorieProduitC = $produitC->getCategorie();
                            $nomProduitC = $produitC->getNom();
                            $prixProduitC = $produitC->getPrix();
                            $idProduitC = $produitC->getId();
                        }
                    ?>   
                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="<?php echo $imageProduitC; ?>">
                                <div class="product__label">
                                    <span><?php echo $categorieProduitC; ?></span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="detailProduit.php?idOfProduit=<?php echo $idProduitC;?>"><?php echo $nomProduitC; ?></a></h6>
                                <div class="product__item__price p-1 ml-5"><?php echo $prixProduitC;?> MAD pour 1Kg</div>
                                <div class="cart_add">
                                    <a href="detailProduit.php?idOfProduit=<?php echo $idProduitC;?>">Acheter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Related Products Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>WORKING HOURS</h6>
                        <ul>
                            <li>Monday - Friday: 08:00 am – 08:30 pm</li>
                            <li>Saturday: 10:00 am – 16:30 pm</li>
                            <li>Sunday: 10:00 am – 16:30 pm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <p>Lorem ipsum dolor amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore dolore magna aliqua.</p>
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
                        <p>Get latest updates and offers.</p>
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
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
</div>

<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title container" style="color:rgb(160, 110, 3); font-weight: 600; font-size:30px; text-align:center;">Ma commande</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <div class="row container">
            <div class="col-lg-12 product__details__text" style="margin-top:15px;">
                        <h4 style="color: rgb(92, 64, 4); font-weight: 550; margin-bottom: 12px;">
                            <?php
                                if (isset($produit)) {
                                echo $produit->getNom();
                                }
                            ?>
                        </h4>

                        <h6 style=" padding-bottom: 15px; margin-bottom: 10px; font-size: 15px; font-weight: 500; border-bottom: 1px solid #724502; width:260px;">
                            <?php
                                if (isset($produit)) {
                                echo $produit->getPrix();
                                }
                            ?> MAD pour 1Kg
                        </h6>
                </div>
                <div class="col-lg-6 mt-3" style="padding-left:10px;">
                        <div class="product__details__big__img"> 
                            <?php
                                if (isset($produit)) {
                                $imageProduit = $produit->getImage();
                                }
                            ?>
                            <img class="big_img" src="<?php echo $imageProduit; ?>" alt=""> 
                        </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <style>
                            /* Ajoutez des styles CSS personnalisés ici */
                            .custom-border {
                                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Couleur et épaisseur de la bordure */
                            border-radius: 0px; /* Rayon de la bordure pour rendre le coin arrondi */
                            padding: 10px; /* Espace à l'intérieur de la bordure */
                            width:150px;
                            }
                            .custom-border-2 {
                                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Couleur et épaisseur de la bordure */
                            border-radius: 0px; /* Rayon de la bordure pour rendre le coin arrondi */
                            padding: 10px; /* Espace à l'intérieur de la bordure */
                            width:350px;
                            }
                        </style>
                        <div class="product__details__option row">
                            <div class="col-md-6">
                                <p>Quantité: <span>(en Kg)</span></p>
                                <div class="quantity" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                                    <div class="pro-qty">
                                        <input type="text" id="myInput">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p>Prix Total:</p>
                                <label for="myInput" class="custom-border" style="text-align:center;"></label>
                            </div>
                            <div class="col-md-12 mt-4">
                                <p>Saisir votre localisaton:</p>
                                <textarea for="exampleTextarea" class="custom-border-2" style="border:none;" data-prix="<?php echo $produit->getPrix(); ?>"></textarea>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <!-- Modal footer -->
        <div class="modal-footer container" style="justify-content: space-between;">
          <button type="button" class="btn" style="background: #dbd5c4; border: none; width:150px;" data-dismiss="modal">Annuler</button>
          <button type="button" class="btn btn-secondary" style="background: rgb(221, 189, 85); border: none; width:150px;" data-dismiss="modal">Valider</button>
        </div>

        </div>
      </div>
    </div>
  </div>
  
</div>

<!-- Assurez-vous que jQuery est inclus avant ce script -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function () {    
        var proQty = $('.pro-qty');
        var myInput = $('#myInput');
        var labelTotalPrice = $('.custom-border'); // Déplacez ceci à la portée globale
        var prixProduit = <?php echo $produit->getPrix(); ?>;

        proQty.prepend('<span class="dec qtybtn">-</span>');
        proQty.append('<span class="inc qtybtn">+</span>');

        proQty.on('click', '.qtybtn', function () {
            var $button = $(this);
            var oldValue = parseFloat(myInput.val());

            if ($button.hasClass('inc')) {
                var newVal = oldValue + 1;
            } else {
                if (oldValue > 0) {
                    var newVal = oldValue - 1;
                } else {
                    newVal = 0;
                }
            }

            $button.parent().find('input').val(newVal);
            myInput.val(newVal);
            updateTotalPrice();
        });

        function updateTotalPrice() {
            var quantity = parseFloat(myInput.val());
            var totalPrice = quantity * prixProduit;
            labelTotalPrice.text(totalPrice.toFixed(2) + ' MAD');
        }

        // Lorsque le bouton "Commander" est cliqué
        $('.primary-btn').on('click', function () {
            // Récupérez la valeur de l'input
            var valeurInput = $('#qq').val();

            // Stockez la valeur dans le stockage local
            localStorage.setItem('inputValue', valeurInput);

            // Mettez à jour la valeur de l'input dans le modèle
            myInput.val(valeurInput);

            // Appelez la fonction pour mettre à jour le prix total
            updateTotalPrice();
        });

        // Récupérez la valeur depuis le stockage local
        var inputValue = localStorage.getItem('inputValue') || 0;
        $('#myInput').val(inputValue);

        // Appelez la fonction pour mettre à jour le prix total au chargement initial
        updateTotalPrice();
    });
</script>


</script>
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
</body>

</html>




