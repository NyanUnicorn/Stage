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

  								 ?>
                   <div class="container">

                   </div>
                   <div class="row">
                     <div class="col-lg-5">
                       <div id="list-example" class="list-group">
                        <a class="list-group-item list-group-item-action" href="#list-item-1">Mes Informations</a>
                        <a class="list-group-item list-group-item-action" href="#list-item-2">Mes Rendez-Vous</a>
                        <a class="list-group-item list-group-item-action" href="#list-item-3">Newsletter</a>
                      </div>
                     </div>
                     <div class="col-lg-7">

                     </div>


                    </div>
                    <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
                      <h4 id="list-item-1">Mes Informations</h4>
                      <form class="userForm" action="index.html" method="post">

                        <label class="userLabel" for="prenom">Prenom :</label>
                        <input class="userInput" type="text" name="" value="<?php ?>">

                        <label class="userLabel" for="nom">Nom :</label>
                        <input class="userInput" type="text" name="" value="<?php ?>">

                        <label class="userLabel" for="email">Email :</label>
                        <input class="userInput" type="text" name="" value="<?php ?>">

                        <label class="userLabel" for="adresse">Adresse :</label>
                        <input class="userInput" type="text" name="" value="<?php ?>">

                        <label class="userLabel" for="complement">Complement :</label>
                        <input class="userInput" type="text" name="" value="<?php ?>">

                        <label class="userLabel" for="ville">Ville :</label>
                        <input class="userInput" type="text" name="" value="<?php ?>">

                        <label class="userLabel" for="cd_postale">Code Postale :</label>
                        <input class="userInput" type="text" name="" value="<?php ?>">

                        <label class="userLabel" for="tel">Téléphone :</label>
                        <input class="userInput" type="text" name="" value="<?php ?>">

                        <label class="userLabel" for="profession">Profession :</label>
                        <input class="userInput" type="text" name="" value="<?php ?>">

                        <button class="RDVButton" type="submit" name="button">Enregistrer les changements</button>
                      </form>

                      <h4 id="list-item-2">Mes Rendes-Vous</h4>
                        
                      <h4 id="list-item-3">Newsletter</h4>
                      <div class="userItem">
                        <p>Abonné à la newsletter:</p>
                        <label class="nlInput">
                          <input type="radio" name="options" id="option1" autocomplete="off" checked> Oui
                        </label>
                        <label class="nlInput">
                          <input type="radio" name="options" id="option2" autocomplete="off"> Non
                        </label>
                      </div>
                   </div>



                  </div>
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
