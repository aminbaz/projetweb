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

	if (empty($nom) || empty($prenom) || empty($password) || empty($password_check) || empty($mail) ) {
		echo "<h3>Vous n'avez pas remplis tous les champs ! Merci de completer les champs manquants ! </h3>";
	}
	elseif (strlen($password)<6) {
		echo "<h3>Votre mot de passe doit faire plus de 6 caractères </h3>";
	}
	elseif ($password != $password_check) {
		echo '<h3>Les mots de passe saisies ne sont pas identiques ! </h3>';
	}
	elseif (!(filter_var($mail, FILTER_VALIDATE_EMAIL))) {
		echo "<h3>Votre mail n'est pas valide  ! </h3>";
	}
	elseif (!(empty($mailverif['Utilisateur_Id']))) {
		echo "<h3>Ce mail est déjà associé à un compte ! </h3>";
	}
	else
	{
		$password = sha1(sha1($password));
		Add_Utilisateur($nom,$prenom,$sexe,$datenaiss,$mail,$password);
		header("Location: ../Connexion.php");
	}
	
?>