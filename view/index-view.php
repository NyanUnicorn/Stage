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
								<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fcyril.khatin%2Fposts%2F10156585284184363%3A0&width=500" width="500" height="374" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
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
