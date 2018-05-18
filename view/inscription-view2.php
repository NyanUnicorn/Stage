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

      <div class="encart">
  			<?php require 'side-nav-view.php'; ?>
  		</div>

      <h4>Inscription:</h4>

      <div class="container">

        <form method="post" action="inscription.php">

          <div class="row">

            <div class="col-25">

              <label for="Prenom">Prenom :</label>

            </div>

            <div class="col-75">

              <input type="text" id="Prenom" name="Prenom" placeholder="Votre Prénom.." required>

            </div>

          </div>

          <div class="row">

            <div class="col-25">

              <label for="Nom">Nom :</label>

            </div>

            <div class="col-75">

              <input type="text" id="Nom" name="Nom" placeholder="Votre Nom.." required>

            </div>

          </div>

          <div class="row">

            <div class="col-25">

              <label for="Civilité">Civilité :</label>

            </div>

            <div class="col-75">

              <select id="Civilité" name="Civilité">

                <option value="Femme">Femme</option>

                <option value="Homme">Homme</option>

              </select>

            </div>

          </div>

          <div class="row">

            <div class="col-25">

              <label for="DDN">Date de Naissance :</label>

            </div>

            <div class="col-75">

              <input type="date" id="DDN" name="DDN" required>

            </div>

          </div>

          <div class="row">

            <div class="col-25">

              <label for="Ville">Ville :</label>

            </div>

            <div class="col-75">

              <input type="text" id="Ville" name="Ville" placeholder="Votre Ville.." required>

            </div>

          </div>

          <div class="row">

            <div class="col-25">

              <label for="CP">Code Postale :</label>

            </div>

            <div class="col-75">

              <input type="text" id="CP" name="CP" placeholder="Ex: 53 000.."required>

            </div>

          </div>

          <div class="row">

            <div class="col-25">

              <label for="CP">Adresse :</label>

            </div>

            <div class="col-75">

              <input type="text" id="Adresse" name="Adresse" placeholder="Ex: 5 rue de Bretagne.." required>

            </div>

          </div>

          <div class="row">

            <div class="col-25">

              <label for="ComplémentA">Comlément d'adresse</label>

            </div>

            <div class="col-75">

              <textarea id="ComplémentA" name="ComplémentA" placeholder="Numéro de Bâtiment, Etage, Code de la porte, etc.."></textarea>

            </div>

          </div>

          <div class="row">

            <div class="col-25">

              <label for="tel">Numero de téléphone :</label>

            </div>

            <div class="col-75">

              <input type="tel" id="tel" name="tel" placeholder="06 23 45 67 89.."required>

            </div>

          </div>

          <div class="row">

            <div class="col-25">

              <label for="prof">Profession :</label>

            </div>

            <div class="col-75">

              <input type="text" id="prof" name="prof" placeholder="Votre Métier.." required>

            </div>

          </div>

          <div class="row">

            <div class="col-25">

              <label for="email">Adresse mail :</label>

            </div>

            <div class="col-75">

              <input type="email" id="email" name="email" placeholder="Votre Email.." required>

            </div>

          </div>

          <div class="row">

            <div class="col-25">

              <label for="pwd">Mot de passe :</label>

            </div>

            <div class="col-75">

              <input type="password" id="pwd" name="pwd" placeholder="Votre Mot de Passe.." required>

            </div>

          </div>

          <div class="row">

            <div class="col-25">

              <label for="pwd">Confirmation du mot de passe :</label>

            </div>

            <div class="col-75">

              <input type="password" id="pwd" name="pwd" placeholder="Retaper le même Mot de Passe.." required>

            </div>

          </div>

          <div class="row">

            <div class="col-25">

              <label for="motif">Comment avez-vous connu ce site ?</label>

            </div>

            <div class="col-75">

              <select id="motif" name="motif">

                <option value="BaO" selected>Bouche-à-oreille</option>

                <option value="Pub">Pub</option>

                <option value="Other">Autre..</option>

              </select>

            </div>

          </div>

          <div class="row">

            <input type="checkbox" id="subscribeNews" name="subscribe" value="newsletter">

            <label class="exception" for="subscribeNews">Souhaitez-vous vous abonner à la newsletter ?</label>

          </div>

          <div class="row">

            <input type="submit" value="S'inscrire">

          </div>

        </form>

      </div>

    </main>

  </body>

</html>
