<?php
	require_once ('../model/Utilisateur.php');

	
	$password = htmlspecialchars($_POST['password']);
	$password_check = htmlspecialchars($_POST['password_check']);
	$cookieId = $_COOKIE['codeconnexion'];
	

	if ( empty($password) || empty($password_check) ) {
		echo "<h3>Vous n'avez pas remplis tous les champs ! Merci de completer les champs manquants ! </h3>";
	}
	elseif ($password != $password_check) {
		echo '<h3>Les mots de passe saisis ne sont pas identiques ! </h3>';
	}
	elseif (strlen($password)<6) {
		echo '<h3>Votre mot de passe doit faire plus de 6 caractères </h3>';
	}
	else
	{
		$password = sha1(sha1($password));
		Update_Password($cookieId,$password);
		setcookie("codeconnexion","", time() , "/");
		header("Location: ../Connexion.php");
	}
	
?>