<?php
if($bdd = mysqli_connect('mysql.hostinger.fr', 'u742810354_lyo', 'pbzws0kk', 'u742810354_site'))
{
	// Si la connexion a réussi, rien ne se passe.
}
else // Mais si elle rate…
{
	echo 'Erreur'; // On affiche un message d'erreur.
}
?>

<?php
try
{
	$bdd = new PDO('mysql:host=mysql.hostinger.fr;dbname=u742810354_site','u742810354_lyo','pbzws0kk');
}
catch (Exception $e)
{
		die('Erreur : ' . $e->getMessage());
}
?>