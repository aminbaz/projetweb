<?php
	//require ("controller/Controller_Test_Connexion.php");
	//onlineOnly();

	
	//$cookieId = $_COOKIE['codeconnexion'];
	require_once("../model/ActiviteModel.php");
	$information = Get_Activite_Type(1);

	//require_once ('/model/Utilisateur.php');
	
	

	
	require_once "view/type_activite.php";
?>