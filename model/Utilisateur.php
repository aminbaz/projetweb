<?php
	require_once('Pdo.php');
	$bd=connexion();
			function Get_User($userId){
				
				

				$req = $bd->prepare("SELECT * FROM utilisateur WHERE id_utilisateur = :userId");
				$req->bindParam(':userId',$userId);

				$req->execute();
				$data=$req->fetch();

				return $data; //Verifier si null
			}

			function Check_Password($userPassword,$userMail)
			//User_Password x User_Mail => bool
			//données : $userPassword string correspondant au mot de passe utilisateur, $userMail string correspondant au mail de l'utilisateur
			//résultat : bool vérifiant si le mot de passe entré correspond bien au mail de l'utilisateur
			{
			
				
			   //connecté à la base de donnée 

				$req = $bd->prepare("SELECT mdp FROM utilisateur WHERE mail='".$userMail."'");

				$req->execute();
				$data=$req->fetch();

				return ($data['mdp']==$userPassword);
		
			}

			function Get_User_Id($userMail)
			//User_Cookie_Code => User_Id
			//données : $userCookieCode string correspondant à un code cookie
			//résultat : vérifie si un code cookie existe dans la base de données, et le cas échéant renvoie un int correspondant à l'id de l'utilisateur auquel appartient le code cookie
			{
				


				$req = $bd->prepare("SELECT id_utilisateur FROM utilisateur WHERE mail='".$userMail."'");

				$req->execute();
				$data=$req->fetch();

				return $data["id_utilisateur"]; //Verifier si null
			}

			function Check_Mail($mail)
			//User_Mail => [User]
			//données : string correspondant au mail à vérifier
			//résultat : renvoie un booleen pour savoir si le mail est déja utilisé
			{
				

				$req = $bd->prepare("SELECT * FROM utilisateur WHERE mail='".$mail."'");
				
				$req->execute();
				$data=$req->fetch();

				return ($data);
			}

			function Add_Utilisateur($nom,$prenom,$sexe,$datenaiss,$mail,$mdp)
			//User_Gender x User_Name x User_First_Name x User_Password x User_Mail =>
			//données : $gender string correspondant au sexe de l'utilisateur à ajouter, $name string correspondant au nom de l'utilisateur, $firstName string correspondant au prénom de l'utilisateur, $password string correspondant au mot de passe de l'utilisateur, $mail string correspondant au mail de l'utilisateur
			//résultat : modifie la base de données en ajoutant une entité à la classe "User" en fonction des données entrées
			{
				
				$age = (time() - strtotime($datenaiss)) / 3600 / 24 / 365;
				if ($age < 11) {
					$categorie = 1;
				}
				elseif ($age < 16) {
					$categorie = 2;
				}
				elseif ($age < 21) {
					$categorie = 3;
				}
				else{
					$categorie = 4;
				}
				$req = $bd->prepare('INSERT INTO utilisateur(nom, prenom, sexe, date_naiss, mail, mdp, id_categorie, id_role) VALUES (:nom, :prenom,:sexe,:datenaiss,:mail, :mdp, :categorie,1)');
				$req->bindParam(':nom',$nom);
				$req->bindParam(':prenom',$prenom);
				$req->bindParam(':sexe',$sexe);
				$req->bindParam(':datenaiss',$datenaiss);
				$req->bindParam(':mail',$mail);
				$req->bindParam(':mdp',$mdp);
				$req->bindParam(':categorie',$categorie);

				$req->execute();
			}

			function Set_User_Role($userId,$roleId)
			{
				

				$req = $bd->prepare("UPDATE Utilisateur SET id_role =:roleId WHERE id_utilisateur=:userId");
				$req->bindParam(':roleId',$roleId);
				$req->bindParam(':userId',$userId);
				
				$req->execute();
			}

			function Get_User_Role($userId)
			//User_Id => Role_Id
			//données : $userId int correspondant à l'identifiant de l'utilisateur
			//résultat : int correspondant à l'id du rôle de l'utilisateur
			{
			

				$req = $bd->prepare("SELECT id_role FROM utilisateur WHERE id_utilisateur = :userId");
				$req->bindParam(':userId',$userId);
				$req->execute();
				$data=$req->fetch();
				
				return $data["id_role"];
			}

			function Get_User_Categorie($userId)
			//User_Id => Role_Id
			//données : $userId int correspondant à l'identifiant de l'utilisateur
			//résultat : int correspondant à l'id du rôle de l'utilisateur
			{
				

				$req = $bd->prepare("SELECT id_categorie FROM utilisateur WHERE id_utilisateur = :userId");
				$req->bindParam(':userId',$userId);
				$req->execute();
				$data=$req->fetch();
				
				return $data["id_categorie"];
			}

			function Get_Activite_Adherent($userId)
			//User_Id => Role_Id
			//données : $userId int correspondant à l'identifiant de l'utilisateur
			//résultat : int correspondant à l'id du rôle de l'utilisateur
			{
				

				$req = $bd->prepare("SELECT A.id_activite, A.nom_activite, A.description, A.prix, A.date_activite FROM activite A, inscrire I, utilisateur U WHERE A.id_activite = I.id_activite and I.id_utilisateur = U.id_utilisateur and U.id_utilisateur = :userId ");
				$req->bindParam(':userId',$userId);
				$req->execute();
				
				return $req;
			}

			function Get_Activite_Animateur($userId)
			//User_Id => Role_Id
			//données : $userId int correspondant à l'identifiant de l'utilisateur
			//résultat : int correspondant à l'id du rôle de l'utilisateur
			{
				

				$req = $bd->prepare("SELECT A.id_activite, A.nom_activite, A.description, A.prix, A.date_activite FROM activite A, encadrer E, utilisateur U WHERE A.id_activite = E.id_activite and E.id_utilisateur = U.id_utilisateur and U.id_utilisateur = :userId ");
				$req->bindParam(':userId',$userId);
				$req->execute();
				
				return $req;
			}


			function Get_Responsable_Activite($idActivite)
			//User_Id => Role_Id
			//données : $userId int correspondant à l'identifiant de l'utilisateur
			//résultat : int correspondant à l'id du rôle de l'utilisateur
			{
				

				$req = $bd->prepare("SELECT * FROM activite A, encadrer E, utilisateur U WHERE A.id_activite = E.id_activite and E.id_utilisateur = U.id_utilisateur and A.id_activite = :idActivite ");
				$req->bindParam(':idActivite',$idActivite);
				$req->execute();
				$data=$req->fetch();
				
				return $data;
			}



			function Update_User($id,$name,$firstName,$gender,$datenaiss){
				

				$req = $bd->prepare('UPDATE utilisateur set nom=:name, prenom=:firstname, sexe=:gender, date_naiss=:datenaiss where id_utilisateur=:id');
				$req->bindParam(':id',$id);
				$req->bindParam(':name',$name);
				$req->bindParam(':firstname',$firstName);
				$req->bindParam(':gender',$gender);
				$req->bindParam(':datenaiss',$datenaiss);
				

				$req->execute();
			}

			function Update_Password($id,$mdp){
			

				$req = $bd->prepare('UPDATE Utilisateur set mdp=:mdp where id_utilisateur=:id');
				$req->bindParam(':mdp',$mdp);
				$req->bindParam(':id',$id);

				$req->execute();
			}
?>