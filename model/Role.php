<?php
class Role
{
	public static function Get_Role($roleId)
	{
		require_once('Pdo.php');
		$bd=connexion();
	   //connecté à la base de donnée 

		$req = $bd->prepare("SELECT lib_role FROM role WHERE id_role= :roleId");
		$req->bindParam(':roleId',$roleId);
		$req->execute();
		$data=$req->fetch();

		return ($data['lib_role']);
	}
}
?>