<?php
	require ("controller/Controller_Test_Connexion.php");
	onlineOnly();

	require_once ('/model/Activite.php');
	$information = Activite::Get_Activite_Type(2);
	require "view/type_activite.php";
?>