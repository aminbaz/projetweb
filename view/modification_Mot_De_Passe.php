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

    <title>Mot de passe</title> 
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

    <div class="container">
      <h5 class="center-align">Modification mot de passe</h5>
      <div class="row z-depth-4 blue-grey lighten-5">
        <form class="col s12" method="post" action="controller/Controller_Changement_Mot_De_Passe.php">
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
              <button class="btn waves-effect waves-light" id="submit" value="valider">Modifier
                <i class="material-icons right">send</i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>    



  </body> 
</html>