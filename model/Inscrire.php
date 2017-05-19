<?php
class Inscrire
{
	
	public static function Add_Inscription($idUser,$idActivite)
				//User_Gender x User_Name x User_First_Name x User_Password x User_Mail =>
				//données : $gender string correspondant au sexe de l'utilisateur à ajouter, $name string correspondant au nom de l'utilisateur, $firstName string correspondant au prénom de l'utilisateur, $password string correspondant au mot de passe de l'utilisateur, $mail string correspondant au mail de l'utilisateur
				//résultat : modifie la base de données en ajoutant une entité à la classe "User" en fonction des données entrées
				{
					require_once('Pdo.php');
					$bd=connexion();
					
					$req = $bd->prepare('INSERT INTO inscrire(id_utilisateur, id_activite) VALUES (:idUser, :idActivite)');
					$req->bindParam(':idUser',$idUser);
					$req->bindParam(':idActivite',$idActivite);

					$req->execute();
				}			
}
?>