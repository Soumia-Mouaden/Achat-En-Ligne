<?php
include "../dao/daoCommande.php";
include "../dao/daoUtilisateur.php";
session_start();
$daoUser = new DaoUtilisateur();
$daoCommande = new DaoCommande();
$nbUser = $daoUser->countUsers();
$dateAujourdhui = date('Y-m-d');
$nbCommandeAuj = $daoCommande->countCommandes($dateAujourdhui, 'En cours de traitement');
$caisse = $daoCommande->countCaisse();
$donneesJSON = ''; // Initialiser la variable
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style/style.css">
	<link rel="icon" href="../view/img/logo.png">

	<!-- <title>Dashboard</title> -->
</head>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
	google.charts.load('current', {
		'packages': ['line']
	});
	google.charts.setOnLoadCallback(drawChart);

	function drawChart() {

		var data = new google.visualization.DataTable();
		data.addColumn('number', 'Jour');
		data.addColumn('number', 'Ventes');


		<?php
		
		$nombreJours = cal_days_in_month(CAL_GREGORIAN, 12, date('Y'));
		$rows = array();

		// Récupérer les données pour chaque jour
		for ($i = 1; $i <= $nombreJours; $i++) {
			$totalVente = $daoCommande->countVente(12, $i);
			$rows[] = "[$i, $totalVente]";
		}

		// Convertir le tableau en chaîne JSON pour JavaScript
		$donneesJSON = implode(",", $rows);
		?>

		 data.addRows([
            <?php echo $donneesJSON; ?>
        ]);

		var options = {
			chart: {
				title: 'Total des ventes pour le mois courant en MAD',
			},
			titleTextStyle: {
				color: '#000000',
				fontSize: 16,
				bold: true,
				fontName: 'arial',

			},
			width: 580,
			height: 400,
			legend: {
				position: "none",
			},
			colors: ['#8D610E'], // Changer la couleur ici (par exemple, rouge)

		};


		var chart = new google.charts.Line(document.getElementById('columnchart_values'));

		chart.draw(data, google.charts.Line.convertOptions(options));

	}



	// anneau
	google.charts.load("current", {
		packages: ["corechart"]
	});

	function drawChartAnneau() {
         
		<?php
		$liste3Jours= $daoCommande->countLast3Days();
		$rows = [
            ['Etat', 'Total'], // Ajoute les en-têtes des colonnes ici
        ];
		// en attente de traitement 
		$attente =0;
		for ($i = 0; $i <= 2; $i++){
			$date = date('Y-m-d', strtotime("2023-12-$liste3Jours[$i]"));
			 $attente+= $daoCommande->countCommandes($date,'En attente');
		}
		$rows[]= ['En attente',$attente ];

		// en cours de traitement 
		$traitement =0;
		for ($i = 0; $i <= 2; $i++){
			$date = date('Y-m-d', strtotime("2023-12-$liste3Jours[$i]"));
			 $traitement+= $daoCommande->countCommandes($date,'En cours de traitement');
		}
		$rows[]= ['En cours de traitement',$traitement ];
		

		// en cours de livraison 
		$livraison =0;
		for ($i = 0; $i <= 2; $i++){
			$date = date('Y-m-d', strtotime("2023-12-$liste3Jours[$i]"));
			$livraison+= $daoCommande->countCommandes($date,'En cours de livraison');
	   }
	//    $livraison=29;
	   $rows[]= ['En cours de livraison',$livraison ];
	   
       
	   // en cours de livraison 
	    $livree =0;
		for ($i = 0; $i <= 2; $i++){
			$date = date('Y-m-d', strtotime("2023-12-$liste3Jours[$i]"));
			$livree+= $daoCommande->countCommandes($date,'Livrée');
	   }
	//    $livree=29;
	   $rows[]= ['Livrée', $livree ];


		// Convertir le tableau en chaîne JSON pour JavaScript
		$donneesJSON = json_encode($rows);
		?>

var donnee = google.visualization.arrayToDataTable(<?php echo $donneesJSON; ?>);

		var options = {
			title: '  ',
			titleTextStyle: {
				fontSize: 16,
			},
			chartArea: {
				width: '70%',
				height: '60%',
				top: 70
			},
			slices: [{
				color: '#EA531A'
			},{
				color: '#F6B220'
			} ,{
				color: '#8D610E'
			}, {
				color: '#CBCAC3'
			}],
			legend: {
				position: 'none',
			},
			pieHole: 0.4,
			height: 500,
		};

		var chart2 = new google.visualization.PieChart(document.getElementById('donutchart'));
		chart2.draw(donnee, options);
	}
	// Charger le graphique d'anneau après avoir chargé le package 'corechart'
	google.charts.setOnLoadCallback(drawChartAnneau);
