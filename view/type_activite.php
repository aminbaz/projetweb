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
  <?php require ("view/entete.php");?>
   <?require ("controller/Controller_Test_Connexion.php");?>
  <div class="container"> 
    <table class="bordered highlight centered ">
        <thead>
          <tr>
              <th>Activité</th>
              <th>Date</th>
              <th>Description</th>
              <th>Prix</th>
              <th><?php if (isAdmin()){echo "Modifier";}else{ echo "S'inscrire";}?></th>
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
                echo "<td> <a href='Inscription_Activite.php?id_activite=$ligne[id_activite]'>";
                if (isAdmin()){echo "Modifier";}else{ echo "S'inscrire";}
                echo "</a></td>";
             echo "</tr>";
            }
          ?>
        </tbody>
      </table>
  </div>
  </body> 
</html>