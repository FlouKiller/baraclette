function question7(){
	if (document.getElementById("q7").value == "Suisse") {
		result = 'Bravo !';
	  } else {
		result = 'Faux';
	  }
	document.getElementById("q7").value = result;
	document.getElementById("q7").disabled = true;
  
}

function question8(bouton){
	if (bouton.textContent == "Molle") {
		bouton.classList.add("btn-success");
	  } else {
		bouton.classList.add("btn-danger");
	  }
	  
	  document.getElementById("q8b1").disabled = true;
	  document.getElementById("q8b2").disabled = true;
	  document.getElementById("q8b3").disabled = true;
}

let resultat = "";
function question9(bouton){
	resultat += bouton.textContent;
	bouton.disabled = true;
	if (resultat == "CaillageTravail du cailléL’égouttageLe salageL'affinage"){
		document.getElementById("q9b1").classList.add("btn-success");
		document.getElementById("q9b2").classList.add("btn-success");
		document.getElementById("q9b3").classList.add("btn-success");
		document.getElementById("q9b4").classList.add("btn-success");
		document.getElementById("q9b5").classList.add("btn-success");
	}
}


function question10(fromage){

	if (fromage == "lancer"){
		document.getElementById("q10").innerHTML = "<p>Cliquez sur le Goudat</p>";
		//Cacher toutes les images avec une boucle
		for (let i = 1; i <= 6; i++){
			document.getElementById("q10i"+i).setAttribute("src", "assets/quizz/blanc.png");
		}
		//rendre les images cliquables avec une boucle
		for (let i = 1; i <= 6; i++){
			document.getElementById("q10i"+i).setAttribute("onclick", "question10("+i+")");
		}
		return;
	}
	if (fromage == "6"){
		alert("Bravo !");
		document.getElementById("q10").innerHTML = "<button id='q10b1' type='button' class='btn btn-secondary btn-success' onclick='question10('lancer')' disabled>Lancer le jeu</button>";
	} else {
		alert("Perdu !");
		document.getElementById("q10").innerHTML = "<button id='q10b1' type='button' class='btn btn-secondary btn-danger' onclick='question10('lancer')' disabled>Lancer le jeu</button>";
	}

	//réafficher les images et les rendre non cliquables avec une boucle
	for (let i = 1; i <= 6; i++){
		document.getElementById("q10i"+i).setAttribute("src", "assets/quizz/"+i+".png");
		document.getElementById("q10i"+i).removeAttribute("onclick");
	}
}