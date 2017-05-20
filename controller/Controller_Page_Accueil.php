<?php
require_once ("model/Utilisateur.php");
require_once ("model/Message.php");
//require_once ("controller/Controller_Test_Utilisateur.php");

//onlineonly();

$information = Message::Get_Message();

require "view/accueil.php";

?>