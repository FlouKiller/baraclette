<!DOCTYPE html>
<html lang="fr">

	<?php
	session_start();
	?>

	<head>
		<meta charset="utf-8"/>
		<title>Baraclette - Thême</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
		<link rel="stylesheet" href="style.css" />
		<meta name="description" content="Venez célébrer vos événements spéciaux chez Baraclette, un bar à thème alliant les boissons et les raclettes. 
		Nous offrons un environnement unique pour des fêtes, des anniversaires et d'autres occasions spéciales.">
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
		
		<div style="margin-left: 50px; margin-right: 50px;">
			<p>Le Baraclette est un bar à thême alliant <span class="theme">deux excellentes choses de la vie</span> : les bars et les raclettes.</p>
			<p>Vous aimez <span class="theme">l'alcool et le fromage bien chaud</span> ? Vous êtes au bon endroit ! Chez nous, vous pourrez consommez votre boisson préférée (alcoolisée ou non) avec une bonne raclette en accompagnement</p>
			<p>Si vous souhaitez passer <span class="theme">un bon moment entre amis ou en famille</span>, venez chez nous ! Vous ne le regretterez pas.</p>
			<p>Le Baraclette est plus qu'un simple bar, c'est une expérience culinaire unique qui vous transportera dans un monde de dégustation et de convivialité. Le bar propose une large sélection de boissons, des bières artisanales aux cocktails les plus sophistiqués, pour s'adapter à tous les goûts et toutes les envies.</p>
			<p>Mais ce qui fait vraiment la différence, c'est notre fameuse raclette. Nous utilisons les meilleurs ingrédients pour créer des plats délicieux et généreux, tout en respectant les traditions culinaires suisses. Vous pourrez déguster notre raclette accompagnée d'une variété de pains frais et de charcuteries artisanales.
			<p>En plus de la nourriture délicieuse, nous offrons également un cadre accueillant et agréable pour profiter de votre soirée. Le bar est décoré dans un style montagnard confortable, avec une atmosphère chaleureuse et intime pour se détendre et discuter avec vos proches.</p>
			<p>Alors n'hésitez plus et venez nous rendre visite pour découvrir le Baraclette et goûter à la meilleure raclette de la ville. Vous ne serez pas déçu !</p>
		</div>
		
		<?php include('assets/footer.php'); ?>

	</body>

</html>