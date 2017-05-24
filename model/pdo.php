<?php
function connexion()
{
	try
	{
		$pseudo='bjeocquzxzeuqh';
		$password='70e714e41ab10e7ad78a08d680301ffcc762857eace102ae3fcbcba1d150728d';
		$pdo = new PDO('pgsql:host=ec2-54-247-166-129.eu-west-1.compute.amazonaws.com;dbname=d5q4pq6s1eblro',$pseudo,$password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}
	return($pdo);
}
?>