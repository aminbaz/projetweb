<?php
	require_once ('model/Utilisateur.php');

	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$sexe = htmlspecialchars($_POST['sexe']);
	$datenaiss = htmlspecialchars($_POST['dateNaiss']);
	$mail = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars($_POST['password']);
	$password_check = htmlspecialchars($_POST['password_check']);
	

	$mailverif=Check_Mail($mail);

	if (empty($nom) || empty($prenom) || empty($sexe) || empty($datenaiss) || empty($password) || empty($password_check) || empty($mail) ) {
		$messageErreur = "Vous n'avez pas remplis tous les champs ! Merci de completer les champs manquants ! ";
		
		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	elseif (strlen($password)<6) {
		$messageErreur = 'Votre mot de passe doit faire plus de 6 caractères';
		
		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	elseif ($password != $password_check) {
		$messageErreur = 'Les mots de passe saisies ne sont pas identiques ! ';
		
		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	elseif (!(filter_var($mail, FILTER_VALIDATE_EMAIL))) {
		$messageErreur = "Votre mail n'est pas valide  ! ";
		
		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	elseif (!(empty($mailverif['Utilisateur_Id']))) {
		$messageErreur = "Ce mail est déjà associé à un compte !";
		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	else
	{
		$password = sha1(sha1($password));
		Add_Utilisateur($nom,$prenom,$sexe,$datenaiss,$mail,$password);
		header("Location: ../Connexion.php");
	}
	
?>