<!doctype html> 
<html lang="fr"> 

 <?php require ("view/header.php");?>
  <body class="back"> 
  <?php require ("view/entete.php");?>
  <?php require_once ("controller/Controller_Test_Connexion.php");

  ?>

  
    <?php if(isConnected()){
      require_once("model/Message.php");
      $information = Get_Message();
      ?>
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
                        echo "<td> <a href='Suppression_Message.php?id_message=$ligne[id_message]'>";
                        echo "Supprimer";
                        echo "</a></td>";
                      }
                    }
                    ?>
              </tbody>
            </table>
        </div>
        <?php } 
        else{
          ?>
          <img class="responsive-img" src="image/background.jpg" alt="Photos d'hommes et de femmes" />;
        <?php } 
          ?>
        


     <?php require ("view/importscript.php");?>
  </body> 
</html>