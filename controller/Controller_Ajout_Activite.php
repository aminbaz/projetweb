 <?php
	require_once ('../model/Activite.php');

	$nom = htmlspecialchars($_POST['nom']);
	$dateAct = htmlspecialchars($_POST['dateactivite']);
	$description = htmlspecialchars($_POST['description']);
	$prix = htmlspecialchars($_POST['prix']);
	$type = htmlspecialchars($_POST['typeactivite']);
	$categorie = htmlspecialchars($_POST['categorie']);

	

	if (empty($nom) || empty($dateAct) || empty($description) || empty($type)) {
		$messageErreur = "Vous n'avez pas remplis tous les champs ! Merci de completer les champs manquants ! ";
		
		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	else
	{
		Add_Activite($nom,$dateAct,$description,$prix,$type,$categorie);
	}
	header("Location: ../Activite.php");
?>