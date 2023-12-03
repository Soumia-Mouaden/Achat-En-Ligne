<?php 
include "../dao/daoCommande.php";
include "../dao/daoUtilisateur.php";
$daoUser = new DaoUtilisateur();
$daoCommande = new DaoCommande();
$nbUser = $daoUser->countUsers();
$nbCommandeAuj = $daoCommande->countCommandesToday();
$daoCommandes = new DaoCommande();
$caisse= $daoCommandes->countCaisse();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<!-- <title>Dashboard</title> -->
</head>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
	google.charts.load("current", { packages: ['corechart'] });
	google.charts.setOnLoadCallback(drawChart);
	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			["Mois", "Ventes", { role: "style" }],
			["Janvier", 8.94, "#b87333"],
			["Février", 10.49, "silver"],
			["Mars", 19.30, "gold"],
			["Avril", 21.45, "color: #e5e4e2"],
			["Mai", 8.94, "#b87333"],
			["Juin", 10.49, "silver"],
			["Juillet", 19.30, "gold"],
			["Août", 21.45, "color: #e5e4e2"],
			["Septembre", 8.94, "#b87333"],
			["Octobre", 10.49, "silver"],
			["Novembre", 19.30, "gold"],
			["Décembre", 21.45, "color: #e5e4e2"]
		]);

		var options = {
			title: "Total des ventes en millions de dirhams",
			titleTextStyle: {
				fontSize: 16,
				Position: 'start',
			},
			width: 620,
			height: 400,
			bar: { groupWidth: "95%" },
			legend: { position: "none" },
		};
		var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
		chart.draw(data, options);
	}

	// anneau
	function drawChartAnneau() {
		var donnee = google.visualization.arrayToDataTable([
			['Statut', 'Nombre'],
			['En attente de paiement', 11],
			['En cours de traitement', 2],
			['En cours de livraison', 2],
			['Livrée', 2],
		]);

		var options = {
			title: 'Suivi des commandes   ',
			//   position:top,
			titleTextStyle: {
				fontSize: 16,

			},
			chartArea: { width: '70%', height: '50%', top: 70 },
			slices: [{color: '#F6B229'}, {color: '#8D610E'}, {color: '#F8E77C'}, {color: '#CBCAC3'}],
			legend: { position: 'none', },
			pieHole: 0.4,
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
			<i class='bx bxs-smile'></i>
			<span class="text">HLOU'IN</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Tableau de bord</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-box'></i>
					<span class="text">Produits</span>
				</a>
			</li>
			<li>
				<a href="#">
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
				<a href="#" class="logout">
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
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Rechercher...">
					<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
				</div>
			</form>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>

			<div class="head-title">
				<div class="left">
					<h1>Tableau de bord</h1>
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


			<div style="display: flex;" >
				<div id="chart-container" style="position: relative; float: left; ">
					<div id="columnchart_values" style=" position: relative; z-index: 1; width: 600px;">
					</div>
					<div id="filter-section" style="position: absolute; top: 25px; left: 450px; z-index: 2;">
						<label for="start"></label>
						<input type="month" id="start" name="start" min="2023-09" value="2023-12" />
					</div>
				</div>
				<div style="position: relative;width: calc(100% - 600px);"  >
					<div id="donutchart">
					</div>
					<div class="legend" style="position: absolute; top: 280px; left: 70px; z-index: 2; ">
						<div class="legend-item">
							<div class="legend-circle" style="background-color: #F6B229;"></div>
							<span>En attente de paiement</span>
						</div>
						<div class="legend-item">
							<div class="legend-circle" style="background-color: #8D610E;"></div>
							<span>En cours de traitement</span>
						</div>
						<div class="legend-item">
							<div class="legend-circle" style="background-color: #F8E77C;"></div>
							<span>En cours de livraison</span>
						</div>
						<div class="legend-item">
							<div class="legend-circle" style="background-color: #CBCAC3;"></div>
							<span>Livrée</span>
						</div>
					</div>
				</div>
			</div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Commandes récentes</h3>
						<i class='bx bx-search'></i>
						<i class='bx bx-filter'></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Référence</th>
								<th>Produit</th>
								<th>Date de création</th>
								<th>Quantité</th>
								<th>Total</th>
								<th>Date de livraison</th>
								<th>Etat</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									12367
								</td>
								<td>
									<img src="img/people.png">
									<p>John ggg </p>
								</td>
								<td>01-10-2021</td>
								<td>1</td>
								<td>100</td>
								<td>10/10/2023</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
							
						</tbody>
					</table>
				</div>
				<!-- <div class="todo">
					<div class="head">
						<h3>Todos</h3>
						<i class='bx bx-plus'></i>
						<i class='bx bx-filter'></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded'></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded'></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded'></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded'></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded'></i>
						</li>
					</ul>
				</div> -->
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="script.js"></script>
</body>

</html>
