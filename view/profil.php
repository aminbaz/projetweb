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

    <title>Profil</title> 
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
        <ul class="collection with-header">
            <li class="collection-header"><h4>Vos informations</h4></li>
            <li class="collection-item"><?php echo $information['nom']; ?></li>
            <li class="collection-item"><?php echo $information['prenom']; ?></li>
            <li class="collection-item"><?php echo $information['sexe']; ?></li>
            <li class="collection-item"><?php echo $information['date_naiss'] ?></li>
            <li class="collection-item"><?php echo $information['mail'] ?></li>
        </ul>
      </div>

      <div class="input-field col s9">
              <a class="btn waves-effect waves-light" href="Modification_Mot_De_Passe.php">Modifier mon mot de passe ?</a>
      </div>
  </body> 
</html>