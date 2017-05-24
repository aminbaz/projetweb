<?php
	//require ("controller/Controller_Test_Connexion.php");
	//onlineOnly();

	require_once ('/model/Activite.php');
	require_once ('/model/Utilisateur.php');
	

	$cookieId = $_COOKIE['codeconnexion'];
	$information = Get_Activite_Type(1);
	$categorie = Get_User_Categorie($cookieId);
	

	
	require_once "view/type_activite.php";
?>