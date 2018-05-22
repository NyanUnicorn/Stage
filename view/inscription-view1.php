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

    	<div class="row no-pad">
    		<div class="col-xs-1 col-lg-0"></div>
    		<div class="col-xs-10 col-lg-12">
    			<div class="row">
    				<div class="col-xs-0 col-lg-2"></div>
    				<div class="col-xs-12 col-lg-8">


              <div class="content large-content">
                <h4>Inscription:</h4>
              </div>
              <form class="" action="inscription.php" method="post">
                <div class="content large-content">
                  <fieldset>
                    <legend>Informations Personnelles</legend>
                    <label for="prenom">Prenom : </label>
                    <input type="text" name="prenom" id="" value="" required>
                    <label for="nom">Nom : </label>
                    <input type="text" name="nom" id="" value="" required>
                    <div class="radio-set">
                      <label class="name">Civilité : </label>
                      <div class="radio-set-2">
                        <input type="radio" name="civ" id="" id="femme" value="">
                        <label for="femme">Femme</label>
                      </div>
                      <div class="radio-set-2">
                        <input type="radio" name="civ" id="" id="homme" value="">
                        <label for="homme">Homme</label>
                      </div>
                    </div>
                    <label for="ddn">Date de Naissance</label>
                    <div class="input-container">
                      <input type="date" name="ddn" id="" value="">
                    </div>
                    <label for="ville">Ville : </label>
                    <input type="text" name="ville" id="" value="">
                    <label for="cp">Code Postale : </label>
                    <input type="text" name="cp" id="" value="">
                    <label for="adresse">Adresse : </label>
                    <input type="text" name="adresse" id="" value="">
                    <label for="cadresse">Complément d'adresse : </label>
                    <input type="text" name="cadresse" id="" value="">
                    <label for="phone">Numéro de téléphone : </label>
                    <input type="tel" name="phone" id="" value="">
                    <label for="profession">Profession : </label>
                    <input type="text" name="profession" id="" value="">

                  </fieldset>
                </div>
                <div class="content large-content">
                <fieldset>
                  <legend>Compte</legend>
                    <label for="email">Email : </label>
                    <input type="email" name="email" id="email" value="">
                    <label for="confirmEmail">Confirmation Email : </label>
                    <input type="email" name="confirmEmail" id="confirmEmail" value="">
                    <label for="pswd">Mot de Passe : </label>
                    <input type="password" name="pswd" id="pswd" value="">
                    <label for="confirmPswd">Confiration mot de passe : </label>
                    <input type="password" name="confirmPswd" id="confirmPswd" value="">
                    <label for="motif">Motif : </label>
                    <div class="input-container">
                      <select class="" name="motif">
                        <option value="valeurDefault" selected>Choisir</option>
                        <option value="valeur2">Bouche-à-oreille</option>
                        <option value="valeur3">BDD</option>
                        <option value="valeur4">Autre</option>
                      </select>
                    </div>
                </fieldset>
                </div>
                <div class="content medium-content">
                  <input class="createAcc" type="submit" value="Enregistrer"/>
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
