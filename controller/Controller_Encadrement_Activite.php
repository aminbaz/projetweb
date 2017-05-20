<?php
	require_once ('/model/Encadrer.php');
	$idUtilisateur = $_COOKIE['codeconnexion'];
	$idActivite = $_GET['id_activite'];
	Encadrer::Add_Encadrement($idUtilisateur,$idActivite);
?>