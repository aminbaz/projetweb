<?php
	class Utilisateur
		{
			public static function Check_Password($userPassword,$userMail)
			//User_Password x User_Mail => bool
			//données : $userPassword string correspondant au mot de passe utilisateur, $userMail string correspondant au mail de l'utilisateur
			//résultat : bool vérifiant si le mot de passe entré correspond bien au mail de l'utilisateur
			{
				require_once('Pdo.php');
				$bd=connexion();
			   //connecté à la base de donnée 

				$req = $bd->prepare("SELECT mdp FROM utilisateur WHERE mail='".$userMail."'");

				$req->execute();
				$data=$req->fetch();

				return ($data['User_Password']==$userPassword);
		
			}

			public static function Get_User_Id($userMail)
			//User_Cookie_Code => User_Id
			//données : $userCookieCode string correspondant à un code cookie
			//résultat : vérifie si un code cookie existe dans la base de données, et le cas échéant renvoie un int correspondant à l'id de l'utilisateur auquel appartient le code cookie
			{
				require_once('Pdo.php');
				$bd=connexion();


				$req = $bd->prepare("SELECT id_utilisateur FROM utilisateur WHERE mail='".$$userMail."'");

				$req->execute();
				$data=$req->fetch();

				return $data["id_utilisateur"]; //Verifier si null
			}

			public static function Check_Mail($mail)
			//User_Mail => [User]
			//données : string correspondant au mail à vérifier
			//résultat : renvoie un booleen pour savoir si le mail est déja utilisé
			{
				require_once('Pdo.php');
				$bd=connexion();

				$req = $bd->prepare("SELECT * FROM utilisateur WHERE mail='".$mail."'");
				
				$req->execute();
				$data=$req->fetch();

				return ($data);
			}

			public static function Add_Utilisateur($nom,$prenom,$sexe,$datenaiss,$mail)
			//User_Gender x User_Name x User_First_Name x User_Password x User_Mail =>
			//données : $gender string correspondant au sexe de l'utilisateur à ajouter, $name string correspondant au nom de l'utilisateur, $firstName string correspondant au prénom de l'utilisateur, $password string correspondant au mot de passe de l'utilisateur, $mail string correspondant au mail de l'utilisateur
			//résultat : modifie la base de données en ajoutant une entité à la classe "User" en fonction des données entrées
			{
				require_once('Pdo.php');
				$bd=connexion();

				$req = $bd->prepare('INSERT INTO utilisateur(nom, prenom, sexe, date_naiss, mail) VALUES (:nom, :prenom,:sexe,:datenaiss,:mail)');
				$req->bindParam(':nom',$nom);
				$req->bindParam(':prenom',$prenom);
				$req->bindParam(':sexe',$sexe);
				$req->bindParam(':datenaiss',$datenaiss);
				$req->bindParam(':mail',$mail);

				$req->execute();
			}
		}
?>