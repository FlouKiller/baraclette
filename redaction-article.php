<!DOCTYPE html>
<html lang="fr">

	<?php
	session_start();

    if(!isset($_SESSION["username"])){
        header("Location: index.php");
    }
	?>

	<head>
		<meta charset="utf-8"/>
		<title>Baraclette</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
		<link rel="stylesheet" href="style.css"/>
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

        <form action="redaction-article.php" method="post">
            <label for="titre">Titre de l'article :</label>
            <input type="text" id="titre" name="titre" required><br><br>
            <p>Contenu de l'article :</p>
            <textarea rows="10" cols="50" id="contenu" name="contenu" required></textarea><br><br>
            <input type="submit" value="Publier">
	    </form>

        <?php
        if (isset($_POST["titre"]) && isset($_POST["contenu"])){
            date_default_timezone_set('Europe/Paris');
            $titre = $_POST["titre"];
            $contenu = $_POST["contenu"];
            $auteur = $_SESSION["username"];
            $date = new \DateTime();
            $date = $date->format('Y-m-d H:i:s');
            
            $requete = $conn->prepare("INSERT INTO articles (titre, contenu, auteur, date_parution) 
            VALUES (:titre, :contenu, :auteur, :date_parution)");
            $requete->bindParam(':titre', $titre);
            $requete->bindParam(':contenu', $contenu);
            $requete->bindParam(':auteur', $auteur);
            $requete->bindParam(':date_parution', $date);
            $requete->execute();

            header("Location: index.php");
        }
        ?>

        <?php include('assets/footer.php'); ?>

    </body>

</html>