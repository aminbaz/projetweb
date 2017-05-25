<?php
	function Get_Activite($idActivite){

				require_once('pdo.php');
				$bd=connexion();
				
				$req = $bd->prepare("SELECT * FROM activite WHERE id_activite = :idActivite");
				$req->bindParam(':idActivite',$idActivite);

				$req->execute();

				return $req;
			}


	function Get_Activite_Type($id_type){

				require_once('pdo.php');
				$bd=connexion();

				$req = $bd->prepare("SELECT * FROM activite WHERE id_type = :id_type");
				$req->bindParam(':id_type',$id_type);

				$req->execute();

				return $req;
			}

	
	
	function Add_Activite($nom,$date,$description,$prix,$type,$cat,$place){
					
					require_once('pdo.php');
					$bd=connexion();
 
					if ($type == "sport") {
						$codetype = 1;
					}
					elseif ($type == "culturel") {
						$codetype = 2;
					}
					elseif ($type == "scolaire") {
						$codetype = 3;
					}
					elseif ($type == "voyage") {
						$codetype = 4;
					}
					else{
						$codetype = 5;
					}


					if ($cat == "-10") {
						$categorie = 1;
					}
					elseif ($cat == "-15") {
						$categorie = 2;
					}
					elseif ($cat == "-20") {
						$categorie = 3;
					}
					elseif ($cat == "+21"){
						$categorie = 4;
					}
					else{
						$categorie = 5;
					}

					if (empty($prix)) {
						$codeprix = 0;
					}
					else{
						$codeprix = $prix;
					}
					
					$req = $bd->prepare('INSERT INTO activite(nom_activite, description, prix, id_type, date_activite, id_categorie, place) VALUES (:nom, :description,:codeprix,:codetype,:dateActivite,:categorie, :place)');
					$req->bindParam(':nom',$nom);
					$req->bindParam(':dateActivite',$date);
					$req->bindParam(':description',$description);
					$req->bindParam(':codeprix',$codeprix);
					$req->bindParam(':codetype',$codetype);
					$req->bindParam(':categorie',$categorie);
					$req->bindParam(':place',$place);

					$req->execute();
				}	


	function Update_Activite($id,$nom,$date,$description,$prix,$place){

					require_once('pdo.php');
					$bd=connexion();

					$req = $bd->prepare('UPDATE activite set nom_activite=:nom, description=:description, prix=:prix, date_activite=:dateAct, place=:place where id_activite=:id');
					$req->bindParam(':id',$id);
					$req->bindParam(':nom',$nom);
					$req->bindParam(':dateAct',$date);
					$req->bindParam(':description',$description);
					$req->bindParam(':prix',$prix);
					$req->bindParam(':place',$place);
					
					$req->execute();
				}	

	function Delete_Activite($id){
					
					require_once('pdo.php');
					$bd=connexion();
					
					$req = $bd->prepare('DELETE FROM activite WHERE id_activite=:id');
					$req->bindParam(':id',$id);

					$req->execute();
				}	

?>