<?php
	require ("controller/Controller_Test_Connexion.php");
	onlineOnly();

	
	$cookieId = $_COOKIE['codeconnexion'];
	
	require_once ('model/Utilisateur.php');
 	$categorie = Get_User_Categorie($cookieId);

	require_once("model/Activite.php");
	$information = Get_Activite_Type(1);
	
	
	require_once ("view/type_activite.php");
?> 