<?php

	function Add_Message($id,$titre,$texte,$date){

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

				require_once('pdo.php');
				$bd=connexion();

				$req = $bd->prepare("SELECT * FROM message WHERE date_message > current_date - 5 ORDER BY date_message DESC");
				$req->execute();;

				return $req;
			}

	function Get_All_Message($idMessage){
				
				require_once('pdo.php');
				$bd=connexion();

				$req = $bd->prepare("SELECT * FROM message WHERE id_message = :idMessage ");
				$req->bindParam(':idMessage',$idMessage);

				$req->execute();

				return $req;
			}


	function Update_Message($id,$titre,$texte,$date){
				
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

				require_once('pdo.php');
				$bd=connexion();
					
				$req = $bd->prepare('DELETE FROM message WHERE id_message=:id');
				$req->bindParam(':id',$id);

				$req->execute();
				}

?>