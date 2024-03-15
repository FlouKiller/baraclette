<!DOCTYPE html>
<html lang="fr">

	<?php
	session_start();
	?>

	<head>
		<meta charset="utf-8"/>
		<title>Baraclette - Carte</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
		<link rel="stylesheet" href="style.css" />
		<meta name="description" content="Découvrez notre menu chez Baraclette, un bar à thême alliant les boissons et les raclettes. 
		Nous offrons une variété de plats à base de raclette, ainsi qu'une sélection de boissons pour compléter votre expérience culinaire.">
		<meta name="robots" content="index,follow">
	</head>
	
	<body>
		
		<?php include('assets/menu.php'); ?>
		
		<div class="logo">
			<figure>
				<img class="logo" src="assets/baraclette complet.png" alt="Logo du Baraclette"/>
				<figcaption id="devise">La détente en légende</figcaption>
			</figure>
		</div>

		<p style="margin-left: 50px; margin-right: 50px;">
			Bienvenue sur la page du menu du Baraclette, où nous vous offrons une sélection délicieuse de boissons et de plats à base de raclette. 
			Nous sommes fiers de proposer des ingrédients de qualité supérieure pour créer des plats généreux et savoureux. 
			Que vous soyez en quête d'un dîner léger ou d'un repas copieux, nous avons quelque chose pour vous. 
			Découvrez notre sélection de bières artisanales, de cocktails sophistiqués et de vins de qualité pour accompagner votre plat principal. 
			Et bien sûr, ne manquez pas notre fameuse raclette, préparée à partir des meilleurs ingrédients suisses traditionnels. 
			Consultez notre menu pour voir tout ce que nous avons à vous offrir et planifiez votre prochaine visite au Baraclette.
		</p>
		
		<div class="container">
			<div class="tableaux">
				<div class="row align-items-center">
					<div class="col-6">
						<table style="width: 90%" class="table table-dark">
							<thead>
								<tr>
									<th colspan="2">Apéritifs</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Coupe de champagne breton</td>
									<td>7,00€</td>
								</tr>
								<tr>
									<td>Kir Royal</td>
									<td>7,20€</td>
								</tr>
								<tr>
									<td>Cidre brut</td>
									<td>3,20€</td>
								</tr>
								<tr>
									<td>Ricard</td>
									<td>2,60€</td>
								</tr>
								<tr>
									<td>Pastis Henri Bardouin</td>
									<td>2,60€</td>
								</tr>
								<tr>
									<td>Martini</td>
									<td>3,50€</td>
								</tr>
								<tr>
									<td>Vodka Absolut blue</td>
									<td>4,80€</td>
								</tr>
								<tr>
									<td>Rhum 3 rivières</td>
									<td>4,80€</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-6">
						<img src="assets/aperitifs.jpg" style="width: 90%"/>
					</div>
				</div>
				
				<div class="row align-items-center">
					<div class="col-6">
						<img src="assets/whiskys.jpg" style="width: 90%"/>
					</div>
					<div class="col-6">
						<table style="width: 90%" class="table table-dark">
							<thead>
								<tr>
									<th colspan="2">Whisky</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Clean Campbell</td>
									<td>4,50€</td>
								</tr>
								<tr>
									<td>Jack Daniels</td>
									<td>6,50€</td>
								</tr>
								<tr>
									<td>Aberlour 10 ans</td>
									<td>7,00€</td>
								</tr>
								<tr>
									<td>Quiet man</td>
									<td>7,00€</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				
				<div class="row align-items-center">
					<div class="col-6">
						<table style="width: 90%" class="table table-dark">
							<thead>
								<tr>
									<th colspan="2">Cocktails</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Ti punch</td>
									<td>6,50€</td>
								</tr>
								<tr>
									<td>Mojito</td>
									<td>7,00€</td>
								</tr>
								<tr>
									<td>Pina Colada</td>
									<td>7,00€</td>
								</tr>
								<tr>
									<td>Punch Planteur</td>
									<td>7,00€</td>
								</tr>
								<tr>
									<td>Sex on the Beach</td>
									<td>7,00€</td>
								</tr>
								<tr>
									<td>Americano</td>
									<td>7,00€</td>
								</tr>
								<tr>
									<td>Spiritz</td>
									<td>7,00€</td>
								</tr>
								<tr>
									<td>Martini Show</td>
									<td>7,00€</td>
								</tr>
								<tr>
									<td>Tequila Sunrise</td>
									<td>7,00€</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-6">
						<img src="assets/cocktails.jpg" style="width: 90%"/>
					</div>
				</div>
				
				<div class="row align-items-center">
					<div class="col-6">
						<img src="assets/sans-alcool.jpg" style="width: 90%"/>
					</div>
					<div class="col-6">
						<table style="width: 90%" class="table table-dark">
							<thead>
								<tr>
									<th colspan="2">Sans alcool</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Mojito</td>
									<td>5,50€</td>
								</tr>
								<tr>
									<td>Pina Colada</td>
									<td>5,50€</td>
								</tr>
								<tr>
									<td>Sex on the Beach</td>
									<td>5,50€</td>
								</tr>
								<tr>
									<td>Punch Planteur</td>
									<td>5,50€</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				
				<div class="row align-items-center">
					<div class="col-6">
						<table style="width: 90%" class="table table-dark">
							<thead>
								<tr>
									<th>Bières</th>
									<th> 25 cl</th>
									<th> 50 cl</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Lancelot pils 4,5%</td>
									<td>2,80€</td>
									<td>5,50€</td>
								</tr>
								<tr>
									<td>Grimbergen Rouge</td>
									<td>3,50€</td>
									<td>6,90€</td>
								</tr>
								<tr>
									<td>Blanche Hermine</td>
									<td>3,50€</td>
									<td>6,90€</td>
								</tr>
								<tr>
									<td>Panache</td>
									<td>3,00€</td>
									<td>5,70€</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-6">
						<img src="assets/bierres.jpg" style="width: 90%"/>
					</div>
				</div>
				
				<div class="row align-items-center">
					<div class="col-6">
						<img src="assets/boissons-chaudes.jpg" style="width: 90%"/>
					</div>
					<div class="col-6">
						<table style="width: 90%" class="table table-dark">
							<thead>
								<tr>
									<th colspan="2">Boissons chaudes</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Expresso</td>
									<td>1,50€</td>
								</tr>
								<tr>
									<td>Ristretto</td>
									<td>1,50€</td>
								</tr>
								<tr>
									<td>Café Allongé</td>
									<td>1,50€</td>
								</tr>
								<tr>
									<td>Décaféiné</td>
									<td>1,70€</td>
								</tr>
								<tr>
									<td>Décaféiné Allongé</td>
									<td>1,90€</td>
								</tr>
								<tr>
									<td>Café crème</td>
									<td>1,70€</td>
								</tr>
								<tr>
									<td>Grand café</td>
									<td>2,80€</td>
								</tr>
								<tr>
									<td>Grand crème</td>
									<td>3,40€</td>
								</tr>
								<tr>
									<td>Cappuccino</td>
									<td>3,20€</td>
								</tr>
								<tr>
									<td>Chocolat viennois</td>
									<td>3,50€</td>
								</tr>
								<tr>
									<td>Chocolat chaud</td>
									<td>3,00€</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				
				<div class="row align-items-center">
					<div class="col-6">
						<table style="width: 90%" class="table table-dark">
							<thead>
								<tr>
									<th colspan="2">Digestifs</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Irish coffee</td>
									<td>7,50€</td>
								</tr>
								<tr>
									<td>Get 27</td>
									<td>5,00€</td>
								</tr>
								<tr>
									<td>Get 31</td>
									<td>5,00€</td>
								</tr>
								<tr>
									<td>Cointreau</td>
									<td>5,00€</td>
								</tr>
								<tr>
									<td>Grand Marinier</td>
									<td>5,00€</td>
								</tr>
								<tr>
									<td>Manzanita pomme</td>
									<td>5,00€</td>
								</tr>
								<tr>
									<td>Baileys</td>
									<td>5,00€</td>
								</tr>
								<tr>
									<td>Calvados Busnel VSOP</td>
									<td>5,00€</td>
								</tr>
								<tr>
									<td>Cognac ABK6 VSOP</td>
									<td>5,00€</td>
								</tr>
								<tr>
									<td>Blanche de Pomme</td>
									<td>5,00€</td>
								</tr>
								<tr>
									<td>Limoncello Cellini</td>
									<td>6,00€</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-6">
						<img src="assets/digestifs.jpg" style="width: 90%"/>
					</div>
				</div>
			</div>
		</div>
		
		<?php include('assets/footer.php'); ?>

	</body>

</html>