<?php
require_once ("../model/Utilisateur.php");

$mdp = htmlspecialchars($_POST["password"]);
$mail = htmlspecialchars($_POST["email"]);

$cookiecode = Utilisateur::Get_User_Id($mail);

if (empty($mdp) || empty($mail)) {
	$messageErreur = "Vous n'avez pas remplis tous les champs ! Merci de completer les champs manquants ! ";
	
	header("Location: ../Erreur.php?erreur=".$messageErreur);
}
elseif (!(filter_var($mail, FILTER_VALIDATE_EMAIL))) {
	$messageErreur = "Votre email n'est pas valide  ! ";
	
	header("Location: ../Erreur.php?erreur=".$messageErreur);
}
else
{
	$mdp = sha1(sha1(htmlspecialchars($mdp)));
	if(Utilisateur::Check_Password($mdp,$mail))
	{

		setcookie("codeconnexion", $cookiecode, time()+(500), "/");

		header("Location: ../Espace.php");
	}
	else
	{
		$messageErreur = "Email ou mot de passe erroné ";
	
		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
}
?>