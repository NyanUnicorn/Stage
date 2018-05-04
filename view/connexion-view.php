<!DOCTYPE html>
<html>
<head>

<?php
		echo getStylesheet('style');
		echo getStylesheet('style_connexion');
 ?>

	<title>page de connection</title>

</head>

<body>

<?php

	require 'header-view.php';

 ?>

<main>

	<h4>Veuillez entrez vos identifiants et mot de passe:</h4>
<div class="container">

		<div class="flex-container">

			<form method="post" action="connection.php">

				<fieldset>

						<legend>Vos identifiants</legend>
						<div class="form">
								<div class="flex-input">
									<label for="email">Email :</label>
									<input type="email" name="email" placeholder="Ex: exemple@email.fr" id="email" required>
								</div>

								<div class="flex-input">
									<label for="password">Mot de passe :</label>
									<input type="password" name="password" id="password" required>
								</div>

						</div>

			</fieldset>

				<input class="ConnectionBouton" type="submit" name="ConnectionBouton" value="Se Connecter">

				<div class="checkbox">
						 <input type="checkbox" name="resteConnecte" value="resteConnecte" id="resteConnecte" />
						 <label for="resteConnecte">Rester connecté</label>
				</div>

			</form>

		</div>

		<div class="clearfix"></div>

</div>


</main>

</body>
</html>
