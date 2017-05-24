<?php
	require ("controller/Controller_Test_Connexion.php");
	onlineOnly();
	require_once ('model/Inscrire.php');
	$idUtilisateur = $_COOKIE['codeconnexion'];

	
	$idActivite = $_GET['id_activite'];
	Delete_Inscription($idUtilisateur,$idActivite);
	header("Location: Activite.php");
?>