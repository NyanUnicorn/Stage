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
							<div class="content-area">
								<?php
								use Service\Content;
								echo Content::generateParagraphs($uri);
								 ?>

							<h2 class="Parties">Le World Chiropractic Bike Tour</h2>

							<h3 class="SousParties">Description du projet humanitaire</h3>

							<p>Le World Chiropractic Bike Tour est un projet humanitaire qui a été imaginé et crée par Alexandre Chassagne, votre chiropracteur, en 2017 lors de son voyage à vélo autour de l’Europe.</p>

							<p>Cette organisation vise à aller aider des populations dans un pays défavorisé, grâce à la chiropraxie, tout en se déplaçant à vélo.</p>

							<p>Les missions dureront probablement entre 2 et 3 semaines et seront préparés en amont.</p>

							<p>Pour l’instant, la prochaine mission n’est pas définie mais n’hésitez à demander des nouvelles à votre chiropracteur.</p>

							<p>Vous pouvez aussi me contacter et suivre mon actualité sur <a class="lienReseauxSociaux" href="https://www.facebook.com/Lechiroquiroule/" target = "_blank">facebook</a></p>



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
