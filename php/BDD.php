<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Site-CV;charset=utf8', 'root', 'pbzws0kk');
}
catch (Exception $e)
{
		die('Erreur : ' . $e->getMessage());
}
?>
