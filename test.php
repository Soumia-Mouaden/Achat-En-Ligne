<?php
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produit detail</title>
    <!-- logo -->
    <link rel="icon" href="img/logo.png">

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
    <link rel="stylesheet" href="view/css/styleTotal.css" type="text/css">
</head>
<style>
/* Ajoutez des styles CSS personnalisés ici */
.custom-border {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    /* Couleur et épaisseur de la bordure */
    border-radius: 0px;
    /* Rayon de la bordure pour rendre le coin arrondi */
    padding: 10px;
    /* Espace à l'intérieur de la bordure */
    width: 150px;
}

.custom-border-2 {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    /* Couleur et épaisseur de la bordure */
    border-radius: 0px;
    /* Rayon de la bordure pour rendre le coin arrondi */
    padding: 10px;
    /* Espace à l'intérieur de la bordure */
    width: 350px;
}
</style>

<body>

    <button type="button" class="primary-btn" data-toggle="modal" data-target="#myModal">Acheter</button>

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title container"
                        style="color:rgb(160, 110, 3); font-weight: 600; font-size:30px; text-align:center;">Ma commande
                    </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="" method="post">

                        <div class="row container">
                            <div class="col-lg-6">
                                <div class="product__details__text">
                                    <div class="product__details__option row">

                                        <div class="col-md-6">
                                            <p>Quantité: <span>(en Kg)</span></p>

                                            <div class="quantity" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                                                <div class="pro-qty">
                                                    <input type="text" id="myInput" name="quantite" value="1">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-6">
                                            <p>Prix Total:</p>
                                            <label for="myInput" class="custom-border" style="text-align:center;"></label>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>

                    </form>
                </div>

            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
    $(document).ready(function () {    
        var proQty = $('.pro-qty');
        var myInput = $('#myInput');
        var labelTotalPrice = $('.custom-border'); //pour afficher prix total
        var prixProduit = "100";
        labelTotalPrice.text(prixProduit + ' MAD');

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

        /*$('.primary-btn').on('click', function () {
            var valeurInput = $('#qq').val();

            localStorage.setItem('inputValue', valeurInput);

            myInput.val(valeurInput);

            updateTotalPrice();
        });

        var inputValue = localStorage.getItem('inputValue') || 0;
        $('#myInput').val(inputValue);

        updateTotalPrice();*/
    });
</script>


    </script>
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
</body>

</html>