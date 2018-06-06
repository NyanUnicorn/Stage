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
								<?php
								use Service\Content;
								echo Content::generateParagraphs($uri);
								//Content::getReviews();
								 ?>
								<h2 class="temoignages">Témoignages</h2>
								<?php
									echo Content::getReviews();
								 ?>
							</div>
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
