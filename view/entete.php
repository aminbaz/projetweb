<?php require_once ("controller/Controller_Test_Connexion.php");?>
<nav>
	<div class="nav-wrapper">
		<a href="/Accueil.php" class="brand-logo left">Centre social de Naillac</a>
		<ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="Accueil.php">Accueil</a></li>
			<?php if(isConnected()){?><li><a href="Espace.php">Espace Personnel</a></li><?php } ?>
			<?php if(isConnected()){?><li><a href="Profil.php">Mon profil</a></li><?php } ?>
			<?php if(isConnected()){?><li><a href="Activite.php">Activité</a></li><?php } ?>
			<?php if(!isConnected()){?><li><a href="Connexion.php">Connexion</a></li><?php } ?>
			<?php if(!isConnected()){?><li><a href="Inscription.php">Inscription</a></li><?php } ?>
			<?php if(isConnected()){?><li><a href="Deconnexion.php">Deconnexion</a></li><?php } ?>
		</ul>
	</div>
</nav>
<br>