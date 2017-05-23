<!doctype html> 
<html lang="fr"> 
  <?php require ("view/header.php");?>
 
  <body> 
  <?php require ("view/entete.php");?>
  <?require ("controller/Controller_Test_Connexion.php");?>
<?php if (isAdmin()){?>
	 <div class="container">
      <div class="row z-depth-4 grey lighten-5">
        <form class="col s12" method="post" action="controller/Controller_Role.php">  
        <h5 class="center-align">Attribution rôle</h5>        
          <div class="row">
            <div class="input-field col s9">
              <input id="email" name="email" type="email" class="validate">
              <label for="email" data-error="wrong" data-success="right">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <input id="role" name="role" type="text" class="validate">
              <label for="role" data-error="wrong" data-success="right">Role</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <button class="btn waves-effect waves-light grey" type="submit" name="action" value="valider">Changement</button>
            </div>
          </div>
        </form>
      </div>
    </div>

   <div class="container">
      <div class="row z-depth-4 grey lighten-5">
        <form class="col s12" method="post" action="Modification_Utilisateur.php">
        <h5 class="center-align">Changement donnée d'un utilisateur</h5>
          <div class="row">
            <div class="input-field col s9">
              <input id="email" name="email" type="email" class="validate">
              <label for="email" data-error="wrong" data-success="right">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <button class="btn waves-effect waves-light grey" type="submit" name="action" value="valider">Changement</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="container">
      <div class="row z-depth-4 grey lighten-5">
        <form class="col s12" method="post" action="Publication.php">
        <h5 class="center-align">Publier un message</h5>
          <div class="row">
            <div class="input-field col s9">
              <input id="titre" name="titre" type="text" class="validate">
              <label for="titre" data-error="wrong" data-success="right">Titre de la publication</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <input id="texte" name="texte" type="text" class="validate">
              <label for="texte" data-error="wrong" data-success="right">Saisir le message</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <button class="btn waves-effect waves-light grey" type="submit" name="action" value="valider">Publier</button>
            </div>
          </div>
        </form>
      </div>
    </div>

<?php ;}?>
<?php require ("view/importscript.php");?>
  </body>
</html>