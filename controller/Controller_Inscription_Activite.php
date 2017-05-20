<?php
	require_once ('/model/Inscrire.php');
	$idUtilisateur = $_COOKIE['codeconnexion'];
	$idActivite = $_GET['id_activite'];
	Inscrire::Add_Inscription($idUtilisateur,$idActivite);
	header("Location: Activite.php");
?>