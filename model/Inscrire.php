<?php

	function Add_Inscription($idUser,$idActivite){
				//Fonction permetant de lier une activité avec un adhérent de sorte à le mentionner comme inscrit pour cette activité
				//Identifiant de l'adhérent suivi de l'activité
					
					require_once('pdo.php');
					$bd=connexion();
					
					$req = $bd->prepare('INSERT INTO inscrire(id_utilisateur, id_activite) VALUES (:idUser, :idActivite)');
					$req->bindParam(':idUser',$idUser);
					$req->bindParam(':idActivite',$idActivite);

					$req->execute();
				}

	function Delete_Inscription($idUser,$idActivite){
				//Fonction permetant de supprimer le lien entre un adhérent et une activité 
				//Identifiant de l'adhérent suivi de l'activité

					require_once('pdo.php');
					$bd=connexion();

					$req = $bd->prepare('DELETE FROM inscrire WHERE id_utilisateur=:idUser and id_activite=:idActivite');
					$req->bindParam(':idUser',$idUser);
					$req->bindParam(':idActivite',$idActivite);

					$req->execute();
 				}


	function Check_Inscription($idUser,$idActivite){
					//Fonction permetant de vérifier si un adhérent est inscrit à une activité
					//Identifiant de l'adhérent suivi de l'identifiant de l'activité 
					//Renvoi le tuple présent dans la base de données si la requete retourne vide (non présence de lien)
					require_once('pdo.php');
					$bd=connexion();

					$req = $bd->prepare('SELECT * FROM inscrire WHERE id_utilisateur=:idUser and id_activite=:idActivite');				
					$req->bindParam(':idUser',$idUser);
					$req->bindParam(':idActivite',$idActivite);

					$req->execute();
					$data=$req->fetch();

					return ($data);
				}

	function Nombre_Inscription($idActivite){
					//Fonction permetant de compter le nombre d'inscrit à une activité
					//Identifiant de l'activité à analyser
					//Renvoi le nombre sous forme de table du nombre d'inscrit
					require_once('pdo.php');
					$bd=connexion();

					$req = $bd->prepare('SELECT count(*) FROM inscrire WHERE id_activite=:idActivite');
					$req->bindParam(':idActivite',$idActivite);

					$req->execute();
					$data=$req->fetch();

					return ($data);
				}

	function Liste_Inscription($idActivite){
					//Fonction permettant de listé tous les inscrits
					//Identifiant de l'activité
					//Renvoi les noms et prénoms de tous les adhérent inscrit à cette activité
					require_once('pdo.php');
					$bd=connexion();

					$req = $bd->prepare('SELECT U.nom, U.prenom FROM inscrire I, utilisateur U WHERE 
						I.id_utilisateur=U.id_utilisateur
						and I.id_activite=:idActivite ORDER BY U.nom');
					$req->bindParam(':idActivite',$idActivite);

					$req->execute();

					return ($req);
				}
?>