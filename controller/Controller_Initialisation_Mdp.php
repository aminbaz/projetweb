<?php
	require_once ('../model/Utilisateur.php');
		$id_utilisateur = $_GET['id_utilisateur'];
		Update_Password($id_utilisateur,'maison');
	}
	
?>