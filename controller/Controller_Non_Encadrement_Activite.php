<?php
	require_once ('/model/Encadrer.php');
	$idUtilisateur = $_COOKIE['codeconnexion'];
	$idActivite = $_GET['id_activite'];
	Encadrer::Delete_Encadrement($idUtilisateur,$idActivite);
	header("Location: Activite.php");
?>