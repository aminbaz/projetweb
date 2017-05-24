<?php
	require_once ('../model/Utilisateur.php');

	
	$password = htmlspecialchars($_POST['password']);
	$password_check = htmlspecialchars($_POST['password_check']);
	$cookieId = $_COOKIE['codeconnexion'];
	

	if ( empty($password) || empty($password_check) ) {
		echo "Vous n'avez pas remplis tous les champs ! Merci de completer les champs manquants ! ";
	}
	elseif ($password != $password_check) {
		echo 'Les mots de passe saisis ne sont pas identiques ! ';
	}
	elseif (strlen($password)<6) {
		echo 'Votre mot de passe doit faire plus de 6 caractères';
	}
	else
	{
		$password = sha1(sha1($password));
		Update_Password($cookieId,$password);
		setcookie("codeconnexion","", time() , "/");
		header("Location: ../Connexion.php");
	}
	
?>