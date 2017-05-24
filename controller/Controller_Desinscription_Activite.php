<?php
	require ("controller/Controller_Test_Connexion.php");
	onlineOnly();
	require_once ('/model/Inscrire.php');
	$idUtilisateur = $_COOKIE['codeconnexion'];

	
	$idActivite = $_GET['id_activite'];
	Inscrire::Delete_Inscription($idUtilisateur,$idActivite);
	header("Location: Activite.php");
?>