<?php
	require_once ('../model/Utilisateur.php');
		$id_utilisateur = $_GET['id_utilisateur'];
		$mdp = 'maison';
		Update_Password($id_utilisateur,sha1(sha1($mdp));
		header("Location: ../Espace.php");
	
?>