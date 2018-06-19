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

                    <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
                      <h4>Mes Informations</h4>
                      <form class="userForm" action="user-profile.php" method="post">

                        <label class="userLabel" for="prenom">Prenom :</label>
                        <input class="userInput" type="text" name="prenom" id="prenom" value=<?php echo '"' . $USER->getNom() . '"' ;  ?>>

                        <label class="userLabel" for="nom">Nom :</label>
                        <input class="userInput" type="text" name="nom" value=<?php echo '"' . $USER->getPre() . '"' ; ?>>

                        <label class="userLabel" for="email">Email :</label>
                        <input class="userInput" type="text" name="email" value=<?php echo '"' . $USER->getEmail() . '"' ; ?>>

                        <label class="userLabel" for="adresse">Adresse :</label>
                        <input class="userInput" type="text" name="adresse" value=<?php echo '"' . $USER->getAdresse() . '"' ; ?>>

                        <label class="userLabel" for="complement">Complement :</label>
                        <input class="userInput" type="text" name="complement" value=<?php echo '"' . $USER->getCompAdresse() . '"' ; ?>>

                        <label class="userLabel" for="ville">Ville :</label>
                        <input class="userInput" type="text" name="ville" value=<?php echo '"' . $USER->getVille() . '"' ; ?>>

                        <label class="userLabel" for="cd_postale">Code Postale :</label>
                        <input class="userInput" type="text" name="cd_postale" value=<?php echo '"' . $USER->getCodePostale() . '"' ; ?>>

                        <label class="userLabel" for="tel">Téléphone :</label>
                        <input class="userInput" type="text" name="tel" value=<?php echo '"' . $USER->getTel() . '"' ; ?>>

                        <label class="userLabel" for="profession">Profession :</label>
                        <input class="userInput" type="text" name="profession" value=<?php echo '"' . $USER->getProfession() . '"' ; ?>>

                        <label class="userLabel" for="profession">Mot de Passe :</label>
                        <input class="userInput" type="password" name="password">


                        <label class="userLabel" for="newsletter">Abonnement a la newsletter :</label>



                        <div class="">
                          <label class="nlInput">
                            <input type="radio" name="newsletter" id="option1" value="1" autocomplete="off" <?php if($USER->getNewsletter() == 1){echo 'checked';} ?>> Oui
                          </label>
                          <label class="nlInput">
                            <input type="radio" name="newsletter" id="option2" value="0" autocomplete="off" <?php if($USER->getNewsletter() == 0){echo 'checked';} ?>> Non
                          </label>
                        </div>

                        <div class="">

                        </div>
                        <div class="">

                        </div>
                        <div class="">
                          <button class="RDVButton" type="submit" name="button">Enregistrer les changements</button>
                        </div>

                      </form>


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
