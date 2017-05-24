<!doctype html> 
<html lang="fr"> 
  <?php require ("view/header.php");?>
  
  <body>
  <?php require ("view/entete.php");?>
    <div class="container">
      <div class="row z-depth-4 grey lighten-4">
        <form class="col s12" method="post" action="controller/Controller_Connexion.php">  
        <h5 class="center-align">Saisir vos identifiants</h5>
          <div class="row">
            <div class="input-field col s9">
              <input id="email" name="email" type="email" class="validate">
              <label for="email" data-error="wrong" data-success="right">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <input id="password" name="password" type="password" class="validate">
              <label for="password" data-error="wrong" data-success="right">Mot de passe</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <button class="btn waves-effect waves-light grey" type="submit" name="action" value="valider">Connexion</button>
              <a href="Inscription.php">
              <button class="btn waves-effect waves-light grey" type="button">Créer un compte </button>
              </a> 
            </div>
          </div>
        </form>
      </div>
    </div>
    
    <?php require ("view/importscript.php");?>
  </body>
  </html>