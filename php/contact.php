<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<meta charset="utf-8">
		<title>site Quet Romain</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	<body>
		<!--audio autoplay="" loop=""><source src="http://gamestrem.rainwave.cc:8000/game.ogg" type="audio/mpeg"></audio-->
		<main>
			<header>

						<img class="photoR" src="../Ressource/photo.png" alt="Photo Romain Q">
						<p id="name">Romain Quet</p>

			</header>

			<section id="contact">

						<?php
						$nom = $_POST['nom'];
						$mail = $_POST['mail'];
						$message = $_POST['message'];

						// on se connecte à MySQL
						include ('BDD.php');



						$req = $bdd->prepare('INSERT INTO messages(nom, mail, message) VALUES(:nom, :mail, :message)');

						$req->execute(array(

							'nom' => $nom,
							'mail' => $mail,
							'message' => $message,
							));

						// On récupère tout le contenu de la table
						$reponse = $bdd->query('SELECT * FROM messages');
						// On affiche chaque entrée une à une
						while ($donnees = $reponse->fetch())
						{
							echo '<br>';
							echo $donnees['nom'];
							echo '<br>';
							echo $donnees['mail'];
							echo '<br>';
							echo $donnees['message'];
						}

						$reponse->closeCursor(); // Termine le traitement de la requête

						?>
			</section>

			<footer>
				<nav>
					<ul>
						<li><a href="https://www.facebook.com/romain.quet.9" target="_blank"><img src="../Ressource/ico-facebook.png"></a></li>
						<li><a href="https://twitter.com/Lyorom" target="_blank" ><img src="../Ressource/twitter.png"></a></li>
						<li><a href="https://plus.google.com/u/0/118351837694085572798" target="_blank" ><img src="../Ressource/gplus_icon.png"></a></li>
						<li><a href="https://github.com/quet-romain" target="_blank" ><img src="../Ressource/logo-icon-github.png"></a></li>

					</ul>
				</nav>
			</footer>
		</main>
	</body>

</html>
