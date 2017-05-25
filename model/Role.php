<?php
	function Get_Role($roleId){
		//Fonction qui renvoi le role d'un utilisateur (Animateur, Administrateur ou Adhérent)
		
		require_once('pdo.php');
		$bd=connexion();

		$req = $bd->prepare("SELECT lib_role FROM role WHERE id_role= :roleId");
		$req->bindParam(':roleId',$roleId);
		
		$req->execute();
		$data=$req->fetch();

		return ($data['lib_role']);
	}
?>