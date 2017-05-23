<!doctype html> 
<html lang="fr"> 
  <?php require ("view/header.php");?>
 
  <body> 
  <?php require ("view/entete.php");
  ?>

  <div class="container"> 
    <table class="bordered highlight centered ">
        <thead>
          <tr>
              <th>Activité</th>
              <th>Date</th>
              <th>Description</th>
              <th>Prix</th>
          </tr>
        </thead>

        <tbody>
          <?php 
            while($ligne=$information->fetch()){
                echo "<tr>";
                echo "<td> $ligne[nom_activite]</td>";
                echo "<td> $ligne[date_activite]</td>";
                echo "<td> $ligne[description]</td>";
                echo "<td> $ligne[prix]</td>";
                echo "</tr>";                           
           }
        ?>
        </tbody>
      </table>
  </div>
  <?php require ("view/importscript.php");?>
  </body> 
</html>