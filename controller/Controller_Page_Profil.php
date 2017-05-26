<?php
require_once ("model/Utilisateur.php");

$cookieId = $_COOKIE['codeconnexion'];
$information = Get_User($cookieId);

require "view/profil.php";
?> 