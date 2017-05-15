<?php
function connexion()
{
	try
	{
		$pseudo='postgres';
		$password='postgres';
		$pdo = new PDO('pgsql:host=localhost;dbname=centre',$pseudo,$password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}
	return($pdo);
}
?>