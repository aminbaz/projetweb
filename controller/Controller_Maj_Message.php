<?php

require_once ("../model/Message.php");

	$titre = htmlspecialchars($_POST['titre']);
	$dateMes = htmlspecialchars($_POST['dateMes']);
	$texte = htmlspecialchars($_POST['texte']);
	$idMessage = htmlspecialchars($_POST['id_message']);


	if (empty($titre) || empty($dateMes) || empty($texte)) {
		$messageErreur = "Vous n'avez pas remplis tous les champs ! Merci de completer les champs manquants ! ";
		
		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	else
	{
		Message::Update_Message($idMessage,$titre,$texte,$dateMes);
		header("location: ../Accueil.php");
	}

?>