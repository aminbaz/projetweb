<?php
require_once ("model/Utilisateur.php");




require_once ("/controller/Controller_Test_Connexion.php");

onlineonly();

require_once ("model/Message.php");

$information = Get_Message();

require_once "view/accueil.php";


?>