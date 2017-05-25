<?php
	
	require_once("model/Inscrire.php");
	$idActivite = $_GET['id_activite'];
	$information=Liste_Inscription($idActivite);
	require "view/liste_Inscrit.php";
	
?>