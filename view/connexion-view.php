<!DOCTYPE html >
<html  lang="fr" dir="ltr">
	<head>
		<?php
				echo $head;
				echo $stylesheet;
		 ?>
		<meta charset="utf-8">
		<title>Connexion</title>

	</head>

	<body ng-app="lechiroquiroule">
		<div id="page" ng-controller="menuCollapse">
				<div id="page_wrapper" class="page_wrapper">
					<div id="menu_wrapper" class="menu_wrapper">
					<?php  require 'menu-view.php';  ?>
					</div>
					<div id="body" >
						<?php	require 'header-view.php'; ?>
						<main ng-click="untoggleMenu();">
							<div class="encart">
								<?php require 'side-nav-view1.php'; ?>
							</div>
							<div class="main">
								<div class="content-area">
							<div class="content small-content">
								<h4>Veuillez entrer vos identifiants</h4>
							</div>
							<form class="" action="connexion.php" method="post">
								<div class="content small-content">
									<fieldset class="fieldset-form">
										<legend>Vos identifiants</legend>
										<label  for="email">Email :</label>
										<input type="email" name="email" placeholder="Ex: exemple@email.fr" <?php echo 'value="' . htmlentities($emailInput) . '"'; ?> id="email" required>
										<label  for="password">Mot de passe :</label>
										<input type="password" name="password" id="password" required>
									</fieldset>
								</div>
								<div class="content small-content">
									<input class="connectionButton" type="submit" name="ConnectionBouton" value="Se Connecter">
									<div class="stayConnected">
										<input  type="checkbox" name="resteConnecte" value="resteConnecte" id="resteConnecte" />
										<label for="resteConnecte">Rester connecté</label>
									</div>
								</div>
							</form>
							<form class="" action="inscription.php" method="post">
								<div class="content small-content">
									<p>vous n'avez pas encor de compt?</p>
								</div>
								<div class="content small-content">
									<input class="createAcc" type="submit" name="button" value="Créer un compte"/>
								</div>
							</form>
						</div>
</div>
</main>
<?php
require 'footer-view.php';
echo $foot;
?>
</div>
</div>
</div>
</body>
</html>
