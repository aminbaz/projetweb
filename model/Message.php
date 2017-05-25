<?php

	function Add_Message($id,$titre,$texte,$date){
				//Fonction permettant de créer un message
				//Identifiant de l'administrateur ayant écrit ce message suivi des éléments de ce message

				require_once('pdo.php');
				$bd=connexion();
				
				$req = $bd->prepare('INSERT INTO message(lib_message, texte_message, id_utilisateur, date_message) VALUES (:titre, :texte,:id,:dateMes)');
				$req->bindParam(':id',$id);
				$req->bindParam(':titre',$titre);
				$req->bindParam(':texte',$texte);
				$req->bindParam(':dateMes',$date);

				$req->execute();
			}

	function Get_Message(){
				//Fonction permettant de récupérer tous les messages présent dans la base de données datant de 5 jour au plus
				//Renvoi tout les tuple présent dans la table message datant de moins de 5 jours

				require_once('pdo.php');
				$bd=connexion();

				$req = $bd->prepare("SELECT * FROM message WHERE date_message < current_date + 5 ORDER BY date_message DESC");
				$req->execute();;

				return $req;
			}


	function Update_Message($id,$titre,$texte,$date){
				//Fonction permettant de modifier un message on lui réacfectant toutes les caractéristiques
				
				require_once('pdo.php');
				$bd=connexion();

				$req = $bd->prepare('UPDATE message set lib_message=:titre, texte_message=:texte, date_message=:dateMes where id_message=:id');
				$req->bindParam(':id',$id);
				$req->bindParam(':titre',$titre);
				$req->bindParam(':texte',$texte);
				$req->bindParam(':dateMes',$date);
				
				$req->execute();
			}

	function Delete_Message($id){
				//Fonction permettant de supprimer un message à partir de son identifiant

				require_once('pdo.php');
				$bd=connexion();
					
				$req = $bd->prepare('DELETE FROM message WHERE id_message=:id');
				$req->bindParam(':id',$id);

				$req->execute();
				}

?>