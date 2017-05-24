<!doctype html> 
<html lang="fr"> 
  <?php require ("view/header.php");?>
 
  <body> 
  <?php require ("view/entete.php");?>

       <div class="container">
          <div class="collection">
            <h5 class="center-align">Categorie d'activité</h5>
            <a href="Sport.php" class="collection-item brown-text">Sport</a>
            <a href="Culturel.php" class="collection-item brown-text">Culturel</a>
            <a href="Scolaire.php" class="collection-item brown-text">Scolaire</a>
            <a href="Voyage.php" class="collection-item brown-text">Voyage</a>
            <a href="Jeu.php" class="collection-item brown-text">Jeu</a>
          </div>
       </div>

       
  <?php if (isAdmin()){?>

    <div class="container">
      <div class="row z-depth-4 grey lighten-5">
        <form class="col s12" method="post" action="controller/Controller_Ajout_Activite.php">  
          <h5 class="center-align">Créer une activité</h5>        
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
              <label for="prix" data-error="wrong" data-success="right">Prix (champs non obligatoire)</label>
            </div>
          </div>



          <div class="row">
            <select>
              <option value="" disabled selected>Choose your option</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
          </div>

          <div class="row">
            <div class="input-field col s9">
              <input id="categorie" name="categorie" type="text" class="validate">
              <label for="categorie" data-error="wrong" data-success="right">Categorie d'âge des adhérents (champs non obligatoire)</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <button class="btn waves-effect waves-light grey" type="submit" name="action" value="valider">Ajouter</button>
            </div>
          </div>
        </form>
      </div>
    </div>

<?php ;}?>

     <?php require ("view/importscript.php");?>
  </body> 
</html>