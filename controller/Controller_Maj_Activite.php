<?php

require_once ("../model/Activite.php");

	$nom = htmlspecialchars($_POST['nom']);
	$dateAct = htmlspecialchars($_POST['dateAct']);
	$description = htmlspecialchars($_POST['description']);
	$prix = htmlspecialchars($_POST['prix']);
	$idActivite = htmlspecialchars($_POST['id_activite']);


	if (empty($nom) || empty($dateAct) || empty($description) || empty($prix) ) {
		$messageErreur = "Vous n'avez pas remplis tous les champs ! Merci de completer les champs manquants ! ";
		
		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	else
	{
		Activite::Update_Activite($idActivite,$nom,$dateAct,$description,$prix);
		header("location: ../Activite.php");
	}

?>