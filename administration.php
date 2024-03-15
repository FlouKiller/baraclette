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
	</head>

    <body>
	
		<?php include('assets/menu.php'); ?>

        <div class="logo">
			<figure>
				<img class="logo" src="assets/baraclette complet.png" alt="Logo du Baraclette"/>
				<figcaption id="devise">La détente en légende</figcaption>
			</figure>
		</div>

        <h2>Connexion</h2>

        <form action="assets/authentification.php" method="post">
            <label for="username">Nom d'utilisateur:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Se connecter">
            <?php

            if(isset($_GET['message'])){;

                $message = $_GET["message"];

                echo "<br>";
                echo "<br>";
                
                if ($message == "succes"){
                    echo "<p>Connexion réussie</p>";
                }

                if ($message == "erreur"){
                    echo "<p>Identifiant ou mot de passe incorrect</p>";
                }

                if ($message == "deconnexion"){
                    echo "<p>Déconnexion réussie</p>";
                }
            }
        
            ?>
	    </form>

        <?php include('assets/footer.php'); ?>

    </body>

</html>