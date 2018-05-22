<!DOCTYPE html>
<html>
  <head>

    <?php
    		echo $head;
    		echo $stylesheet;
     ?>
    <meta charset="utf-8">
    <title>page d'inscription</title>
  </head>
  <body>
    <?php
      require 'header-view.php';
     ?>

    <main>

    	<div class="row">
    		<div class="col-xs-1 col-lg-0"></div>
    		<div class="col-xs-10 col-lg-12">
    			<div class="row">
    				<div class="col-xs-0 col-lg-2"></div>
    				<div class="col-xs-12 col-lg-8">


              <div class="content .medium-content">
                <h4>Inscription:</h4>
              </div>
              <form class="" action="inscription.php" method="post">
                <div class="content .medium-content">
                  <fieldset>
                    <legend>Informations Personnelles</legend>
                    <label for="prenom">Prenom : </label>
                    <input type="text" name="prenom" value="" required>
                    <label for="nom">Nom : </label>
                    <input type="text" name="nom" value="" required>
                    <div class="radio-set">
                      <label class="name">Civilité : </label>
                      <div class="radio-set-2">
                        <input type="radio" name="civ" id="femme" value="">
                        <label for="femme">Femme</label>
                      </div>
                      <div class="radio-set-2">
                        <input type="radio" name="civ" id="homme" value="">
                        <label for="homme">Homme</label>
                      </div>

                    </div>
                    <label for="ddn">Date de Naissance</label>
                    <input type="date" name="ddn" value="">
                    <label for="ville">Ville : </label>
                    <input type="text" name="ville" value="">
                    <label for="cp">Code Postale : </label>
                    <input type="text" name="cp" value="">
                    <label for="adresse">Adresse : </label>
                    <input type="text" name="adresse" value="">
                    <label for="cadresse">Complément d'adresse : </label>
                    <input type="text" name="cadresse" value="">
                    <label for="phone">Numéro de téléphone : </label>
                    <input type="tel" name="phone" value="">
                    <label for="profession">Profession : </label>
                    <input type="text" name="profession" value="">

                  </fieldset>

                </div>
              </form>

    				</div>
    				<div class="col-xs-0 col-lg-2"></div>
    			</div>
    		</div>
    		<div class="col-xs-1 col-lg-0"></div>
    	</div>



    </main>
    <?php
    	require 'footer-view.php';
    	echo $foot;
     ?>


  </body>
</html>
