<!DOCTYPE html>
<html  lang="fr" dir="ltr">
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
              <div class="content large-content">
                <?php foreach($errors as $error){ echo '<p class="form-error">' . $error . '</p>';} ?>
              </div>
              <form class="" action="inscription.php" method="post">
                <div class="content large-content">
                  <fieldset>
                    <legend>Informations Personnelles</legend>
                    <label for="prenom">Prenom : </label>
                    <input type="text" name="prenom" id="prenom" <?php echo Form::resetUserInput('prenom'); ?> >
                    <label for="nom">Nom : </label>
                    <input type="text" name="nom" id="nom" <?php  echo Form::resetUserInput('nom'); ?> >
                    <div class="radio-set">
                      <label class="name">Civilité : </label>
                      <?php
                      foreach($civilites as $civilite){
                        $check = '';
                        if (isset($_POST['civ'])){if($_POST['civ'] == $civilite['id']){$check = 'checked';}}
                        $radioSet = '<div class="radio-set-' . $civCount . '">';
                        $radioSet = $radioSet . '<input type="radio" name="civ" id="' . $civilite['id'] . '" value="' . $civilite['id'] . '" ' . $check . ' >';
                        $radioSet = $radioSet . '<label for="' . $civilite['id'] . '">' . $civilite['libelle'] . '</label>';
                        $radioSet = $radioSet . '</div>';
                        echo $radioSet;
                      }
                      ?>
                    </div>
                    <label for="ddn">Date de Naissance</label>
                    <div class="input-container">
                      <input type="date" name="ddn" id="" <?php  echo Form::resetUserInput('ddn'); ?> >
                    </div>
                    <label for="ville">Ville : </label>
                    <input type="text" name="ville" id="ville" <?php  echo Form::resetUserInput('ville'); ?> >
                    <label for="cp">Code Postale : </label>
                    <input type="text" name="cp" id="cp" <?php  echo Form::resetUserInput('cp'); ?> >
                    <label for="adresse">Adresse : </label>
                    <input type="text" name="adresse" id="adresse" <?php  echo Form::resetUserInput('adresse'); ?> >
                    <label for="cadresse">Complément d'adresse : </label>
                    <input type="text" name="cadresse" id="cadresse" <?php  echo Form::resetUserInput('cadresse'); ?> >
                    <label for="phone">Numéro de téléphone : </label>
                    <input type="tel" name="phone" id="phone" <?php  echo Form::resetUserInput('phone'); ?> >
                    <label for="profession">Profession : </label>
                    <input type="text" name="profession" id="profession" <?php  echo Form::resetUserInput('profession'); ?> >
                  </fieldset>
                </div>
                <div class="content large-content">
                <fieldset>
                  <legend>Compte</legend>
                  <label for="email">Email : </label>
                  <input type="email" name="email" id="email" <?php  echo Form::resetUserInput('email'); ?> >
                  <label for="confirmEmail">Confirmation Email : </label>
                  <input type="email" name="confirmEmail" id="confirmEmail" >
                  <label for="pswd">Mot de Passe : </label>
                  <input type="password" name="pswd" id="pswd" >
                  <label for="confirmPswd">Confiration mot de passe : </label>
                  <input type="password" name="confirmPswd" id="confirmPswd" >
                  <label for="motif">Motif : </label>
                  <div class="input-container">
                    <select class="" name="motif" >
                      <?php
                      foreach($motifs as $motif){
                        echo '<option value="' . htmlentities($motif['motif']) . '" >' . htmlentities($motif['motif']) . '</option>';
                      }
                       ?>
                    </select>
                  </div>
                  <label for="autremotif"></label>
                  <input type="text" name="autremotif" id="autremotif" >
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
