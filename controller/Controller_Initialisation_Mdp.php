<?php
	require_once ('../model/Utilisateur.php');
		$id_utilisateur = $_GET['id_utilisateur'];
		$mdp = 'maison'
		Update_Password($id_utilisateur,$mdp);
		header("Location: ../Espace.php");
	
?>