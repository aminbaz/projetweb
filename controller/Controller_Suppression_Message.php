<?php
	require_once ('model/Message.php');

	$idMessage = $_GET['id_message'];
	Message::Delete_Message($idMessage);
	header("Location: Accueil.php");
?>