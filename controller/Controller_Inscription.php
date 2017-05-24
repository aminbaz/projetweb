<?php
	require_once ('../model/Utilisateur.php');

	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$sexe = htmlspecialchars($_POST['sexe']);
	$datenaiss = htmlspecialchars($_POST['dateNaiss']);
	$mail = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars($_POST['password']);
	$password_check = htmlspecialchars($_POST['password_check']);
	

	$mailverif=Check_Mail($mail);

	if (empty($nom) || empty($prenom) || empty($sexe) || empty($datenaiss) || empty($password) || empty($password_check) || empty($mail) ) {
		echo "Vous n'avez pas remplis tous les champs ! Merci de completer les champs manquants ! ";
	}
	elseif (strlen($password)<6) {
		echo "Votre mot de passe doit faire plus de 6 caractères";
	}
	elseif ($password != $password_check) {
		echo 'Les mots de passe saisies ne sont pas identiques ! ';
	}
	elseif (!(filter_var($mail, FILTER_VALIDATE_EMAIL))) {
		echo "Votre mail n'est pas valide  ! ";
	}
	elseif (!(empty($mailverif['Utilisateur_Id']))) {
		echo "Ce mail est déjà associé à un compte !";
	}
	else
	{
		$password = sha1(sha1($password));
		Add_Utilisateur($nom,$prenom,$sexe,$datenaiss,$mail,$password);
		header("Location: ../Connexion.php");
	}
	
?>