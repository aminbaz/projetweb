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

    <title>Accueil centre</title> 
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
          <h5>Categorie d'activité</h5>
          <div class="collection">
            <a href="Sport.php" class="collection-item">Sport</a>
            <a href="Culturel.php" class="collection-item">Culturel</a>
            <a href="Scolaire.php" class="collection-item">Scolaire</a>
            <a href="Voyage.php" class="collection-item">Voyage</a>
            <a href="Jeu.php" class="collection-item">Jeu</a>
          </div>
       </div>

       
  <?php if (isAdmin()){?>

    <div class="container">
      <h5 class="center-align">Créer une activité</h5>
      <div class="row z-depth-4 blue-grey lighten-5">
        <form class="col s12" method="post" action="controller/Controller_Ajout_Activite.php">          
          <div class="row">
            <div class="input-field col s9">
              <input id="nom" name="nom" type="text" class="validate">
              <label for="nom" data-error="wrong" data-success="right">Intitulé activité</label>
            </div>
          </div>
           <div class="row">
            <div class="input-field col s9">
              <input id="dateactivite" name="dateactivite" type="date" class="validate">
              <label for="dateactivite" data-error="wrong" data-success="right">Date</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <input id="description" name="description" type="text" class="validate">
              <label for="description" data-error="wrong" data-success="right">Description</label>
            </div>
          </div>
           <div class="row">
            <div class="input-field col s9">
              <input id="prix" name="prix" type="number" class="validate">
              <label for="prix" data-error="wrong" data-success="right">Prix</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <input id="typeactivite" name="typeactivite" type="text" class="validate">
              <label for="typeactivite" data-error="wrong" data-success="right">Type</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <button class="btn waves-effect waves-light" type="submit" name="action" value="valider">Ajouter</button>
            </div>
          </div>
        </form>
      </div>
    </div>

<?php ;}?>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
  </body> 
</html>