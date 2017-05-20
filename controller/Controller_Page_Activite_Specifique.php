<?php
	require ("Controller_Test_Connexion.php");
	require_once ('/model/Utilisateur.php');
	$id = $_COOKIE['codeconnexion'];

	if (isAnimateur()){
		$information = Utilisateur::Get_Activite_Animateur($id);
	}
	else{
		$information = Utilisateur::Get_Activite_Adherent($id);
	}

	require "/view/activite_Spec.php";
?>