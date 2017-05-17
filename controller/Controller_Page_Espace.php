<?php

require_once ("model/Utilisateur.php");

$cookieMail = $_COOKIE['codeconnexion'];
$userId = Utilisateur::Get_User_Id($cookieMail);

require "view/espace.php";
?>