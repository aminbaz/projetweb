<?php

	function Add_Inscription($idUser,$idActivite)
				//User_Gender x User_Name x User_First_Name x User_Password x User_Mail =>
				//données : $gender string correspondant au sexe de l'utilisateur à ajouter, $name string correspondant au nom de l'utilisateur, $firstName string correspondant au prénom de l'utilisateur, $password string correspondant au mot de passe de l'utilisateur, $mail string correspondant au mail de l'utilisateur
				//résultat : modifie la base de données en ajoutant une entité à la classe "User" en fonction des données entrées
				{
					//require_once('Pdo.php');
					//$bd=connexion();

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
					
					$req = $bd->prepare('INSERT INTO inscrire(id_utilisateur, id_activite) VALUES (:idUser, :idActivite)');
					$req->bindParam(':idUser',$idUser);
					$req->bindParam(':idActivite',$idActivite);

					$req->execute();
				}

	function Delete_Inscription($idUser,$idActivite)
				//User_Gender x User_Name x User_First_Name x User_Password x User_Mail =>
				//données : $gender string correspondant au sexe de l'utilisateur à ajouter, $name string correspondant au nom de l'utilisateur, $firstName string correspondant au prénom de l'utilisateur, $password string correspondant au mot de passe de l'utilisateur, $mail string correspondant au mail de l'utilisateur
				//résultat : modifie la base de données en ajoutant une entité à la classe "User" en fonction des données entrées
				{
					//require_once('Pdo.php');
					//$bd=connexion();

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
					
					$req = $bd->prepare('DELETE FROM inscrire WHERE id_utilisateur=:idUser and id_activite=:idActivite');

					$req->bindParam(':idUser',$idUser);
					$req->bindParam(':idActivite',$idActivite);

					$req->execute();
				}


	function Check_Inscription($idUser,$idActivite)
				{
					//require_once('Pdo.php');
					//$bd=connexion();

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

					$req = $bd->prepare('SELECT * FROM inscrire WHERE id_utilisateur=:idUser and id_activite=:idActivite');
					
					$req->bindParam(':idUser',$idUser);
					$req->bindParam(':idActivite',$idActivite);

					$req->execute();
					$data=$req->fetch();

					return ($data);
				}

	function Nombre_Inscription($idActivite)
				{
					//require_once('Pdo.php');
					//$bd=connexion();

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

					$req = $bd->prepare('SELECT count(*) FROM inscrire WHERE id_activite=:idActivite');
					$req->bindParam(':idActivite',$idActivite);

					$req->execute();
					//$data=$req->fetch();

					return ($req);
				}
?>