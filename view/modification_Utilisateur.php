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
          <div class="row">
            <div class="input-field col s9">
              <button class="btn waves-effect waves-light grey" type="submit" id="submit" value="valider">Modifier
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="container">
      <div class="row z-depth-4 blue-grey lighten-5 grey">
        <form class="col s12" method="post" action="controller/Controller_Changement_Mot_De_Passe.php">
        <h5 class="center-align">Modification mot de passe</h5>
          <div class="row">
            <div class="input-field col s9">
              <input id="password" name="password" type="password" class="validate">
              <label for="password" data-error="wrong" data-success="right">Nouveau mot de passe</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <input id="password_check" name="password_check" type="password" class="validate">
              <label for="password_check" data-error="wrong" data-success="right">Vérification du mot de passe</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <button class="btn waves-effect waves-light grey" id="submit" value="valider">Modifier
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>    

    <?php require ("view/importscript.php");?>
  </body> 
</html>