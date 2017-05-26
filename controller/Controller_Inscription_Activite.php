<?php
	require_once ('model/Inscrire.php');
	$idUtilisateur = $_COOKIE['codeconnexion'];
	$idActivite = $_GET['id_activite'];
	Add_Inscription($idUtilisateur,$idActivite);
	header("Location: Activite.php");
?> 