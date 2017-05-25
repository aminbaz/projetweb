<?php

	function Add_Encadrement($idUser,$idActivite){
					
					require_once('pdo.php');
					$bd=connexion();
					
					$req = $bd->prepare('INSERT INTO encadrer(id_utilisateur, id_activite) VALUES (:idUser, :idActivite)');
					$req->bindParam(':idUser',$idUser);
					$req->bindParam(':idActivite',$idActivite);

					$req->execute();
				}

	function Delete_Encadrement($idUser,$idActivite){
					
					require_once('pdo.php');
					$bd=connexion();
					
					$req = $bd->prepare('DELETE FROM encadrer WHERE id_utilisateur=:idUser and id_activite=:idActivite');
					$req->bindParam(':idUser',$idUser);
					$req->bindParam(':idActivite',$idActivite);

					$req->execute();
				}


	function Check_Encadrement($idUser,$idActivite){
					
					require_once('pdo.php');
					$bd=connexion();

					$req = $bd->prepare('SELECT * FROM encadrer WHERE id_utilisateur=:idUser and id_activite=:idActivite');				
					$req->bindParam(':idUser',$idUser);
					$req->bindParam(':idActivite',$idActivite);

					$req->execute();
					$data=$req->fetch();

					return ($data);
				}

	function Check_Deja_Encadre($idActivite)
				{
					
					require_once('pdo.php');
					$bd=connexion();

					$req = $bd->prepare('SELECT id_utilisateur FROM encadrer WHERE id_activite=:idActivite');					
					$req->bindParam(':idActivite',$idActivite);

					$req->execute();
					$data=$req->fetch();

					return ($data);
				}
?>