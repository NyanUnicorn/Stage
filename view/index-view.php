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

							<div class="image-tete_de_page">
								<img class="img_alexandre_velo"  <?php  echo $image['bande']; ?>/>
							</div>
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


				<h2 class="actualites">Actualités</h2>

			</div>

					</main>

					<?php
					require 'footer-view.php';

					?>
				</div>
			</div>
	</div>
</body>

</html>
