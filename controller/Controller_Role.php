<?php
require_once ("../model/Utilisateur.php");

$role = htmlspecialchars($_POST["role"]);
$mail = htmlspecialchars($_POST["email"]);

$id = Get_User_Id($mail);

if ($role == "administrateur") {
	$numrole = 3;
}
elseif ($role == "adherent") {
	$numrole = 1;
}
else
{
	$numrole = 2;
}

if (empty($role) || empty($mail)) {
	echo "<h3> Vous n'avez pas remplis tous les champs ! Merci de completer les champs manquants ! </h3>";
}
elseif (!(filter_var($mail, FILTER_VALIDATE_EMAIL))) {
	echo "<h3> Votre email n'est pas valide  ! </h3>";
}
else
{
	Set_User_Role($id,$numrole);
	header("Location: ../Espace.php");

}
?> 