<?php
//require_once ("controller/Controller_Test_User.php");

$messageErreur = htmlspecialchars($_GET["erreur"]);

require("view/erreur.php");

?>