<?php

require_once ("../model/Activite.php");

	$nom = htmlspecialchars($_POST['nom']);
	$dateAct = htmlspecialchars($_POST['dateAct']);
	$description = htmlspecialchars($_POST['description']);
	$prix = htmlspecialchars($_POST['prix']);
	$idActivite = htmlspecialchars($_POST['id_activite']);


	if (empty($nom) || empty($dateAct) || empty($description) || empty($prix) ) {
		echo "<h3> Vous n'avez pas remplis tous les champs ! Merci de completer les champs manquants ! </h3>";
	}
	else
	{
		Update_Activite($idActivite,$nom,$dateAct,$description,$prix);
		header("location: ../Activite.php");
	}

?>