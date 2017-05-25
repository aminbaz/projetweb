<!doctype html> 
<html lang="fr"> 
  <?php require ("view/header.php");?>
 
  <body> 
  <?php require ("view/entete.php");?>
	 <div class="container">
      <div class="row z-depth-4 grey lighten-5">
        <form  method="post" action="controller/Controller_Role.php">  
        <div class="col m6">
          <h5 class="center-align">Attribution rôle</h5>        
            <div class="row">
              <div class="input-field col s9">
                <input id="email" name="email" type="email" class="validate">
                <label for="email" data-error="wrong" data-success="right">Email</label>
              </div>
            </div>
            <div class="row"> 
            <div class="input-field col s9">
              <select name="role">
                <option value="" disabled selected>Choisir</option>
                <option value="adherent">Adhérent</option>
                <option value="animateur">Animateur</option>
                <option value="administrateur">Administrateur</option>
              </select>
              <label>Rôle</label>
            </div>
          </div> 
            <div class="row">
              <div class="input-field col s9">
                <button class="btn waves-effect waves-light grey" type="submit" name="action" value="valider">Changement</button>
              </div>
            </div>
          </div>
        </form>
      
        <form  method="post" action="Publication.php">
        <div class="col m6">
        <h5 class="center-align">Publier un message</h5>
          <div class="row">
            <div class="input-field col s9">
              <input id="titre" name="titre" type="text" class="validate">
              <label for="titre" data-error="wrong" data-success="right">Titre de la publication</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <input id="texte" name="texte" type="text" class="materialize-textarea">
              <label for="texte" data-error="wrong" data-success="right">Saisir le message</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <button class="btn waves-effect waves-light grey" type="submit" name="action" value="valider">Publier</button>
            </div>
          </div>
          </div>
        </form>

   
     

      </div>
    </div>
    

    <div class="container">
      <div class="row z-depth-4 grey lighten-5">
       <form  method="post" action="Modification_Utilisateur.php">
          <h5 class="center-align">Changement donnée d'un utilisateur</h5>
            <div class="row" style="margin-left: 0rem;  margin-right: 0rem; ">
              <div class="input-field col s9">
                <input id="email" name="email" type="email" class="validate">
                <label for="email" data-error="wrong" data-success="right">Email</label>
              </div>
            </div>
            <div class="row" style="margin-left: 0rem;  margin-right: 0rem; ">
              <div class="input-field col s9">
                <button class="btn waves-effect waves-light grey" type="submit" name="action" value="valider">Changement</button>
              </div>
            </div>
        </form>
      </div>
      </div>

<?php require ("view/importscript.php");?>
  </body>
</html>