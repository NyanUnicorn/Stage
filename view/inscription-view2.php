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
  <body>
    <?php

      require 'header-view.php';

     ?>

    <main>

      <div class="encart">
        <?php require 'side-nav-view.php'; ?>
      </div>

      <h4>Inscription</h4>

      <div class="row">

        <div class="col-lg-2">

        </div>

        <div class="col-lg-4">

          <form action="inscription.php" method="post">

            <legend>Prout</legend>

            <div class="form">

              <div class="inscription">

                <div class="lbl">

                  <label for="Prenom">Prenom : </label>


                </div>

                <div class="lbl">

                  <label for="Nom">Nom :</label>


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

                </div>

                <div class="lbl">

                  <label for="Ville">Ville :</label>

                </div>

                <div class="lbl">

                  <label for="CP">Code postale :</label>

                </div>

                <div class="lbl">

                  <label for="Adresse">Adresse :</label>

                </div>

                <div class="lbl">

                  <label for="ComplémentA">Complément d'adresse :</label>

                </div>

                <div class="lbl">

                  <label for="tel">Numéro de téléphone :</label>

                </div>

                <div class="lbl">

                  <label for="Profession">Profession :</label>

                </div>

              </div>

            </div>

          </form>

        </div>

        <div class="col-lg-4">

          <form action="inscription.php" method="post">

            <fieldset>

              <legend>Informations Personnelles :</legend>

              <div class="form">

                <div class="inscription">

                  <div class="lbl">

                    <input type="text" name="Prenom" value="" required>

                  </div>

                  <div class="lbl">

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

                    <input type="date" name="DDN" required>

                  </div>

                  <div class="lbl">

                    <input type="text" name="Ville" value="" required>

                  </div>

                  <div class="lbl">

                    <input type="text" name="CP" value="" required>

                  </div>

                  <div class="lbl">

                    <input type="text" name="Adresse" value="" required>

                  </div>

                  <div class="lbl">

                    <input type="textarea" name="ComplémentA" value="">

                  </div>

                  <div class="lbl">

                    <input type="tel" name="tel" placeholder="ex: 06 07 58 50 21" required>

                  </div>

                  <div class="lbl">

                    <input type="text" name="Profession" value="" required>

                  </div>

                </div>

              </div>

                </div>

            </fieldset>

          </form>

        <div class="col-lg-2">

        </div>

      </div>

    </main>

  </body>
</html>
