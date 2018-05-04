<!DOCTYPE html>
<html>
  <head>

    <?php
    		includeExternalHead();
    		echo getStylesheet('style');
    		echo getStylesheet('style_inscription');
     ?>
    <meta charset="utf-8">
    <title>page d'inscription</title>
  </head>
  <body>
    <?php

      require 'header-view.php';

     ?>

    <main>

      <h4>Inscription:</h4>

      <div class="container">

        <div class="flex-container">

          <form method="post" action="inscription.php">

            <fieldset>

              <legend>Informations Personnelles :</legend>

              <div class="form">

                <div class="flex-input">

                  <label for="">Prenom</label>
                  <input type="text" name="" value="" required>

                  <label for="">Nom</label>
                  <input type="text" name="" value="" required>

                  <label for="">Adresse</label>
                  <input type="text" name="" value="" required>

                  <label for="">Date de naissance</label>
                  <input type="date" name="DDN" required>

                  <label for="">Numéro de téléphone</label>
                  <input type="tel" name="" placeholder="ex: 06 07 58 50 21" required>

                  <label for="">Ville</label>
                  <input type="text" name="" value="" required>

                  <label for="">Code postale</label>
                  <input type="text" name="" value="" required>

                  <label for="">Profession</label>
                  <input type="text" name="" value="" required>

                </div>

              </div>

            </fieldset>

            <fieldset>

              <legend>Compte:</legend>

              <div class="form">

                <div class="flex-input">

                  <label for="">Adresse mail</label>
                  <input type="email" name="email" placeholder="Ex: exemple@email.fr" id="email" required>

                  <label for="">Entrez un mot de passe</label>
                  <input type="password" name="pwd" required>

                  <label for="">Comparez votre mot de passe</label>
                  <input type="password" name="confirmationPwd" required>

                  <label for="motif">Indiquer comment vous avez connu ce site</label>
                  <select class="" name="motif">

                    <option value="valeurDefault" selected>Choisir</option>

                    <option value="valeur2">Bouche-à-oreille</option>

                    <option value="valeur3">BDD</option>

                    <option value="valeur4">Autre</option>
                    <!-- Ne pas oublier que si l'utilisateur choisi autre une textarea doit pop -->

                  </select>


                </div>

              </div>

            </fieldset>

          </form>

        </div>

      </div>

    </main>

  </body>
</html>
