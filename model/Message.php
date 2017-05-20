<?php
class Message
{
	public static function Add_Message($id,$titre,$texte,$date)
			//User_Gender x User_Name x User_First_Name x User_Password x User_Mail =>
			//données : $gender string correspondant au sexe de l'utilisateur à ajouter, $name string correspondant au nom de l'utilisateur, $firstName string correspondant au prénom de l'utilisateur, $password string correspondant au mot de passe de l'utilisateur, $mail string correspondant au mail de l'utilisateur
			//résultat : modifie la base de données en ajoutant une entité à la classe "User" en fonction des données entrées
			{
				require_once('Pdo.php');
				$bd=connexion();
				
				$req = $bd->prepare('INSERT INTO message(lib_message, texte_message, id_utilisateur, date_message) VALUES (:titre, :texte,:id,:dateMes)');

				$req->bindParam(':id',$id);
				$req->bindParam(':titre',$titre);
				$req->bindParam(':texte',$texte);
				$req->bindParam(':dateMes',$date);

				$req->execute();
			}

	public static function Get_Message(){
				require_once('Pdo.php');
				$bd=connexion();

				$req = $bd->prepare("SELECT * FROM message WHERE date_message > current_date - 5");

				$req->execute();;

				return $req; //Verifier si null
			}

	public static function Get_All_Message($idMessage){
				require_once('Pdo.php');
				$bd=connexion();

				$req = $bd->prepare("SELECT * FROM message WHERE id_message = :idMessage");
				$req->bindParam(':idMessage',$idMessage);

				$req->execute();

				return $req; //Verifier si null
			}


	public static function Update_Message($id,$titre,$texte,$date){
				require_once('Pdo.php');
				$bd=connexion();

				$req = $bd->prepare('UPDATE message set lib_message=:titre, texte_message=:texte, date_message=:dateMes where id_message=:id');
				$req->bindParam(':id',$id);
				$req->bindParam(':titre',$titre);
				$req->bindParam(':texte',$texte);
				$req->bindParam(':dateMes',$date);
				

				$req->execute();
			}
}
?>