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

    <title>Modification Activité</title> 
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
      <h5 class="center-align">Modification Activité</h5>
      <div class="row z-depth-4 blue-grey lighten-5">
        <form class="col s12" method="post" action="controller/Controller_Maj_Activite.php">
          <div class="row">
            <div class="input-field col s9">
              <input id="nom" name="nom" type="text" class="validate" value=<?php echo $information['nom_activite'] ?>>
              <label for="nom" data-error="wrong" data-success="right">Nom</label>
            </div>
          </div>
         <div class="row">
            <div class="input-field col s9">
              <input id="dateAct" name="dateAct" type="date" class="validate" value=<?php echo $information['date_activite'] ?>>
              <label for="dateAct" data-error="wrong" data-success="right">Date activité</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <input id="description" name="description" type="text" class="validate" value=<?php echo $information['description'] ?>>
              <label for="description" data-error="wrong" data-success="right">description</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <input id="prix" name="prix" type="number" class="validate" value=<?php echo $information['prix'] ?>>
              <label for="prix" data-error="wrong" data-success="right">Prix</label>
            </div>
          </div>
          <input type="hidden" name="id_activite" id="id_activite" value=<?php echo $information['id_activite'] ?>>
          <div class="row">
            <div class="input-field col s9">
              <button class="btn waves-effect waves-light" type="submit" id="submit" value="valider">Modifier
                <i class="material-icons right">send</i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>  



  </body> 
</html>