<!DOCTYPE html>
<html lang="fr">

	<?php
	session_start();
	?>

	<head>
		<meta charset="utf-8"/>
		<title>Baraclette</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
		<link rel="stylesheet" href="style.css"/>
		<meta name="description" content="Bienvenue sur le site de Baraclette, un bar à thême alliant les boissons et les raclettes. 
		Découvrez notre sélection de plats et de boissons, et venez passer un bon moment en famille ou entre amis.">
		<meta name="robots" content="index,follow">

		<script type="application/json">
			{
			"nom": "Baraclette",
			"adresse": "46 rue Benjamin Constant, 31400 Toulouse"
			}
		</script>
	</head>
	
	<body>

		<?php
		$servername = 'localhost';
		$username = 'root';
		$password = '';
		
		try{
			$conn = new PDO("mysql:host=$servername;dbname=baraclette;charset=utf8;", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e){
		  echo "Erreur : " . $e->getMessage();
		}
		?>
	
		<?php include('assets/menu.php'); ?>
	
		<div class="logo">
			<figure>
				<img class="logo" src="assets/baraclette complet.png" alt="Logo du Baraclette"/>
				<figcaption id="devise">La détente en légende</figcaption>
			</figure>
		</div>

		<br>

		<div class="container">

			<div class="row">
				<h2>Derniers articles :</h2>
			</div>

			<br>

			<div class="row">
				<?php

				$stmt = $conn->prepare('SELECT * FROM articles ORDER BY date_parution DESC LIMIT 6');
				$stmt->execute();

				while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$titre = $row['titre'];
				$contenu = $row['contenu'];
				$date_parution = $row['date_parution'];
				$auteur = $row['auteur'];
				
				echo "<div class='col-lg-4 col-md-6 col-sm-12'>";
				echo "<h4>$titre</h4>";
				echo "<p>$contenu</p>";
				echo "<p>Par $auteur, le $date_parution</p>";
				echo "</div>";

				}

				?>
			</div>

			<?php
			if(isset($_SESSION["username"])){
				echo "<br>";
				echo "<div class='row'>";
				echo "<div class='col-12'>";
				if ($_SESSION["gestion_articles"] == 0){
					echo "<a href='redaction-article.php' class='btn btn-secondary' disabled>Écrire un article</a>";
				} else {
					echo "<a href='redaction-article.php' class='btn btn-secondary'>Écrire un article</a>";
				}
				echo "</div>";
				echo "</div>";
			} 
			?>

		</div>

		<?php include('assets/footer.php'); ?>
		
	</body>

</html>