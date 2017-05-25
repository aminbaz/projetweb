<!doctype html> 
<html lang="fr"> 
 <?php require ("view/header.php");?>
 
  <body> 
  <?php require ("view/entete.php");?>

  <div class="container">
      <div class="row z-depth-4 grey lighten-5">
        <form class="col s12" method="post" action="controller/Controller_Maj_Activite.php">
        <h5 class="center-align">Modification Activité</h5>
          <div class="row">
            <div class="input-field col s9">
              <input id="nom" name="nom" type="text" class="validate" value=<?php echo $information['nom_activite'] ?>>
              <label for="nom" data-error="wrong" data-success="right">Nom</label>
            </div>
          </div>
         <div class="row">
            <div class="input-field col s9">
              <input id="dateAct" name="dateAct" type="date" class="datepicker" value=<?php echo $information['date_activite'] ?>>
              <label for="dateAct" data-error="wrong" data-success="right">Date activité</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <input id="description" name="description" type="text" class="materialize-textarea" value=<?php echo $information['description'] ?>>
              <label for="description" data-error="wrong" data-success="right">description</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <input id="prix" name="prix" type="number" class="validate" value=<?php echo $information['prix'] ?>>
              <label for="prix" data-error="wrong" data-success="right">Prix (champs non obligatoire)</label>
            </div>
          </div>
          <input type="hidden" name="id_activite" id="id_activite" value=<?php echo $information['id_activite'] ?>>
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