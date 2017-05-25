<!doctype html> 
<html lang="fr"> 
 <?php require ("view/header.php");?>
 
  <body> 
  <?php require ("view/entete.php");
  require_once ('model/Inscrire.php');
  require_once ('model/Encadrer.php');
  ?>

  <div class="container"> 
    <table class="bordered highlight centered ">
        <thead>
          <tr>
              <th>Activité</th>
              <th>Date</th>
              <th>Description</th>
              <th>Prix</th>
              <th>Place</th>
              <th>Participant</th>;
              <?php if(isAdmin()){
                echo "<th>Responsable</th>";
              }
              ?>
          </tr>
        </thead>

        <tbody>
          <?php 
            while($ligne=$information->fetch()){
                 $nbinscrit = Nombre_Inscription($ligne['id_activite']);
                if(isAdmin() or isAnimateur()){
                  $responsable = Get_Responsable_Activite($ligne['id_activite']);
                       echo "<tr>";
                        echo "<td> $ligne[nom_activite]</td>";
                        echo "<td> $ligne[date_activite]</td>";
                        echo "<td> $ligne[description]</td>";
                        echo "<td> $ligne[prix]</td>";
                        echo "<td> $ligne[place]</td>";
                        echo "<td> <a href='Liste_Inscrit.php?id_activite=$ligne[id_activite]'>";
                        echo "$nbinscrit[0]";
                        echo "</a></td>";

                
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
                            if (empty(Check_Encadrement($cookieId,$ligne['id_activite']))&&empty(Check_Deja_Encadre($ligne['id_activite']))){
                                  echo "<td> <a href='Encadrement_Activite.php?id_activite=$ligne[id_activite]'>";
                                  echo "Encadrer";
                                  echo "</a></td>";
                            }
                            elseif(!empty(Check_Encadrement($cookieId,$ligne['id_activite']))){
                                  echo "<td> <a href='Non_Encadrement_Activite.php?id_activite=$ligne[id_activite]'>";
                                  echo "Ne plus encadrer";
                                  echo "</a></td>";
                            }
                            else{
                                  echo"<td>Déja encadrer</td>";
                            }
                        }
                      echo "</tr>";

                }



                else{
                 if($categorie == $ligne['id_categorie'] or $ligne['id_categorie'] == 5){
                        echo "<tr>";
                        echo "<td> $ligne[nom_activite]</td>";
                        echo "<td> $ligne[date_activite]</td>";
                        echo "<td> $ligne[description]</td>";
                        echo "<td> $ligne[prix]</td>";
                        echo "<td> $ligne[place]</td>";
                        echo "<td> <a href='Liste_Inscrit.php?id_activite=$ligne[id_activite]'>";
                        echo "$nbinscrit[0]";
                        echo "</a></td>";

                            if (empty(Check_Inscription($cookieId,$ligne['id_activite']))){
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
  <?php require ("view/importscript.php");?>
  </body> 
</html>