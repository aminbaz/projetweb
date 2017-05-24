<?php
	require_once ('model/Message.php');

	$titre = htmlspecialchars($_POST['titre']);
	$texte = htmlspecialchars($_POST['texte']);
	$date = date("Y-M-d");
	$id = $_COOKIE['codeconnexion'];

	if (empty($titre) || empty($texte)) {
		$messageErreur = "Vous n'avez pas remplis tous les champs ! Merci de completer les champs manquants ! ";
		
		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	else
	{
		Add_Message($id,$titre,$texte,$date);
	}
	header("Location: Accueil.php");
?>