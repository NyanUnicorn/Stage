<!DOCTYPE html>
<html  lang="fr" dir="ltr">
  <head>

    <?php
    		echo $head;
    		echo $stylesheet;
     ?>
    <meta charset="utf-8">
    <title>page d'inscription</title>
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

      <h4>Inscription:</h4>

      <div class="row">

        <div class="col-lg-2">

        </div>

        <div class="col-lg-8">




          <form method="post" action="inscription.php">

            <fieldset>

              <legend>Informations Personnelles :</legend>

              <div class="form">

                <div class="inscription">

                  <div class="lbl">

                    <label for="Prenom">Prenom : </label>
                    <input type="text" name="Prenom" value="" required>

                  </div>

                  <div class="lbl">

                    <label for="Nom">Nom :</label>
                    <input type="text" name="Nom" value="" required>


                  </div>

                  <div class="lbl">
                    <span class="lbl">Civilité :</span>
                    <input name="civ" type="radio" id="civ_f" />
                    <label for="civ_f">Femme</label>
                    <input name="civ" type="radio" id="civ_h" />
                    <label for="civ_h">Homme</label>
                  </div>

                  <div class="lbl">

                    <label for="DDN">Date de naissance :</label>
                    <input type="date" name="DDN" required>

                  </div>

                  <div class="lbl">

                    <label for="Ville">Ville :</label>
                    <input type="text" name="Ville" value="" required>

                  </div>

                  <div class="lbl">

                    <label for="CP">Code postale :</label>
                    <input type="text" name="CP" value="" required>

                  </div>

                  <div class="lbl">

                    <label for="Adresse">Adresse :</label>
                    <input type="text" name="Adresse" value="" required>

                  </div>

                  <div class="lbl">

                    <label for="ComplémentA">Complément d'adresse :</label>
                    <input type="textarea" name="ComplémentA" value="">

                  </div>

                  <div class="lbl">

                    <label for="tel">Numéro de téléphone :</label>
                    <input type="tel" name="tel" placeholder="ex: 06 07 58 50 21" required>

                  </div>

                  <div class="lbl">

                    <label for="Profession">Profession :</label>
                    <input type="text" name="Profession" value="" required>

                  </div>

                </div>

              </div>

            </fieldset>

            <fieldset>

              <legend>Compte:</legend>

              <div class="form">

                <div class="inscription">

                  <div class="lbl">

                    <label for="">Adresse mail</label>
                    <input type="email" name="email" placeholder="Ex: exemple@email.fr" id="email" required>

                  </div>

                  <div class="lbl">

                    <label for="">Entrez un mot de passe</label>
                    <input type="password" name="pwd" required>

                  </div>

                  <div class="lbl">

                    <label for="">Comparez votre mot de passe</label>
                    <input type="password" name="confirmationPwd" required>

                  </div>

                  <div class="lbl">

                    <label for="motif">Indiquer comment vous avez connu ce site</label>
                    <select class="" name="motif">

                      <option value="valeurDefault" selected>Choisir</option>

                      <option value="valeur2">Bouche-à-oreille</option>

                      <option value="valeur3">BDD</option>

                      <option value="valeur4">Autre</option>
                      <!-- Ne pas oublier que si l'utilisateur choisi "autre" une textarea doit pop -->

                    </select>

                  </div>


                    <input class="ConnectionBouton" type="submit" value="Submit">

                </div>

              </div>

            </fieldset>

          </form>
        </div>
        <div class="col-lg-2">
        </div>

      </div>

    </main>

  </body>
</html>
