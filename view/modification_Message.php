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

    <title>Modification Message</title> 
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
      <h5 class="center-align">Modification Message</h5>
      <div class="row z-depth-4 blue-grey lighten-5">
        <form class="col s12" method="post" action="controller/Controller_Maj_Message.php">
          <div class="row">
            <div class="input-field col s9">
              <input id="titre" name="titre" type="text" class="validate" value=<?php echo $information['lib_message'] ?>>
              <label for="titre" data-error="wrong" data-success="right">Titre du message</label>
            </div>
          </div>
         <div class="row">
            <div class="input-field col s9">
              <input id="dateMes" name="dateMes" type="date" class="validate" value=<?php echo $information['date_message'] ?>>
              <label for="dateMes" data-error="wrong" data-success="right">Date de publication</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <input id="texte" name="texte" type="text" class="validate" value=<?php echo $information['texte_message'] ?>>
              <label for="texte" data-error="wrong" data-success="right">Texte</label>
            </div>
          </div>
          <input type="hidden" name="id_message" id="id_message" value=<?php echo $information['id_message'] ?>>
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