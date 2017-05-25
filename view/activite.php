<!doctype html> 
<html lang="fr"> 
  <?php require ("view/header.php");?>
 
  <body> 
  <?php require ("view/entete.php");?>

       <div class="container">
          <div class="collection">
            <h5 class="center-align">Catégorie d'activité</h5>
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
              <input id="dateactivite" name="dateactivite" type="date" class="datepicker">
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
            <div class="input-field col s9">
              <input id="place" name="place" type="number" class="validate">
              <label for="place" data-error="wrong" data-success="right">Nombre de place</label>
            </div>
          </div>
          <div class="row"> 
            <div class="input-field col s9">
              <select name="typeactivite">
                <option value="" disabled selected>Choisir</option>
                <option value="sport">Sport</option>
                <option value="culturel">Culturel</option>
                <option value="scolaire">Scolaire</option>
                <option value="voyage">Voyage</option>
                <option value="jeu">Jeu</option>
              </select>
              <label>Type d'activité</label>
            </div>
          </div> 

          <div class="row"> 
            <div class="input-field col s9">
              <select name="categorie">
                <option value="" disabled selected>Choisir</option>
                <option value="-10"> moins de 10 ans</option>
                <option value="-15">moins de 15 ans</option>
                <option value="-20">moins de 20 ans</option>
                <option value="+21">plus de 21 ans</option>
              </select>
              <label>Catégorie d'âge (champs non obligatoire)</label>
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