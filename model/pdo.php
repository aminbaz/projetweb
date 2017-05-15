<?php
function connexion()
{
	try
	{
		$bd = pg_connect("host=localhost port=5432 dbname=centre");
	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}
	return($bd);
}
?>