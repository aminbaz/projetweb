<!doctype html> 
<html lang="fr"> 
  <?php require ("view/header.php");?>
  
  <body> 
  <?php require ("view/entete.php");?>

  <div class="container">
      <div class="row z-depth-4 grey lighten-5">
        <form class="col s12" method="post" action="controller/Controller_Maj_Utilisateur.php">
        <h5 class="center-align">Modification coordonnées</h5>
          <div class="row">
            <div class="input-field col s9">
              <input id="nom" name="nom" type="text" class="validate" value=<?php echo $information['nom'] ?>>
              <label for="nom" data-error="wrong" data-success="right">Nom</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <input id="prenom" name="prenom" type="text" class="validate" value=<?php echo $information['prenom'] ?>>
              <label for="prenom" data-error="wrong" data-success="right">Prénom</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <input id="sexe" name="sexe" type="text" class="validate" value=<?php echo $information['sexe'] ?>>
              <label for="sexe" data-error="wrong" data-success="right">Sexe</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <input id="datenaiss" name="datenaiss" type="date" class="validate" value=<?php echo $information['date_naiss'] ?>>
              <label for="datenaiss" data-error="wrong" data-success="right">Date de naissance</label>
            </div>
          </div>
          <input type="hidden" name="id_utilisateur" id="id_utilisateur" value=<?php echo $information['id_utilisateur'] ?>>
          <div class="row">
            <div class="input-field col s9">
              <button class="btn waves-effect waves-light grey" type="submit" id="submit" value="valider">Modifier
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="input-field col s9  center-align">
              <a class="btn waves-effect waves-light grey" href="Controller/Controller_Initialisation_Mdp.php?id_utilisateur=$information[id_utilisateur]">Réinitialiser son mot de passe ?</a>
    </div>

    <?php require ("view/importscript.php");?>
  </body> 
</html>