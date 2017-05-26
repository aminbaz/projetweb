<?php
	require ("controller/Controller_Test_Connexion.php");
	onlineOnly();

	require_once ('model/Utilisateur.php');
	require_once ('model/Activite.php');

	$cookieId = $_COOKIE['codeconnexion'];
	$information = Get_Activite_Type(2);
	$categorie = Get_User_Categorie($cookieId);

	require "view/type_activite.php";
?> 