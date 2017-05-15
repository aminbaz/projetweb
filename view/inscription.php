<!doctype html>
<html lang="fr">
	<head>
		<title>Accueil Test Riasec</title>
		<meta name="Content-Type" content="UTF-8">
		<meta name="Content-Language" content="fr">
		<meta name="Description" content="Gestion d'un centre social ">
		<meta name="Keywords" content="centre social">
		<meta name="Subject" content="Gestion centre social ">
		<meta name="Author" content="Amin BAZAZ">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	    <link rel="stylesheet" href="C:\Users\amin\Desktop\Web\css\materialize\css\materialize.css">
	</head>

	<body>
		 	<div class="container">
			<h5 class="center-align">Inscription</h5>
			<div class="row z-depth-4 blue-grey lighten-5">
				<form class="col s12" method="post" action="/controller/Controller_Inscription.php">
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
							<button class="btn waves-effect waves-light" id="submit" value="valider">Valider</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>