</script>


</head>

<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<img src="img/louza.png" alt="logo" id="logoHlou" style="width: 70px;height:auto;">
			<span class="text" style="color: #8D610E;">HLOU'IN</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="index.php">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Tableau de bord</span>
				</a>
			</li>
			<li>
				<a href="liste-produits.php">
					<i class='bx bxs-box'></i>
					<span class="text">Produits</span>
				</a>
			</li>
			<li>
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
				<a href="#">
					<i class='bx bxs-cog'></i>
					<span class="text">Paramètres</span>
				</a>
			</li>
			<li>
				<a href="../controller/utilisateurController.php?action=deconnexion" class="logout">
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
						echo  'Bienvenue '. $utilisateur->getNom() .' '. $utilisateur->getPrenom() . '!' ;
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
					<h1 style="color:black">Tableau de bord</h1>
					<ul class="breadcrumb">
						<li>
							<!-- </li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li> -->
					</ul>
				</div>
				<!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
			</div>

			<ul class="box-info">

				<li>
					<i class='bx bxs-calendar-check'></i>
					<span class="text">
						<h3>
							<?php
							if (isset($nbCommandeAuj)) {
								echo $nbCommandeAuj;
							}
							?>
						</h3>
						<p>Commandes</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group'></i>
					<span class="text">
						<h3>
							<?php
							if (isset($nbUser)) {
								echo $nbUser;
							}
							?>
						</h3>
						<p>Clients</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle'></i>
					<span class="text">
						<h3>
							<?php
							if (isset($caisse)) {
								echo $caisse;
							}
							?>
						</h3>
						<p>Caisse en MAD</p>
					</span>
				</li>
			</ul>


			<!-- diagrams -->


			<div style="display: flex;">
				<div id="chart-container" style="position: relative; float: left; width:620px; padding:20px;background-color:white;margin-right:20px;">
					<div id="columnchart_values" style=" position: relative; z-index: 1; ;">
					</div>

					<!-- <div id="filter-section" style="position: absolute; top: 25px; left: 450px; z-index: 2;">
						<label for="start"></label>
						<input type="month"  id="start" name="start" min="2023-09" value="2023-12" />
					</div> -->
				</div>
				<div style="position: relative;width: calc(100% - 680px);height:500px;margin-left:40px;margin-top:20px;">
					<div id="donutchart">
					</div>
					<span style="position: absolute; top: 20px; left: 40px; z-index: 2; font-weight:bold; font-family:Arial, Helvetica, sans-serif ;font-size:16px; width:200px; "> Suivi des commandes des trois derniers jours</span>
					<div class="legend" style="position: absolute; top: 340px; left: 40px; z-index: 2; ">
					<div class="legend-item">
							<div class="legend-circle" style="background-color: #EA531A;"></div>
							<span>
								En attente de traitement
							</span>
						</div>	
					<div class="legend-item">
							<div class="legend-circle" style="background-color: #F6B229;"></div>
							<span>
								<!-- <?php echo $traitement;
								?> -->
								En cours de traitement
							</span>
						</div>
						<div class="legend-item">
							<div class="legend-circle" style="background-color: #8D610E;"></div>
							<span>En cours de livraison
								<!-- <?php echo $livraison;?> -->
							</span>
						</div>
						<div class="legend-item">
							<div class="legend-circle" style="background-color: #CBCAC3;"></div>
							<span>Livrée 
								<!-- <?php echo $livree;
								?> -->
								</span>
						</div>
					</div>
				</div>
			</div>

			
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="script.js"></script>
</body>

</html>