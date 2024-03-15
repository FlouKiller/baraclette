<!DOCTYPE html>
<html lang="fr">

	<?php
	session_start();
	?>

	<head>
		<meta charset="utf-8"/>
		<title>Baraclette - Avis</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
		<link rel="stylesheet" href="style.css" />
		<meta name="description" content="Lisez les avis des clients sur Baraclette, un bar à thême alliant les boissons et les raclettes. 
		Découvrez ce que nos clients disent de leur expérience chez nous et planifiez votre prochaine visite en toute confiance.">
		<meta name="robots" content="index,follow">
	</head>
	
	<body>
		
		<?php include('assets/menu.php'); ?>

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
		
		<div class="logo">
			<figure>
				<img class="logo" src="assets/baraclette complet.png" alt="Logo du Baraclette"/>
				<figcaption id="devise">La détente en légende</figcaption>
			</figure>
		</div>
		
		<h2>Votre avis nous intéresse</h2>
		<br>

		<p style="margin-left: 50px; margin-right: 50px;">
			Bienvenue sur la page d'avis du Baraclette ! Nous sommes ravis que vous ayez choisi de partager votre expérience avec nous. 
			Vos commentaires sont importants pour nous et nous nous efforçons de toujours améliorer notre service et notre cuisine. 
			Si vous avez récemment visité notre bar, nous aimerions savoir ce que vous en avez pensé. 
			Avez-vous apprécié notre sélection de boissons et de plats à base de raclette ? Étiez-vous satisfait de notre service ? 
			Nous sommes impatients de lire vos commentaires et de savoir comment nous pouvons continuer à vous fournir une expérience exceptionnelle. 
			Alors n'hésitez pas à laisser un avis et partagez votre expérience au Baraclette avec nous !
		</p>
		
		<br>

		<form method="post">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<p>Qualité générale du service :</p>
						<input type="radio" id="service1" value="1" name="service"/>
						<label for="service1">Très insatisfait</label>
						<input type="radio" id="service1" value="2" name="service"/>
						<label for="service2">Insatisfait</label>
						<input type="radio" id="service1" value="3" name="service"/>
						<label for="service3">Assez satisfait</label>
						<input type="radio" id="service1" value="4" name="service"/>
						<label for="service4">Satisfait</label>
						<input type="radio" id="service1" value="5" name="service"/>
						<label for="service5">Très satisfait</label>
					</div>
				</div>
				
				<br>
				
				<div class="row">
					<div class="col-12">
						<p>Propreté du bar :</p>
						<select name="proprete" id="service1">
						<option value="1">Très insatisfait</option>
						<option value="2">Insatisfait</option>
						<option value="3">Assez satisfait</option>
						<option value="4">Satisfait</option>
						<option value="5" selected>Très satisfait</option>
					</select>
					</div>
				</div>

				<br>
				
				<div class="row">
					<div class="col-12">
						<p>Sympathie du personnel :</p>
						<input type="radio" id="service1" value="1" name="sympathie"/>
						<label for="service1">Très insatisfait</label>
						<input type="radio" id="service1" value="2" name="sympathie"/>
						<label for="service2">Insatisfait</label>
						<input type="radio" id="service1" value="3" name="sympathie"/>
						<label for="service3">Assez satisfait</label>
						<input type="radio" id="service1" value="4" name="sympathie"/>
						<label for="service4">Satisfait</label>
						<input type="radio" id="service1" value="5" name="sympathie"/>
						<label for="service5">Très satisfait</label>
					</div>
				</div>

				<br>

				<div class="row">
					<div class="col-12">
						<p>Commentaire :</p>
						<textarea id="story" name="commentaire" rows="5" cols="33"></textarea>
					</div>
				</div>

				<br>

				<div class="row">
					<div class="col-12">
					<input type="submit" name="envoyer" class="envoyer" value="Envoyer vos réponses"/>
					</div>
				</div>

				<br>

				<div class="row">
					<div class="col-12">
					<?php
					if(isset($_POST['service']) && isset($_POST['proprete']) && isset($_POST['sympathie']) && isset($_POST['commentaire'])){
						$service = $_POST['service'];
						$proprete = $_POST['proprete'];
						$sympathie = $_POST['sympathie'];
						$commentaire = $_POST['commentaire'];
						
						$moyenne = ($service + $proprete + $sympathie) / 3;
						
						echo '<div class="alert alert-success" role="alert">Merci pour votre commentaire. Votre note de ' . $moyenne . '/5 a été envoyée.</div>';

						$requete = $conn->prepare("INSERT INTO avis (qualite_generale, proprete, sympathie_personnel, commentaire) 
						VALUES (:qg, :proprete, :sp, :comm)");
						$requete->bindParam(':qg', $service);
						$requete->bindParam(':proprete', $proprete);
						$requete->bindParam(':sp', $sympathie);
						$requete->bindParam(':comm', $commentaire);
						$requete->execute();
					}
					?>
					</div>
				</div>

				<br>
				
				<div class="row">

					<div class="col-6">
						<?php
						if ($conn) {
							$requete = $conn->prepare("SELECT COUNT(*) FROM avis");
							$requete->execute();
							$resultat = $requete->fetch();
							echo "<p>Nombre total d'avis : " . $resultat[0];
						} else {
							echo "Error connecting to database";
						}
						?>
					</div>

					<div class="col-6">
						<?php
						$requete = $conn->prepare("SELECT AVG( (qualite_generale + proprete + sympathie_personnel) / 3 ) as average_rating FROM avis");
						$requete->execute();
						$resultat = $requete->fetch();
						echo "Note moyenne : " . round($resultat['average_rating'], 2);
						?>
					</div>

				</div>
			</div>
		</form>
		
		<br>

		<div class="container">
			<div class="row">
				<h2>Les derniers avis</h2>
				<?php

				$requete = $conn->prepare("SELECT * FROM avis ORDER BY id DESC LIMIT 10");
				$requete->execute();
				$resultats = $requete->fetchAll();
				
				echo "<table class='table table-striped'>";
				echo "<tr>";
				echo "<th class='text-center'>Qualité générale</th>";
				echo "<th class='text-center'>Propreté</th>";
				echo "<th class='text-center'>Sympathie du personnel</th>";
				echo "<th class='text-center w-50'>Commentaire</th>";
				if(isset($_SESSION["username"])){
					echo "<th class='text-center'>Gestion</th>";
				}
				echo "</tr>";
				
				foreach ($resultats as $row) {
					echo "<tr>";
					echo "<td class='align-middle'>" . $row['qualite_generale'] . "/5</td>";
					echo "<td class='align-middle'>" . $row['proprete'] . "/5</td>";
					echo "<td class='align-middle'>" . $row['sympathie_personnel'] . "/5</td>";
					echo "<td class='align-middle'>" . $row['commentaire'] . "</td>";
					if(isset($_SESSION["username"])){
						echo "<td class='text-center'><a href='assets/supprimer-avis.php?id=" . $row["id"] . "' class='btn btn-secondary'>Supprimer</a></td>";
					}
					echo "</tr>";
				}
				
				echo "</table>";
				?>
			</div>
		</div>

		<?php include('assets/footer.php'); ?>
		
	</body>
	

</html>