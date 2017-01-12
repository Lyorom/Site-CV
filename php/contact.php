<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" />
	<title>site Quet Romain</title>
	<!--  minified CSS materialize -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
<!--	<link rel="stylesheet" type="text/css" href="../css/style.css">-->
</head>
<body>
			<section id="contact">

						<?php

						$nom = $_POST['nom'];
						$mail = $_POST['mail'];
						$message = $_POST['message'];
						// on se connecte à MySQL
						include ('BDD.php');



//						$req = $bdd->prepare('INSERT INTO messages(nom, mail, message) VALUES(:nom, :mail, :message)');
//
//						$req->execute(array(
//
//							'nom' => $nom,
//							'mail' => $mail,
//							'message' => $message,
//							));
//
//						// On récupère tout le contenu de la table
//						$reponse = $bdd->query('SELECT * FROM messages');
//						// On affiche chaque entrée une à une
//						while ($donnees = $reponse->fetch())
//						{
//							echo '<br>';
//							echo $donnees['nom'];
//							echo '<br>';
//							echo $donnees['mail'];
//							echo '<br>';
//							echo $donnees['message'];
//						}
//
//						$reponse->closeCursor(); // Termine le traitement de la requête
//
//						?>
				<a href="../" class="brand-logo">Romain Quet</a>
			</section>
	</body>

</html>
