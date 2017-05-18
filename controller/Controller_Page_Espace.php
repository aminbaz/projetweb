<?php
require ("controller/Controller_Test_Connexion.php");
onlineOnly();
require_once ("model/Utilisateur.php");

$cookieId = $_COOKIE['codeconnexion'];

require "view/espace.php";
?>