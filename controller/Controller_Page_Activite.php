<?php
	require "view/activite.php";
	require_once ('model/Activite.php');
	$activite=Get_All_Activite();
	$date = date("Y-M-d");
	if($activite['date_activite'] <= $date){
		Delete_Activite($idActivite);
	}
?>