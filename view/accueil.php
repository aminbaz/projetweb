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

    <title>Accueil centre</title> 
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
  <?php require_once ("controller/Controller_Test_Connexion.php");?>

    <?php if(isConnected()){?>
      <div class="container"> 
          <table class="bordered highlight centered ">
              <thead>
                <tr>
                    <th>Message</th>
                </tr>
              </thead>

              <tbody>
                <?php 
                  while($ligne=$information->fetch()){
                    echo "<tr>";
                      echo "<td> $ligne[lib_message]</td>";
                      echo "<td> $ligne[texte_message]</td>";
                      if (isAdmin()){
                        echo "<td> <a href='Modification_Message.php?id_message=$ligne[id_message]'>";
                        echo "Modifier";
                        echo "</a></td>";
                      }
                    }
                    ?>
              </tbody>
            </table>
        </div>
        <?php } ?>


      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
  </body> 
</html>