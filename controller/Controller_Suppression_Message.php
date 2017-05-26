<?php
	require_once ('model/Message.php');

	$idMessage = $_GET['id_message'];
	Delete_Message($idMessage);
	header("Location: Accueil.php");
?> 