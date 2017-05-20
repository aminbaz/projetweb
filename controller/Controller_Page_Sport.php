<?php
	require ("controller/Controller_Test_Connexion.php");
	onlineOnly();

	require_once ('/model/Activite.php');
	

	$cookieId = $_COOKIE['codeconnexion'];
	$information = Activite::Get_Activite_Type(1);
	
	require "view/type_activite.php";
?>