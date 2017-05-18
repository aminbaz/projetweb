<?php
require_once ("model/Utilisateur.php");

	$mail = htmlspecialchars($_POST['email']);
	$id = Utilisateur::Get_User_Id($mail);
	$information = Utilisateur::Get_User($id);
require "view/modification_Utilisateur.php";

?>