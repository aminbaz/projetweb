<?php
	require_once ('model/Activite.php');

	$idActivite = $_GET['id_activite'];
	Activite::Delete_Activite($idActivite);
	header("Location: Activite.php");
?>