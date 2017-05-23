<!doctype html> 
<html lang="fr"> 
  <?php require ("view/header.php");?>
 
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

      <div class="input-field col s9  center-align">
              <a class="btn waves-effect waves-light grey" href="Modification_Mot_De_Passe.php">Modifier mon mot de passe ?</a>
      </div>

    <?php require ("view/importscript.php");?>
  </body> 
</html>