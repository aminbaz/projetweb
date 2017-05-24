<?php
	require_once ('model/Activite.php');
	$idActivite = $_GET['id_activite'];
	$information = Get_Activite($idActivite)->fetch();
	require "view/modification_Activite.php";

?>