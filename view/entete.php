<?php require_once ("controller/Controller_Test_Connexion.php");?>
<nav>
	<div class="nav-wrapper grey">
		<a href="view/accueil.php" class="brand-logo left">Centre social de Naillac</a>
		<ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="Accueil.php">Accueil</a></li>
			<?php if(isConnected() and isAdmin()){?><li><a href="Espace.php">Gestion</a></li><?php } ?>
			<?php if(isConnected()){?><li><a href="Profil.php">Mes informations</a></li><?php } ?>
			<?php if(isConnected()){?><li><a href="view/activite.php">Activité</a></li><?php } ?>
			<?php if(isConnected() and !isAdmin()){?><li><a href="Activite_Spec.php">Mes activités</a></li><?php } ?>
			<?php if(!isConnected()){?><li><a href="controller/Controller_Page_Connexion.php">Connexion</a></li><?php } ?>
			<?php if(!isConnected()){?><li><a href="Inscription.php">Inscription</a></li><?php } ?>
			<?php if(isConnected()){?><li><a href="controller/Controller_Deconnexion.php">Deconnexion</a></li><?php } ?>
		</ul>
	</div>
</nav>
<br>