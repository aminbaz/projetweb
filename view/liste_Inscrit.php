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
              <th>Nom</th>
              <th>Prenom</th>
          </tr>
        </thead>

        <tbody>
          <?php 
            while($ligne=$information->fetch()){
                       echo "<tr>";
                        echo "<td> $ligne[nom]</td>";
                        echo "<td> $ligne[prenom]</td>";
                        echo "</a></td>";
                        echo "</tr>";

                }
        ?>
        </tbody>
      </table>
  </div>
  <?php require ("view/importscript.php");?>
  </body> 
</html>