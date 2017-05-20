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

    <title>Espace</title> 
    <meta name="Content-Type" content="charset : UTF-8"> 
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
<?php if (isAdmin()){?>
	 <div class="container">
      <h5 class="center-align">Attribution rôle</h5>
      <div class="row z-depth-4 blue-grey lighten-5">
        <form class="col s12" method="post" action="controller/Controller_Role.php">          
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
              <button class="btn waves-effect waves-light" type="submit" name="action" value="valider">Changement</button>
            </div>
          </div>
        </form>
      </div>
    </div>

   <div class="container">
      <h5 class="center-align">Changement donnée d'un utilisateur</h5>
      <div class="row z-depth-4 blue-grey lighten-5">
        <form class="col s12" method="post" action="Modification_Utilisateur.php">
          <div class="row">
            <div class="input-field col s9">
              <input id="email" name="email" type="email" class="validate">
              <label for="email" data-error="wrong" data-success="right">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <button class="btn waves-effect waves-light" type="submit" name="action" value="valider">Changement</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="container">
      <h5 class="center-align">Publier un message</h5>
      <div class="row z-depth-4 blue-grey lighten-5">
        <form class="col s12" method="post" action="Publication.php">
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
              <button class="btn waves-effect waves-light" type="submit" name="action" value="valider">Publier</button>
            </div>
          </div>
        </form>
      </div>
    </div>

<?php ;}?>
  </body>
</html>