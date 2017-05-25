<?php require_once ("controller/Controller_Test_Connexion.php");?>


  <nav>
    <div class="nav-wrapper grey">
      <a href="Accueil.php" class="brand-logo">Centre social de Naillac</a>
      <a href="Accueil.php" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">toc</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="Accueil.php">Accueil</a></li>
		<?php if(isConnected() and isAdmin()){?><li><a href="Espace.php">Gestion</a></li><?php } ?>
		<?php if(isConnected()){?><li><a href="Profil.php">Mes informations</a></li><?php } ?>
		<?php if(isConnected()){?><li><a href="Activite.php">Activité</a></li><?php } ?>
		<?php if(isConnected() and !isAdmin()){?><li><a href="Activite_Spec.php">Mes activités</a></li><?php } ?>
		<?php if(!isConnected()){?><li><a href="Connexion.php">Connexion</a></li><?php } ?>
		<?php if(!isConnected()){?><li><a href="Inscription.php">Inscription</a></li><?php } ?>
		<?php if(isConnected()){?><li><a href="Deconnexion.php">Deconnexion</a></li><?php } ?>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <<li><a href="Accueil.php">Accueil</a></li>
		<?php if(isConnected() and isAdmin()){?><li><a href="Espace.php">Gestion</a></li><?php } ?>
		<?php if(isConnected()){?><li><a href="Profil.php">Mes informations</a></li><?php } ?>
		<?php if(isConnected()){?><li><a href="Activite.php">Activité</a></li><?php } ?>
		<?php if(isConnected() and !isAdmin()){?><li><a href="Activite_Spec.php">Mes activités</a></li><?php } ?>
		<?php if(!isConnected()){?><li><a href="Connexion.php">Connexion</a></li><?php } ?>
		<?php if(!isConnected()){?><li><a href="Inscription.php">Inscription</a></li><?php } ?>
		<?php if(isConnected()){?><li><a href="Deconnexion.php">Deconnexion</a></li><?php } ?>
      </ul>
    </div>
  </nav>

  <br>