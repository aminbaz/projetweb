<?php
	require ("controller/Controller_Test_Connexion.php");
	onlineOnly();

	require_once ('/model/Activite.php');
	$information = Activite::Get_Activite_Type(1);
	$cookieId = $_COOKIE['codeconnexion'];
	require "view/type_activite.php";
?>