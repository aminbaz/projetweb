<?php
class Role
{
	public static function Get_Role($roleId)
	//Role_Id => [Role_Title]
	//données : $roleId int correspondant à l'id du rôle
	//résultat : string correspondant à l'intitulé du rôle ayant l'id $roleId
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