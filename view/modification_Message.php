<!doctype html> 
<html lang="fr"> 
  <?php require ("view/header.php");?>
  
  <body> 
  <?php require ("view/entete.php");?>

  <div class="container">
      <div class="row z-depth-4 grey lighten-5">
        <form class="col s12" method="post" action="controller/Controller_Maj_Message.php">
        <h5 class="center-align">Modification Message</h5>
          <div class="row">
            <div class="input-field col s9">
              <input id="titre" name="titre" type="text" class="validate" value=<?php echo $information['lib_message'] ?>>
              <label for="titre" data-error="wrong" data-success="right">Titre du message</label>
            </div>
          </div>
         <div class="row">
            <div class="input-field col s9">
              <input id="dateMes" name="dateMes" type="date" class="datepicker" value=<?php echo $information['date_message'] ?>>
              <label for="dateMes" data-error="wrong" data-success="right">Date de publication</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <input id="texte" name="texte" type="text" class="materialize-textarea" value=<?php echo $information['texte_message'] ?>>
              <label for="texte" data-error="wrong" data-success="right">Texte</label>
            </div>
          </div>
          <input type="hidden" name="id_message" id="id_message" value=<?php echo $information['id_message'] ?>>
          <div class="row">
            <div class="input-field col s9">
              <button class="btn waves-effect waves-light grey" type="submit" id="submit" value="valider">Modifier</button>
            </div>
          </div>
        </form>
      </div>
    </div>  


    <?php require ("view/importscript.php");?>
  </body> 
</html>