<?php
	require_once ('model/Message.php');
	$idMessage = $_GET['id_message'];
	$information = Get_All_Message($idMessage)->fetch();
	require "view/modification_Message.php";

?> 