<!doctype html> 
<html lang="fr"> 
  <head> 
       <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
     <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <SCRIPT type="text/javascript" src="jquery.js"></SCRIPT>
<SCRIPT type="text/javascript" src="script.js"></SCRIPT>

    <title>Acitvite</title> 
    <meta name="Content-Type" content="UTF-8"> 
    <meta name="Content-Language" content="fr"> 
    <meta name="Description" content="Gestion d'un centre social "> 
    <meta name="Keywords" content="centre social"> 
    <meta name="Subject" content="Gestion centre social "> 
    <meta name="Author" content="Amin BAZAZ"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">  
  </head> 
 
  <body> 
  <?php require ("view/entete.php");
  require_once ('/model/Inscrire.php');
  require_once ('/model/Encadrer.php');
  require_once ('/model/Utilisateur.php');
  ?>

  <div class="container"> 
    <table class="bordered highlight centered ">
        <thead>
          <tr>
              <th>Activité</th>
              <th>Date</th>
              <th>Description</th>
              <th>Prix</th>
              <?php if(isAdmin()){
                echo "<th>Responsable</th>";
              }
              ?>
          </tr>
        </thead>

        <tbody>
          <?php 
            while($ligne=$information->fetch()){
                if(isAdmin() or isAnimateur()){
                  $responsable = Utilisateur::Get_Responsable_Activite($ligne['id_activite']);
                  echo "<tr>";
                        echo "<td> $ligne[nom_activite]</td>";
                        echo "<td> $ligne[date_activite]</td>";
                        echo "<td> $ligne[description]</td>";
                        echo "<td> $ligne[prix]</td>";
                
                        if (isAdmin()){
                              if ($responsable['id_activite'] == $ligne['id_activite']){
                                echo "<td> $responsable[nom]</td>";
                              }
                              else{
                                echo "<td></td>";
                              }
                              echo "<td> <a href='Modification_Activite.php?id_activite=$ligne[id_activite]'>";
                              echo "Modifier";
                              echo "</a></td>";
                              echo "<td> <a href='Suppression_Activite.php?id_activite=$ligne[id_activite]'>";
                              echo "Supprimer";
                              echo "</a></td>";
                        }

                        else{
                            if (empty(Encadrer::Check_Encadrement($cookieId,$ligne['id_activite']))){
                                  echo "<td> <a href='Encadrement_Activite.php?id_activite=$ligne[id_activite]'>";
                                  echo "Encadrer";
                                  echo "</a></td>";
                            }
                            else{
                                  echo "<td> <a href='Non_Encadrement_Activite.php?id_activite=$ligne[id_activite]'>";
                                  echo "Ne plus encadrer";
                                  echo "</a></td>";
                            }
                        }
                      echo "</tr>";

                }



                else{
                 if($categorie == $ligne['id_categorie'] or empty($ligne['id_categorie'])){
                        echo "<tr>";
                        echo "<td> $ligne[nom_activite]</td>";
                        echo "<td> $ligne[date_activite]</td>";
                        echo "<td> $ligne[description]</td>";
                        echo "<td> $ligne[prix]</td>";

                            if (empty(Inscrire::Check_Inscription($cookieId,$ligne['id_activite']))){
                                  echo "<td> <a href='Inscription_Activite.php?id_activite=$ligne[id_activite]'>";
                                  echo "S'inscrire";
                                  echo "</a></td>";
                            }
                            else{
                                  echo "<td> <a href='Desinscription_Activite.php?id_activite=$ligne[id_activite]'>";
                                  echo "Désinscription";
                                  echo "</a></td>";
                            }
                      }
                      echo "</tr>";
                }                       
          }
        ?>
        </tbody>
      </table>
  </div>
  </body> 
</html>