<?php
			
			function Get_User($userId){
				//Fonction permettant de récupérer toutes les informations sur un utilisateur
				//Prends en argument l'identifiant de l'utilisateur
				//Renvoi une ligne sous forme de tableau reprenant toutes les informations

				require_once('pdo.php');
				$bd=connexion();

				$req = $bd->prepare("SELECT * FROM utilisateur WHERE id_utilisateur = :userId");
				$req->bindParam(':userId',$userId);

				$req->execute();
				$data=$req->fetch();

				return $data;
			}
 
			function Check_Password($userPassword,$userMail){
				//Fonction permettant de vérifier si le mot de passe appartient bien au mail qui est unique
				//Prends en argument le mot de passe et le mail de l'utilisateur
				//renvoi un boolean vrai si le mot de passe est bon
				require_once('pdo.php');
				$bd=connexion();
				$req = $bd->prepare("SELECT mdp FROM utilisateur WHERE mail='".$userMail."'");

				$req->execute();
				$data=$req->fetch();

				return ($data['mdp']==$userPassword);
		
			}

			function Get_User_Id($userMail){
				//Fonction permettant de récupérer l'identifiant de l'utilisateur à partir de son mail
				require_once('pdo.php');
				$bd=connexion();


				$req = $bd->prepare("SELECT id_utilisateur FROM utilisateur WHERE mail='".$userMail."'");

				$req->execute();
				$data=$req->fetch();

				return $data["id_utilisateur"];
			}

			function Check_Mail($mail){
				//Fonction permettant de vérifier si le mail entré en argument de la fonction n'est pas déjà présent dans la base de données 
				//vérifier si la fonction renvoi vide lors de son utilisation

				require_once('pdo.php');
				$bd=connexion();

				$req = $bd->prepare("SELECT * FROM utilisateur WHERE mail='".$mail."'");
				
				$req->execute();
				$data=$req->fetch();

				return ($data);
			}

			function Add_Utilisateur($nom,$prenom,$sexe,$datenaiss,$mail,$mdp){
				//Fonction permettant d'ajouter un utilisateur 

				require_once('pdo.php');
				$bd=connexion();

				//Calcul de sont àage afin de le classer dans une catégorie d'âge
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


			function Set_User_Role($userId,$roleId){
				//Procédure permettant de modifier le statue d'un utilisateur
				//Prends en argument l'identifiant de l'utilisateur et l'identifiant du role
				require_once('pdo.php');
				$bd=connexion();

				$req = $bd->prepare("UPDATE Utilisateur SET id_role =:roleId WHERE id_utilisateur=:userId");
				$req->bindParam(':roleId',$roleId);
				$req->bindParam(':userId',$userId);
				
				$req->execute();
			}

			function Get_User_Role($userId){
				//Fonction permettant de récupérer le rôle d'un utilisateur à partir de son identifiant
				
				require_once('pdo.php');
				$bd=connexion();

				$req = $bd->prepare("SELECT id_role FROM utilisateur WHERE id_utilisateur = :userId");
				$req->bindParam(':userId',$userId);
				$req->execute();
				$data=$req->fetch();
				
				return $data["id_role"];
			}

			function Get_User_Categorie($userId){
				//Fonction permettant de récupérer la catégorie d'âge auquel l'utilisateur appartient
				//Prends en argument l'identifiant de l'utilisateur

				require_once('pdo.php');
				$bd=connexion();

				$req = $bd->prepare("SELECT id_categorie FROM utilisateur WHERE id_utilisateur = :userId");
				$req->bindParam(':userId',$userId);
				$req->execute();
				$data=$req->fetch();
				
				return $data["id_categorie"];
			}

			function Get_Activite_Adherent($userId){
				//Fonction permettant de récupérer toutes les données des activités auxquel l'adhérent est inscrit
				//Prends en arguments l'identifiant de l'adhérent
				
				require_once('pdo.php');
				$bd=connexion();

				$req = $bd->prepare("SELECT A.id_activite, A.nom_activite, A.description, A.prix, A.date_activite, A.place FROM activite A, inscrire I, utilisateur U WHERE A.id_activite = I.id_activite and I.id_utilisateur = U.id_utilisateur and U.id_utilisateur = :userId ");
				$req->bindParam(':userId',$userId);
				$req->execute();
				
				return $req;
			}

			function Get_Activite_Animateur($userId){
				//Fonction permettant de récupérer toutes les données des activités auxquel l'animateur est inscrit en tant que encadrant
				//Prends en arguments l'identifiant de l'animateur
				
				require_once('pdo.php');
				$bd=connexion();

				$req = $bd->prepare("SELECT A.id_activite, A.nom_activite, A.description, A.prix, A.date_activite, A.place FROM activite A, encadrer E, utilisateur U WHERE A.id_activite = E.id_activite and E.id_utilisateur = U.id_utilisateur and U.id_utilisateur = :userId ");
				$req->bindParam(':userId',$userId);
				$req->execute();
				
				return $req;
			}


			function Get_Responsable_Activite($idActivite){
				//Fonction permettant de récupérer l'animateur qui encadre l'activité
				//Prends en arguments l'identifiant de l'activité
				//Renvoi toutes les informations sur l'encadrant et l'activité
				
				require_once('pdo.php');
				$bd=connexion();

				$req = $bd->prepare("SELECT * FROM activite A, encadrer E, utilisateur U WHERE A.id_activite = E.id_activite and E.id_utilisateur = U.id_utilisateur and A.id_activite = :idActivite ");
				$req->bindParam(':idActivite',$idActivite);
				$req->execute();
				$data=$req->fetch();
				
				return $data;
			}



			function Update_User($id,$name,$firstName,$gender,$datenaiss){
				//Procédure permettant de modifier les informations d'un utilisateur
				
				require_once('pdo.php');
				$bd=connexion();

				$req = $bd->prepare('UPDATE utilisateur set nom=:name, prenom=:firstname, sexe=:gender, date_naiss=:datenaiss where id_utilisateur=:id');
				$req->bindParam(':id',$id);
				$req->bindParam(':name',$name);
				$req->bindParam(':firstname',$firstName);
				$req->bindParam(':gender',$gender);
				$req->bindParam(':datenaiss',$datenaiss);
				

				$req->execute();
			}

			function Update_Password($id,$mdp){
				//Fonction permettant de modifier le mot de passe d'un utlisateur 
				//Prends en argument l'identifiant de l'utilisateur et son nouveau mot de passe, le mot de passe doit être crypté
				
				require_once('pdo.php');
				$bd=connexion();

				$req = $bd->prepare('UPDATE Utilisateur set mdp=:mdp where id_utilisateur=:id');
				$req->bindParam(':mdp',$mdp);
				$req->bindParam(':id',$id);

				$req->execute();
			}
?>