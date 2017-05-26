<?php

	function Add_Encadrement($idUser,$idActivite){
				//Fonction permetant de lier une activité avec un animateur de sorte à le mentionner comme encadrant de cet activité
				//Identifiant de l'animateur suivi de l'activité qu'il encadrera
					
					require_once('pdo.php');
					$bd=connexion();
					
					$req = $bd->prepare('INSERT INTO encadrer(id_utilisateur, id_activite) VALUES (:idUser, :idActivite)');
					$req->bindParam(':idUser',$idUser);
					$req->bindParam(':idActivite',$idActivite);

					$req->execute();
				}

	function Delete_Encadrement($idUser,$idActivite){
				//Fonction permetant de supprimer le lien entre un animateur et une activité 
				//Identifiant de l'animateur suivi de l'activité qu'il n'encadrera plus
					
					require_once('pdo.php');
					$bd=connexion();
					
					$req = $bd->prepare('DELETE FROM encadrer WHERE id_utilisateur=:idUser and id_activite=:idActivite');
					$req->bindParam(':idUser',$idUser);
					$req->bindParam(':idActivite',$idActivite);

					$req->execute();
				}
 

	function Check_Encadrement($idUser,$idActivite){
					//Fonction permetant de vérifier si une activité ou un animateur encadre une activité
					//Identifiant de l'animateur suivi de l'activité qu'il encadrera
					//Renvoi le tuple présent dans la base de données si la requete retourne vide (non présence de lien)

					require_once('pdo.php');
					$bd=connexion();

					$req = $bd->prepare('SELECT * FROM encadrer WHERE id_utilisateur=:idUser and id_activite=:idActivite');				
					$req->bindParam(':idUser',$idUser);
					$req->bindParam(':idActivite',$idActivite);

					$req->execute();
					$data=$req->fetch();

					return ($data);
				}

	function Check_Deja_Encadre($idActivite){
					//Fonction permetant de vérifier si une activité possède un encadrant
					//Identifiant de l'activité à vérifier
					//Renvoi le tuple présent dans la base de données si la requete retourne vide (non présence d'encadrant)
					
					require_once('pdo.php');
					$bd=connexion();

					$req = $bd->prepare('SELECT id_utilisateur FROM encadrer WHERE id_activite=:idActivite');					
					$req->bindParam(':idActivite',$idActivite);

					$req->execute();
					$data=$req->fetch();

					return ($data);
				}
?>