<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<meta charset="utf-8">
		<title>site Quet Romain</title>
		<link rel="stylesheet" type="text/css" href="./style.css">
		<link rel="stylesheet" type="text/css" href="./stylecontact.css">
		<script type="text/javascript" src="scripts/jquery-3.1.1.js"></script>
		<script type="text/javascript" src="scripts/script.js"></script>
	</head>
	
	<body>
		<!--audio autoplay="" loop=""><source src="http://gamestrem.rainwave.cc:8000/game.ogg" type="audio/mpeg"></audio-->
		<main>
			<header>
					<nav>
						<ul>
							<li><a href="https://www.facebook.com/romain.quet.9" target="_blank"><img src="./Ressource/ico-facebook.png"></a></li>
							<li><a href="https://twitter.com/Lyorom" target="_blank" ><img src="./Ressource/twitter.png"></a></li>
							<li><a href="https://plus.google.com/u/0/118351837694085572798" target="_blank" ><img src="./Ressource/gplus_icon.png"></a></li>
							<li><a href="https://github.com/quet-romain" target="_blank" ><img src="./Ressource/logo-icon-github.png"></a></li>

						</ul>
					</nav>

						<img class="photoR" src="./Ressource/photo.png" alt="Photo Romain Q">
						<p id="name">Romain Quet</p>

					<h1>Technicien Signalétique</h1>

			</header>

			<section id="contact">
				
				<?php

					include('php/BDD.php');

					if(isset($_POST['nom']) AND isset($_POST['adressemail']) AND isset($_POST['message']) AND !empty($_POST['nom']) AND !empty($_POST['adressemail']) AND !empty($_POST['message'])) {
								
								$name_us = strip_tags($_POST['nom']);
								$address_us = strip_tags($_POST['adressemail']);
								$msg_us = strip_tags($_POST['message']);
								

								$req = $bdd->prepare('INSERT INTO messages(nom, mail, message, date) 
									VALUES(:nom, :mail, :message, :date)');
								
								$req->execute(array(
									'nom' => $name_us, 
									'mail' => $address_us, 
									'message' => $msg_us, 
									'date' => date("Y-m-d H:i:s"),
									));
								
								echo "le message est parti $name_us !</br></br>";
								echo "<a href='index.php'> < Retour</a>";
							}
							else{
								
								echo "Vous n'avez pas renseigné votre nom, votre adresse e-mail ou votre message !</br></br>";
								echo "<a href='index.php'> < Retour</a>";
							}
				?>

			</section>
		</main>
	</body>
</html>