<?php
require_once ("model/Utilisateur.php");


require_once "view/accueil.php";

require_once ("controller/Controller_Test_Utilisateur.php");

onlineonly();

require_once ("model/Message.php");

$information = Message::Get_Message();



?>