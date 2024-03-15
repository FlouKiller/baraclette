<!DOCTYPE html>
<html lang="fr">

	<?php
	session_start();
	?>

	<head>
		<meta charset="utf-8"/>
		<title>Baraclette</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
		<link rel="stylesheet" href="style.css" />
		<script type="text/javascript" src="quizz.js"></script>
		<meta name="description" content="Testez vos connaissances sur Baraclette, un bar à thême alliant les boissons et les raclettes, en jouant à notre quizz amusant. 
		Participez et découvrez peut-être de nouvelles informations sur notre bar.">
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
			Bienvenue sur notre page de quizz du Baraclette! Vous pensez en connaître un rayon sur les bars à thème et les raclettes ? 
			Alors ce quizz est fait pour vous! Mettez vos connaissances à l'épreuve en répondant à des questions sur notre bar et notre cuisine. 
			Vous découvrirez peut-être des informations sur les ingrédients que nous utilisons, les boissons que nous proposons et même sur l'histoire de la raclette. 
			Ce quizz est amusant et divertissant, alors pourquoi ne pas le faire avec vos amis pour voir qui est le plus grand expert en la matière ? 
			Alors, prêt à relever le défi ? Commençons !
		</p>
		
		<div class="container">
			<form>
				<div class="row">
					<div class="col-md-12 col-lg-6 col-xl-4" style="margin-top: 50px;">
						<p>En quelle année a été</br>inventé la raclette ?</p>
						<input type="radio" id="q1r1" value="1874" name="q1"/>
						<label for="q1r1">1874</label>
						<input type="radio" id="q1r2" value="1926" name="q1"/>
						<label for="q1r2">1926</label>
						<input type="radio" id="q1r3" value="1998" name="q1"/>
						<label for="q1r3">1998</label>
					</div>
					
					<div class="col-md-12 col-lg-6 col-xl-4" style="margin-top: 50px;">
						<p>En quelle année le premier bar </br>du monde a-t-il ouvert ?</p>
						<input type="radio" id="q2r1" value="1226" name="q2"/>
						<label for="q2r1">1226</label>
						<input type="radio" id="q2r2" value="2017" name="q2"/>
						<label for="q2r2">2017</label>
						<input type="radio" id="q2r3" value="793" name="q2"/>
						<label for="q2r3">793</label>
					</div>
					
					<div class="col-md-12 col-lg-6 col-xl-4" style="margin-top: 50px;">
						<p>Quel est le nom de l'inventeur du fromage ?</p>
						<input type="text" id="q3" name="q3"/>
					</div>
					
					<div class="col-md-12 col-lg-6 col-xl-4" style="margin-top: 50px;">
						<p>Cochez les étapes n'appartenant pas </br>à la fabrication du fromage</p>
						<input type="checkbox" id="q3r1" name="q4r1"/>
						<label for="q3r1">Affinage</label>
						<input type="checkbox" id="q3r1" name="q4r2"/>
						<label for="q4r2">Découpage</label>
						<input type="checkbox" id="q3r1" name="q4r3"/>
						<label for="q4r3">Salage</label>
						<input type="checkbox" id="q3r1" name="q4r4"/>
						<label for="q4r4">Fermentation</label>
					</div>
					
					<div class="col-md-12 col-lg-6 col-xl-4" style="margin-top: 50px;">
						<p>Quel est le fromage à raclette </br>le plus utilié ?</p>
						<select name="fromages" id="q5">
							<option value="">Sélectionnez une réponse</option>
							<option value="fumé">Fromage à raclette fumé</option>
							<option value="herbes">Fromage à raclette aux herbes</option>
							<option value="nature">Fromage à raclette nature</option>
							<option value="poivre">Fromage à raclette au poivre</option>
						</select>
					</div>
					
					<div class="col-md-12 col-lg-6 col-xl-4" style="margin-top: 50px;">
						<p>Combien de grammes de fromage faut-il par personne pour un bonne raclette ?</p>
						<input type="number" id="q6" name="q6"/>
					</div>
					
					<div class="col-md-12 col-lg-6 col-xl-4" style="margin-top: 50px;">
						<p>Quelle est l'origine de l'emmental ?</p>
						<input type="text" id="q7" name="q7"/>
						<button type="button" class="btn btn-secondary" onclick="question7()">Vérifier</button>
					</div>
					
					<div class="col-md-12 col-lg-6 col-xl-4" style="margin-top: 50px;">
						<p>Le camembert est un fromage à pate</p>
						<button type="button" class="btn btn-secondary" onclick="question8(this)" id="q8b1">Molle</button>
						<button type="button" class="btn btn-secondary" onclick="question8(this)" id="q8b2">Persillée</button>
						<button type="button" class="btn btn-secondary" onclick="question8(this)" id="q8b3">Pressée non cuite</button>
					</div>
					
					<div class="col-md-12 col-lg-6 col-xl-4" style="margin-top: 50px;">
						<p id="q9texte">Remettez dans l'ordre les différentes étapes de la fabrication du fromage</p>
						<button id="q9b1" type="button" class="btn btn-secondary" onclick="question9(this)">Caillage</button>
						<button id="q9b2" type="button" class="btn btn-secondary" onclick="question9(this)">Travail du caillé</button>
						<button id="q9b3" type="button" class="btn btn-secondary" onclick="question9(this)">L’égouttage</button>
						<button id="q9b4" type="button" class="btn btn-secondary" onclick="question9(this)">Le salage</button>
						<button id="q9b5" type="button" class="btn btn-secondary" onclick="question9(this)">L'affinage</button>
					</div>
					
					<div class="col-md-12 col-lg-6 col-xl-4" style="margin-top: 50px;">
						<div id="q10">
							<button id="q10b1" type="button" class="btn btn-secondary" onclick="question10('lancer')">Lancer le jeu</button>
						</div>
						<div>
							<img id="q10i1" src="assets/quizz/1.png" style="width: 30%" />
							<img id="q10i2" src="assets/quizz/2.png" style="width: 30%" />
							<img id="q10i3" src="assets/quizz/3.png" style="width: 30%" />
						</div>
						<div style="margin-top: 10px;">
							<img id="q10i4" src="assets/quizz/4.png" style="width: 30%"/>
							<img id="q10i5" src="assets/quizz/5.png" style="width: 30%" />
							<img id="q10i6" src="assets/quizz/6.png" style="width: 30%"/>
						</div>
					</div>

				</div>
				<input type="submit" class="btn btn-primary" style="margin-top: 50px;"/>
			</form>
		</div>
	
		<?php include('assets/footer.php'); ?>
		
	</body>

</html>