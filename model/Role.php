<?php
	function Get_Role($roleId)
	{
		//require_once('Pdo.php');
		//$bd=connexion();
	   //connecté à la base de donnée 

					$dbname = 'd5q4pq6s1eblro';
					$host = 'ec2-54-247-166-129.eu-west-1.compute.amazonaws.com';
					$dbuser = 'bjeocquzxzeuqh';
					$dbpass = '70e714e41ab10e7ad78a08d680301ffcc762857eace102ae3fcbcba1d150728d';

					try
					{
						$bd = new PDO("pgsql:host=$host;dbname=$dbname",$dbuser,$dbpass);
						$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					}
					catch (PDOException $e)
					{
							echo $e->getMessage();
							die('<br> Echec lors de la connexion à la BD');
					}

		$req = $bd->prepare("SELECT lib_role FROM role WHERE id_role= :roleId");
		$req->bindParam(':roleId',$roleId);
		$req->execute();
		$data=$req->fetch();

		return ($data['lib_role']);
	}
?>