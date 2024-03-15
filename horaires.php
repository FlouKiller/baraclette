<!DOCTYPE html>
<html lang="fr">

	<?php
	session_start();
	?>

	<head>
		<meta charset="utf-8"/>
		<title>Baraclette - Horaires</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
		<link rel="stylesheet" href="style.css" />
		<meta name="description" content="Consultez les horaires de Baraclette pour planifier votre prochaine visite. 
		Nous sommes ouverts tous les jours sauf le lundi et vous accueillons pour déguster notre sélection de plats à base de raclette et de boissons.">
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
			Bienvenue sur la page d'horaires du Baraclette, où vous pourrez découvrir nos heures d'ouverture et planifier votre prochaine visite. 
			Nous sommes ouverts tous les jours de la semaine et nous nous efforçons de fournir un environnement confortable et accueillant pour tous nos clients. 
			Nous sommes fiers de proposer une sélection variée de boissons et de plats à base de raclette pour satisfaire tous les goûts. 
			Consultez notre horaire pour trouver les heures qui conviennent le mieux à votre emploi du temps. 
			Nous sommes impatients de vous accueillir au Baraclette pour un moment de détente et de dégustation.
		</p>
		
		<ul style="list-style-position: inside; margin-left: -40px" class="list-group">
			<li>Lundi : Fermé</li>
			<li>Mardi : 11h00 - 21h00</li>
			<li>Mercredi : 11h00 - 21h00</li>
			<li>Jeudi : 11h00 - 21h00</li>
			<li>Vendredi : 11h00 - 02h00</li>
			<li>Samedi : 11h00 - 02h00</li>
			<li>Dimanche : 10h00 - 13h00</li>
		</ul>
		
		<?php include('assets/footer.php'); ?>

	</body>

</html>