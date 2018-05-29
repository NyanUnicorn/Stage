<!DOCTYPE html>
<html>
<head>

	<title>Le Chiro Qui Roule</title>

	<meta charset="utf-8">

	<?php
			includeExternalHead();
			echo getStylesheet('style');
			echo getStylesheet('style_form');
			echo getStylesheet('style_menu');
	 ?>

</head>
<body>
	<?php

		require 'header-view.php';

	 ?>

	<main>

		<div class="encart">
			<?php require 'side-nav-view1.php'; ?>
		</div>

		<div class="container">

			<h2 class="Parties">S'abonnez à la Newsletter Chiro</h2>

			<h3 class="SousParties">S’inscrire à la Newsletter Chiro</h3>

			<p>Afin de s'inscrire à la Newsletter Chiro, veuillez cliquez sur le lien juste en dessous</p>

			<p>Ce lien ne mène nulle part <a href="#">Lol</a>.</p>

			<p>Lien vers une page où il faut s’enregistrer avec son mail pour les non membres ou bien on peut directement s’inscrire en cochant une case quand on crée son compte sur le site.</p>

			<p><i class="chevron fab fa-facebook fa-spin"></i>Le Chiro qui roule</p>
		    <p><i class="chevron fab fa-instagram fa-spin"></i>Lechiroquiroule</p>
		    <p>Se renseigner sur la <a target="_blank" href="http://www.chiropraxie.com/">chiropraxie</a>.</p>
		    <p>Se renseigner sur l'<a target="_blank" href="http://www.who.int/fr/">Organisation Mondiale de la santé</a>.</p>
		    <p>Se renseigner sur l'association <a target="_blank" href="http://www.kheirdafrik.com/">Kheir d’Afrik</a>.</p>


		</div>

	</main>


	<?php

		require 'footer-view.php';
		includeExternalFoot();

	 ?>

</body>

</html>
