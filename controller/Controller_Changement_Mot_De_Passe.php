<?php
	require_once ('../model/Utilisateur.php');


	
	
	
	$password = htmlspecialchars($_POST['password']);
	$password_check = htmlspecialchars($_POST['password_check']);
	$cookieId = $_COOKIE['codeconnexion'];
	

	


	if ( empty($password) || empty($password_check) ) {
		$messageErreur = "Vous n'avez pas remplis tous les champs ! Merci de completer les champs manquants ! ";
		
		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	elseif ($password != $password_check) {
		$messageErreur = 'Les mots de passe saisis ne sont pas identiques ! ';
		
		header("Location: ../Erreur.php?erreur=".$messageErreur);
	
	}
	elseif (strlen($password)<6) {
		$messageErreur = 'Votre mot de passe doit faire plus de 6 caractères';
		
		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	else
	{
		$password = sha1(sha1($password));
		Update_Password($cookieId,$password);
		setcookie("codeconnexion","", time() , "/");
		header("Location: ../Connexion.php");
	}
	
?>