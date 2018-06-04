<!DOCTYPE html>
<html  lang="fr" dir="ltr">
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
								use Repository\PageRepository as PageRep;
								$content = PageRep::getParagraphs(str_replace('/', '', str_replace('.php', '', $uri)))->fetchAll();
								$pars = '';
								foreach($content as $cont){
									$pars .= '<h2 id="'.$cont['link_label'].'">'.$cont['title'].'</h2>';
									$pars .= $cont['paragraph'];
								}
								echo $pars;
								 ?>
			</div>
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
