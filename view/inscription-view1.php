<!DOCTYPE html>
<html>
  <head>
    <?php
    		echo $head;
    		echo $stylesheet;
        use Service\Form;
     ?>
    <meta charset="utf-8">
    <title>page d'inscription</title>
  </head>
  <body>
    <?php require 'header-view.php'; ?>
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
                    <input type="text" name="prenom" id="prenom" <?php echo Form::resetUserInput('prenom'); ?> required>
                    <label for="nom">Nom : </label>
                    <input type="text" name="nom" id="nom" <?php  echo Form::resetUserInput('nom'); ?> required>
                    <div class="radio-set">
                      <label class="name">Civilité : </label>
                      <div class="radio-set-2">
                        <input type="radio" name="civ" id="femme" <?php  ?> required>
                        <label for="femme">Femme</label>
                      </div>
                      <div class="radio-set-2">
                        <input type="radio" name="civ" id="homme" <?php   ?> required>
                        <label for="homme">Homme</label>
                      </div>
                    </div>
                    <label for="ddn">Date de Naissance</label>
                    <div class="input-container">
                      <input type="date" name="ddn" id="" <?php  echo Form::resetUserInput('ddn'); ?> required>
                    </div>
                    <label for="ville">Ville : </label>
                    <input type="text" name="ville" id="ville" <?php  echo Form::resetUserInput('ville'); ?> required>
                    <label for="cp">Code Postale : </label>
                    <input type="text" name="cp" id="cp" <?php  echo Form::resetUserInput('cp'); ?> required>
                    <label for="adresse">Adresse : </label>
                    <input type="text" name="adresse" id="adresse" <?php  echo Form::resetUserInput('adresse'); ?> required>
                    <label for="cadresse">Complément d'adresse : </label>
                    <input type="text" name="cadresse" id="cadresse" <?php  echo Form::resetUserInput('cadresse'); ?> required>
                    <label for="phone">Numéro de téléphone : </label>
                    <input type="tel" name="phone" id="phone" <?php  echo Form::resetUserInput('phone'); ?> required>
                    <label for="profession">Profession : </label>
                    <input type="text" name="profession" id="profession" <?php  echo Form::resetUserInput('profession'); ?> required>
                  </fieldset>
                </div>
                <div class="content large-content">
                <fieldset>
                  <legend>Compte</legend>
                  <label for="email">Email : </label>
                  <input type="email" name="email" id="email" <?php  echo Form::resetUserInput('email'); ?> required>
                  <label for="confirmEmail">Confirmation Email : </label>
                  <input type="email" name="confirmEmail" id="confirmEmail" required>
                  <label for="pswd">Mot de Passe : </label>
                  <input type="password" name="pswd" id="pswd" required>
                  <label for="confirmPswd">Confiration mot de passe : </label>
                  <input type="password" name="confirmPswd" id="confirmPswd" required>
                  <label for="motif">Motif : </label>
                  <div class="input-container">
                    <select class="" name="motif" required>
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
                  <div class="newsLetter-check">
                    <input type="checkbox" name="newsletter" id="newsletter" checked="checked">
                    <label for="newsletter">Voulez vous être abonné à la newsletter ?</label>
                  </div>
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
