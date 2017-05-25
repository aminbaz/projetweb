<!doctype html> 
<html lang="fr"> 
  <?php require ("view/header.php");?>
 
  <body> 
  <?php require ("view/entete.php");?>
       <div class="container"> 
      <div class="row z-depth-4 grey lighten-5"> 
        <form class="col s12" method="post" action="controller/Controller_Inscription.php"> 
        <h5 class="center-align">Inscription</h5> 
          <div class="row"> 
            <div class="input-field col s9"> 
              <input id="nom" name="nom" type="text" class="validate"> 
              <label for="nom" data-error="wrong" data-success="right">Nom</label> 
            </div> 
          </div> 
          <div class="row"> 
            <div class="input-field col s9"> 
              <input id="prenom" name="prenom" type="text" class="validate"> 
              <label for="prenom" data-error="wrong" data-success="right">Prénom</label> 
            </div> 
          </div> 




          <div class="row"> 
            <div class="input-field col s9"> 
              <input id="sexe" name="sexe" type="text" class="validate"> 
              <label for="sexe" data-error="wrong" data-success="right">Sexe</label> 
            </div> 
          </div> 


          <div class="input-field col s12">
            <select>
              <option value="" disabled selected>Choose your option</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
            <label>Materialize Select</label>
          </div>






          <div class="row"> 
            <div class="input-field col s9"> 
              <input id="dateNaiss" name="dateNaiss" type="date" class="validate"> 
              <label for="dateNaiss" data-error="wrong" data-success="right">Date de naissance</label> 
            </div> 
          </div>        
          <div class="row"> 
            <div class="input-field col s9"> 
              <input id="email" name="email" type="email" class="validate"> 
              <label for="email" data-error="wrong" data-success="right">Email</label> 
            </div> 
          </div> 
          <div class="row"> 
            <div class="input-field col s9"> 
              <input id="password" name="password" type="password" class="validate"> 
              <label for="password" data-error="wrong" data-success="right">Mot de passe</label> 
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
              <button class="btn waves-effect waves-light grey" id="submit" value="valider">Valider</button> 
            </div> 
          </div> 
        </form> 
      </div> 
    </div> 
  <?php require ("view/importscript.php");?>
  </body> 
</html>