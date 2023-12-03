<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="card">
        <div class="container">

            
            
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 body-main">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <img class="img" alt="Invoice Template" src="img.png" />
                                </div>
                                <div class="col-md-8 text-right">
                                    <h4 style="color: #F81D2D;"><strong>Bakery Bestie</strong></h4>
                                    <p>221, Baker Street</p>
                                    <p>1800-234-124</p>
                                    <p>example@gmail.com</p>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h2>INVOICE</h2>
                                    <h5>04854654101</h5></br>
                                   
                                    <p> 23 Nov 2023</p>
                                </div>
                            </div>
                            <br />
                            <div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th><h5>Description</h5></th>
                                            <th><h5>Quantity</h5></th>
                                            <th><h5>Price</h5></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    <?php

                                       session_start();

// Récupérer la 'facture' de la session
$facture = isset($_SESSION['facture']) ? $_SESSION['facture'] : null;

// Vérifier si $facture n'est pas null et est un tableau ou un objet
if ($facture !== null && (is_array($facture) || is_object($facture))) {

    foreach ($facture as $commandeProduit) {
        echo '<td class="col-md-6">' . $commandeProduit->nom . '</td>';
        echo '<td class="col-md-3">' . $commandeProduit->quantité . '</td>';
        echo '<td class="col-md-3">' . $commandeProduit->quantité * $commandeProduit->prix . '</td>';
    }
    endforeach
} else if ($facture == null) {
    echo "Error: \$facture is null.";
} else {
    echo " or not an array or object";
}
                                  echo '<tr style="color: #F81D2D;">'
                                  echo '<td class="text-right"><h4><strong>Total:</strong></h4></td>';
                                  echo '<td class="text-left"><h4><strong>' '</strong></h4></td>';
                                    </tr>

// Effacer la facture de la session après utilisation (facultatif)
unset($_SESSION['facture']);
?>

                                   

                                    </tbody>
                                </table>
                            </div>
                            <div>
                                <div class="col-md-12">
                                    
                                    <br />
                                    <p><b>Bakery Bestie</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
