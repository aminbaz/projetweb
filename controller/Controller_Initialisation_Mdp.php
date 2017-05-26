<?php
	require_once ('../model/Utilisateur.php');
		$id_utilisateur = $_GET['id_utilisateur'];
		$password = 'maison';

		$mdp = sha1(sha1($password));
		Update_Password($id_utilisateur,$mdp);


		header("Location: ../Espace.php");
	
?> 