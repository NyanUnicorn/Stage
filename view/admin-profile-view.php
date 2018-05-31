<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin page</title>

    <?php

  	echo $head;
  	echo $stylesheet;
  	?>

  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">

    <h1 class="header">Profil d'Administration</h1>

    <div class="menu">
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" href="../">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Clients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Agenda</a>
        </li>
      </ul>
    </div>

    <main>


    <div class="container">


      <div class="multi-menu">
        <h3 class="decoh3">Notifications :</h3>
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center"><a href="#">Clients</a>
            <span class="badge badge-primary badge-pill"><a href="#">14</a></span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="#">Rendez-vous en attente de confirmation</a>
            <span class="badge badge-primary badge-pill"><a href="#">2</a></span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="#">Rendez-vous prévus</a>
            <span class="badge badge-primary badge-pill"><a href="#">1</a></span>
          </li>
        </ul>

      </div>

      <div class="gererTmgg">
        <h3 class="decoh3">Gérer les compteurs :</h3>

          <p class="gererCompt">Compteur des Kilometres :</p>
          <input type="text" name="km" placeholder="<?php //echo $km ?>">

          <p class="gererCompt">Compteur des Kg de CO₂ économisés :</p>
          <p><?php //echo $air ?></p>

          <p class="gererCompt">Compteur des Pneus crevés :</p>
          <input type="text" name="Pneus_Crevés" placeholder="<?php //echo $pneu ?>">

      </div>

      </div>
    </main>


    <div class="footer">
      <?php
      require 'footer-view.php';
      echo $foot;
      ?>

    </div>

  </body>
</html>
