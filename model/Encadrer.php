<?php

	function Add_Encadrement($idUser,$idActivite)
				//User_Gender x User_Name x User_First_Name x User_Password x User_Mail =>
				//données : $gender string correspondant au sexe de l'utilisateur à ajouter, $name string correspondant au nom de l'utilisateur, $firstName string correspondant au prénom de l'utilisateur, $password string correspondant au mot de passe de l'utilisateur, $mail string correspondant au mail de l'utilisateur
				//résultat : modifie la base de données en ajoutant une entité à la classe "User" en fonction des données entrées
				{
					require_once('Pdo.php');
					$bd=connexion();
					
					$req = $bd->prepare('INSERT INTO encadrer(id_utilisateur, id_activite) VALUES (:idUser, :idActivite)');
					$req->bindParam(':idUser',$idUser);
					$req->bindParam(':idActivite',$idActivite);

					$req->execute();
				}

	function Delete_Encadrement($idUser,$idActivite)
				//User_Gender x User_Name x User_First_Name x User_Password x User_Mail =>
				//données : $gender string correspondant au sexe de l'utilisateur à ajouter, $name string correspondant au nom de l'utilisateur, $firstName string correspondant au prénom de l'utilisateur, $password string correspondant au mot de passe de l'utilisateur, $mail string correspondant au mail de l'utilisateur
				//résultat : modifie la base de données en ajoutant une entité à la classe "User" en fonction des données entrées
				{
					require_once('Pdo.php');
					$bd=connexion();
					
					$req = $bd->prepare('DELETE FROM encadrer WHERE id_utilisateur=:idUser and id_activite=:idActivite');

					$req->bindParam(':idUser',$idUser);
					$req->bindParam(':idActivite',$idActivite);

					$req->execute();
				}


	function Check_Encadrement($idUser,$idActivite)
				{
					require_once('Pdo.php');
					$bd=connexion();

					$req = $bd->prepare('SELECT * FROM encadrer WHERE id_utilisateur=:idUser and id_activite=:idActivite');
					
					$req->bindParam(':idUser',$idUser);
					$req->bindParam(':idActivite',$idActivite);

					$req->execute();
					$data=$req->fetch();

					return ($data);
				}
?>