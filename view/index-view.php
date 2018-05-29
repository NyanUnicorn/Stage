<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>

	<title>Le Chiro Qui Roule</title>

	<meta charset="utf-8">

	<?php

	echo $head;
	echo $stylesheet;
	?>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<?php	require 'header-view.php'; ?>


	<main>



		<div class="encart">
			<?php require 'side-nav-view1.php'; ?>
		</div>


		<div class="main">

			<div class="image-tete_de_page">
				<img class="img_alexandre_velo"  <?php  echo $image['bande']; ?>/>
			</div>

			<div class="clear-area"></div>

			<div class="content-area">
				<h2 class="presentation">Présentation</h2>

					<p>Bienvenue sur le site du Chiro Qui Roule,
						Le Chiro Qui Roule, c’est l’idée innovante d’Alexandre Chassagne, Chiropracteur depuis Novembre 2016 après avoir passé 6 années d’études à l’Institut Franco Européen de Chiropraxie (lien URL vers le site de mon école https://www.ifec.net/).
						En effet, jeune chiropracteur de 26 ans, décide depuis le premier trimestre 2018 de sillonner les rues de Laval agglomération à vélo accompagné de sa petite table de soins portable posé sur une remorque dans le but de prodiguer des soins chiropratiques à domicile tout en étant éco-responsable.
					</p>

				<h2 class="temoignages">Témoignages</h2>

				<h2 class="actualites">Actualités</h2>

			</div>

		</div>

 </div>


	</main>

	<?php
	require 'footer-view.php';
	echo $foot;
	?>

</body>

</html>
