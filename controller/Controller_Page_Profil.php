<?php
require_once ("model/Utilisateur.php");

$cookieId = $_COOKIE['codeconnexion'];
$information = Utilisateur::Get_User($cookieId);

require "view/profil.php";
?>