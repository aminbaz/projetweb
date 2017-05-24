<?php
require_once ("../model/Utilisateur.php");

$mdp = htmlspecialchars($_POST["password"]);
$mail = htmlspecialchars($_POST["email"]);

$cookiecode = Get_User_Id($mail);

if (empty($mdp) || empty($mail)) {
	echo "Vous n'avez pas remplis tous les champs ! Merci de completer les champs manquants ! ";
}
elseif (!(filter_var($mail, FILTER_VALIDATE_EMAIL))) {
	echo "Votre email n'est pas valide  ! ";
}
else
{
	$mdp = sha1(sha1(htmlspecialchars($mdp)));
	if(Check_Password($mdp,$mail))
	{

		setcookie("codeconnexion", $cookiecode, time()+(3600), "/");

		header("Location: ../Accueil.php");
	}
	else
	{
		echo "Email ou mot de passe erroné ";
	}
}
?>