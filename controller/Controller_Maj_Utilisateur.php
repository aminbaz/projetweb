<?php

require_once ("../model/Utilisateur.php");

	$cookieId = $_COOKIE['codeconnexion'];

	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$sexe = htmlspecialchars($_POST['sexe']);
	$datenaiss = htmlspecialchars($_POST['datenaiss']);


	if (empty($nom) || empty($prenom) || empty($sexe) || empty($datenaiss) ) {
		echo "<h3> Vous n'avez pas remplis tous les champs ! Merci de completer les champs manquants ! </h3>";
	}
	else
	{
		Update_User($cookieId,$nom,$prenom,$sexe,$datenaiss);
		header("location: ../Profil.php");
	}

?>