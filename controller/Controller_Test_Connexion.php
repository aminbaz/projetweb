<?php
require_once ("model/Utilisateur.php");
require_once ("model/Role.php");

	function isConnected()
	{
		if (isset($_COOKIE["codeconnexion"]))
		{
			
			$cookieperso = $_COOKIE["codeconnexion"];
			$user = Utilisateur::Get_User($cookieperso);
			if (empty($user["id_utilisateur"])) 
			{
				return false;
			}
			else
			{
				return true;
			}
		}
		else
		{
			
			return false;
		}
}
//Indique si un utilisateur est connecté.

function onlineOnly()
{
	if(!isConnected())
	{
		header("Location: Connexion.php");
	}
}
//Pour les pages autorisées seulement par les utilisateurs connectés. Renvoie à la connexion sinon

function offlineOnly()
{
	if(isConnected())
	{
		header("Location: Accueil.php");
	}		
}

function isAdmin()
{
	if(isConnected())
	{
		$userId = $_COOKIE["codeconnexion"];
		$roleId = Utilisateur::Get_User_Role($userId);
		if($roleId != 3)
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	else
	{
		return false;
	}
}
?>