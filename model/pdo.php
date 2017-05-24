<?php
function connexion()
{
	$dbname = 'd5q4pq6s1eblro';
	$host = 'ec2-54-247-166-129.eu-west-1.compute.amazonaws.com';
	$dbuser = 'bjeocquzxzeuqh';
	$dbpass = '70e714e41ab10e7ad78a08d680301ffcc762857eace102ae3fcbcba1d150728d';

	try
	{
		$pdo = new PDO('pgsql:host='.$host.';dbname='.$dbname,$dbuser,$dbpass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e)
	{
			die('Erreur : ' . $e->getMessage());
	}
	return($pdo);
}
?>