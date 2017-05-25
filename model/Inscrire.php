<?php

	function Add_Inscription($idUser,$idActivite){
					
					require_once('pdo.php');
					$bd=connexion();
					
					$req = $bd->prepare('INSERT INTO inscrire(id_utilisateur, id_activite) VALUES (:idUser, :idActivite)');
					$req->bindParam(':idUser',$idUser);
					$req->bindParam(':idActivite',$idActivite);

					$req->execute();
				}

	function Delete_Inscription($idUser,$idActivite){
					
					require_once('pdo.php');
					$bd=connexion();

					$req = $bd->prepare('DELETE FROM inscrire WHERE id_utilisateur=:idUser and id_activite=:idActivite');
					$req->bindParam(':idUser',$idUser);
					$req->bindParam(':idActivite',$idActivite);

					$req->execute();
				}


	function Check_Inscription($idUser,$idActivite)
				{
					require_once('pdo.php');
					$bd=connexion();

					$req = $bd->prepare('SELECT * FROM inscrire WHERE id_utilisateur=:idUser and id_activite=:idActivite');				
					$req->bindParam(':idUser',$idUser);
					$req->bindParam(':idActivite',$idActivite);

					$req->execute();
					$data=$req->fetch();

					return ($data);
				}

	function Nombre_Inscription($idActivite)
				{
					require_once('pdo.php');
					$bd=connexion();

					$req = $bd->prepare('SELECT count(*) FROM inscrire WHERE id_activite=:idActivite');
					$req->bindParam(':idActivite',$idActivite);

					$req->execute();
					$data=$req->fetch();

					return ($data);
				}

	function Liste_Inscription($idActivite)
				{
					require_once('pdo.php');
					$bd=connexion();

					$req = $bd->prepare('SELECT U.nom, U.prenom FROM inscrire I, utilisateur U WHERE 
						I.id_utilisateur=U.id_utilisateur
						I.id_activite=:idActivite');
					$req->bindParam(':idActivite',$idActivite);

					$req->execute();
					//$data=$req->fetch();

					return ($req);
				}
?>