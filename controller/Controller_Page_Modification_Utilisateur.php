<?php
require_once ("model/Utilisateur.php");

	$mail = htmlspecialchars($_POST['email']);
	$id = Get_User_Id($mail);
	$information = Get_User($id);
require "view/modification_Utilisateur.php";

?>