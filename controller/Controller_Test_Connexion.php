<?php
require_once ("model/Utilisateur.php");
require_once ("model/Role.php");

	function isConnected()
	{
		//Indique si un utilisateur est connecté.
		if (isset($_COOKIE["codeconnexion"]))
		{
			
			$cookieperso = $_COOKIE["codeconnexion"];
			$user = Get_User($cookieperso);
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


function onlineOnly()
{
	//Pour les pages autorisées seulement par les utilisateurs connectés
	//renvoi à la connexion sinon
	if(!isConnected())
	{
		header("Location: Connexion.php");
	}
}

function offlineOnly()
{
	//Pour les pages autorisées seulement par les utilisateurs au non connectés
	//renvoi à la connexion sinon
	if(isConnected())
	{
		header("Location: Accueil.php");
	}		
}

function isAdmin()
{
	//Fonction permettant de savoir si un l'utilisateur est un administrateur
	//renvoi un booleen vrai s'il l'est
	if(isConnected())
	{
		$userId = $_COOKIE["codeconnexion"];
		$roleId = Get_User_Role($userId);
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

function isAnimateur()
{
	//Fonction permettant de savoir si un l'utilisateur est un animateur
	//renvoi un booleen vrai s'il l'est
	if(isConnected())
	{
		$userId = $_COOKIE["codeconnexion"];
		$roleId = Get_User_Role($userId);
		if($roleId != 2)
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