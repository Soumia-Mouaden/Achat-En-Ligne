<?php
include "../dao/daoUtilisateur.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- logo -->
    <link rel="icon" href="../view/img/logo.png">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter&display=swap" />

    <!-- My CSS -->
    <link rel="stylesheet" href="style/R-Dashboard.css">
    <!-- <link rel="stylesheet" href="css/R-liste-produits.css">
  <link rel="stylesheet" href="css/R-addProcdModal.css"> -->

    <!-- dom -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>HLOU'IN</title>
</head>

<body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand" style="text-decoration: none;">
            <img src="img/louza.png" alt="logo" id="logoHlou" style="width: 70px;height:auto;">
            <span class="text" style="color: #8D610E;">HLOU'IN</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="index.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Tableau de bord</span>
                </a>
            </li>
            <li class="#">
                <a href="liste-produits.php">
                    <i class='bx bxs-box'></i>
                    <span class="text">Produits</span>
                </a>
            </li>
            <li class="active">
                <a href="liste-commandes.php">
                    <i class='bx bxs-cart-alt'></i>
                    <span class="text">Commandes</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-message'></i>
                    <span class="text">Contacts</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#" style="text-decoration: none;">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Paramètres</span>
                </a>
            </li>
            <li>
                <a href="../controller/utilisateurController.php?action=deconnexion" class="logout" style="text-decoration: none;">


                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Se déconnecter</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <!-- <i class='bx bx-menu'></i> -->
            <!-- <form action="#">
				<div class="form-input">
					<input type="search" placeholder="Rechercher...">
					<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
				</div>
			</form> -->
            <!-- <a href="#" class="profile">
				<img src="img/people.png">
			</a> -->
            <div class="profile" style="margin-left:700px;font-size:17px;font-weight:bold;">
                <?php
                if (isset($_SESSION["utilisateur"])) {
                    $utilisateur = $_SESSION['utilisateur'];
                    if ($utilisateur != null) {
                        echo  'Bienvenue ' . $utilisateur->getNom() . ' ' . $utilisateur->getPrenom() . '!';
                    }
                }
                ?>
            </div>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Liste des commandes</h1>
                    <!-- <ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul> -->
                </div>
                <!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
            </div>



            <!-- tableau des produits -->
            <link rel="stylesheet" href="style/R-liste-produits.css">
            <link rel="stylesheet" href="style/R-addProcdModal.css">
            <div class="container-xl">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <!-- <div class="col-sm-6">
									<h2>Nos produits</h2>
								</div> -->
                                <div class="col-sm-6">
                                    <div class="mainButtons">
                                        <button id="addProductBtn"> Nouveau produit</button>
                                        <button id="deleteProductBtn"> Supprimer</button>
                                    </div>
                                    <!-- <a href="" id="addProductBtn"  ><i class="material-icons">&#xE147;</i> <span>Nouveau produit</span></a>
									<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Supprimer</span></a>						 -->
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <span>
                                            <input type="checkbox" id="selectAll">
                                            <label for="selectAll"></label>
                                        </span>
                                    </th>
                                    <th>#</th>
                                    <th>Date creation</th>
                                    <th>Date livraison</th>
                                    <th>Ville livraison</th>
                                    <th>Etat </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                include "../controller/liste-commandes.php";
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <!-- MAIN -->

    </section>
    <!-- CONTENT finish-->
    <!-- modal start -->
    

    <!-- edit modal -->
    
    <link rel="stylesheet" href="style/R-detailComModal.css">
    <!-- <script src="js/R-editProdModal.js"></script> -->

    <!-- Delete Modal HTML -->





    <script src="js/R-Dash-nav.js"></script>
    <script src="js/R-tab-product-checkbox.js"></script>
</body>

</html>