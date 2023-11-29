
<?php
include "model/produit.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button type="button" class="boutton1" onclick="redirectToDetailProduit()">Le produit fekkas amondes</button>
    <script>
        function redirectToDetailProduit() {
            window.location.href = "view/detailProduit.php?nomOfProduit=fekkas";
        }
    </script>
</body>
</html>