<?php
	function Get_Activite($idActivite){
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

				$req = $bd->prepare("SELECT * FROM activite WHERE id_activite = :idActivite");
				$req->bindParam(':idActivite',$idActivite);

				$req->execute();

				return $req; //Verifier si null
			}


	function Get_Activite_Type($id_type){
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

				$req = $bd->prepare("SELECT * FROM activite WHERE id_type = :id_type");
				$req->bindParam(':id_type',$id_type);

				$req->execute();

				return $req; //Verifier si null
			}

	
	
	function Add_Activite($nom,$date,$description,$prix,$type,$cat)
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
 
					if ($type == "sport") {
						$codetype = 1;
					}
					elseif ($type == "culturel") {
						$codetype = 2;
					}
					elseif ($type == "scolaire") {
						$codetype = 3;
					}
					elseif ($type == "voyage") {
						$codetype = 4;
					}
					else{
						$codetype = 5;
					}


					if ($cat == "-10") {
						$categorie = 1;
					}
					elseif ($cat == "-15") {
						$categorie = 2;
					}
					elseif ($cat == "-20") {
						$categorie = 3;
					}
					elseif ($cat == "+21"){
						$categorie = 4;
					}
					else{
						$categorie = 5;
					}

					if (empty($prix)) {
						$codeprix = 0;
					}
					else{
						$codeprix = $prix;
					}
					
					$req = $bd->prepare('INSERT INTO activite(nom_activite, description, prix, id_type, date_activite, id_categorie) VALUES (:nom, :description,:codeprix,:codetype,:dateActivite,:categorie)');
					$req->bindParam(':nom',$nom);
					$req->bindParam(':dateActivite',$date);
					$req->bindParam(':description',$description);
					$req->bindParam(':codeprix',$codeprix);
					$req->bindParam(':codetype',$codetype);
					$req->bindParam(':categorie',$categorie);

					$req->execute();
				}	


	function Update_Activite($id,$nom,$date,$description,$prix)
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

					$req = $bd->prepare('UPDATE activite set nom_activite=:nom, description=:description, prix=:prix, date_activite=:dateAct where id_activite=:id');
					$req->bindParam(':id',$id);
					$req->bindParam(':nom',$nom);
					$req->bindParam(':dateAct',$date);
					$req->bindParam(':description',$description);
					$req->bindParam(':prix',$prix);
					

					$req->execute();
				}	

	function Delete_Activite($id)
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
					
					$req = $bd->prepare('DELETE FROM activite WHERE id_activite=:id');

					$req->bindParam(':id',$id);

					$req->execute();
				}	

?>