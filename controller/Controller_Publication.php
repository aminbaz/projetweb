<?php
	require_once ('model/Message.php');

	$titre = htmlspecialchars($_POST['titre']);
	$texte = htmlspecialchars($_POST['texte']);
	$date = date("Y-M-d");
	$id = $_COOKIE['codeconnexion'];

	if (empty($titre) || empty($texte)) {
		echo "<h3> Vous n'avez pas remplis tous les champs ! Merci de completer les champs manquants ! </h3>";
	}
	else
	{
		Add_Message($id,$titre,$texte,$date);
	}
	header("Location: Accueil.php");
?> 