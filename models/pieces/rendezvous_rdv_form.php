<form class="prendreRendezvous" action="agenda.php" method="post">
  <div class="elem">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" value=<?php echo '"'. htmlentities($USER->getNom()).'"'; ?>>
  </div>
  <div class="elem">
    <label for="prenom">Prenom :</label>
    <input type="text" name="prenom" id="prenom" value=<?php echo '"'. htmlentities($USER->getPre()).'"';  ?>>
  </div>
  <div class="elem">
    <label for="adresse">Adresse :</label>
    <input type="text" name="adresse" id="adresse" value=<?php echo '"'. htmlentities($USER->getAdresse()).'"';  ?>>
  </div>
  <div class="elem">
    <label for="ville">Ville :</label>
    <input type="text" name="ville" id="ville" value=<?php echo '"'. htmlentities($USER->getVille()).'"';  ?>>
  </div>
  <div class="elem">
    <label for="supp">Information Supplementaire :</label>
    <input type="text" name="supp" id="supp" value=<?php echo '"'. htmlentities($USER->getCompAdresse()).'"';  ?>>
  </div>
  <div class="elem">
    <label for="dtRdv">Date et Heure de rendez-vous :</label>
    <input type="datetime-local" name="dtRdv" id="dtRdv" value="">
  </div>
  <div class="elem">
    <label for="duree">Premier rendez vous ?</label>
    <div class="radio">
      <div class="">
        <label for="non">non</label>
        <input type="radio" name="premier" id="non" value="1" checked="checked">
      </div>
      <div class="">
        <label for="oui">oui</label>
        <input type="radio" name="premier" id="oui" value="0">
      </div>

    </div>
  </div>
  <input type="submit" name="submit" value="Confirmer">

  <p>Veuillez prendre un rendez-vous u moins 48heures à l'avance.</p>
  <p>lors de votre prise de rendez-vous vous rez cotacté par téléphone pour confirmer</p>
</form>
