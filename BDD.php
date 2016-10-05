<?php

try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=ms_site;charset=utf8', 'root', 'coda');
					}
					catch(Exception $e)
					{
					        die('Erreur : '.$e->getMessage());
					} 
 ?>