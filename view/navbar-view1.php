<div class="nav-wrapper">
  <nav id="custom-menu" class="navbar navbar-default navbar-expand-lg " role="navigation" data-spy="affix" data-offset-top="165">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse navbar-menubuilder">
        <ul class="navbar-nav ">
          <li class="nav-item <?php echo $uri=='/' | $uri=='/index.php' ? 'active' : ''  ?>">
            <a class="itemDeroulants nav-link" href="../">Acceuil <span class="sr-only"></span></a>
          </li>
          <li class="menuNavItem nav-item dropdown <?php echo strpos($uri, "chiropraxie") ? 'active' : ''  ?>">
            <a class="itemDeroulants NavForm nav-link dropdown-toggle" href="chiropraxie.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            La chiropraxie
          </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="itemDeroulants dropdown-item" href="chiropraxie.php#Histoire_et_définition">Histoire et définition</a>
              <a class="itemDeroulants dropdown-item" href="chiropraxie.php#Reconnaissance_légale_en_France">Reconnaissance légale en France</a>
              <a class="itemDeroulants dropdown-item" href="chiropraxie.php#Reconnaissance_dans_le_monde">Reconnaissance dans le monde </a>
              <a class="itemDeroulants dropdown-item" href="chiropraxie.php#La_formation_en_chiropraxie">La formation en chiropraxie </a>
              <a class="itemDeroulants dropdown-item" href="chiropraxie.php#La_recherche_en_chiropraxie">La recherche en chiropraxie</a>
            </div>
          </li>
          <li class="menuNavItem nav-item dropdown <?php echo strpos($uri, "soins") ? 'active' : ''  ?>">
            <a class="dropdown itemDeroulants NavForm nav-link dropdown-toggle" href="soins.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Les Soins Chiropratiques
          </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="itemDeroulants dropdown-item" href="soins.php#Pour_Qui">Pour Qui ? </a>
              <a class="itemDeroulants dropdown-item" href="soins.php#Les_symptomes_pour_consulter">Les symptômes pour consulter</a>
              <div class="dropdown-divider"></div>
              <a class="itemDeroulants dropdown-item" href="soins.php#Deroulement_d'une_séance">Déroulement d’une séance </a>
              <a class="itemDeroulants dropdown-item" href="soins.php#Tarifs">Tarifs</a>
              <a class="itemDeroulants dropdown-item" href="soins.php#Mutuelles_remboursant_les_soins">Mutuelles remboursant les soins </a>
            </div>
          </li>
          <li class="menuNavItem nav-item dropdown <?php echo strpos($uri, "chiropracteur") ? 'active' : ''  ?>">
            <a class="itemDeroulants NavForm nav-link dropdown-toggle" href="chiropracteur.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Votre Chiropracteur
          </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="itemDeroulants dropdown-item" href="chiropracteur.php#Son_parcours">Son parcours </a>
              <a class="itemDeroulants dropdown-item" href="chiropracteur.php#Seance_a_domicile_a_velo">Séance à domicile à vélo </a>
              <a class="itemDeroulants dropdown-item" href="chiropracteur.php#Techniques_de_soins_utilisees">Techniques de soins utilisées</a>
              <a class="itemDeroulants dropdown-item" href="chiropracteur.php#Equipement_lors_des_deplacements">Equipement lors des déplacements</a>
              <div class="dropdown-divider"></div>
              <a class="itemDeroulants dropdown-item" href="chiropracteur.html#Contacts">Contacts</a>
            </div>
          </li>
          <li class="menuNavItem nav-item  <?php echo strpos($uri, "wcbt") ? 'active' : ''  ?>">
            <a class="itemDeroulants NavForm nav-link" href="wcbt.php">Le World Chiropractic Bike Tour</a>
          </li>
          <?php require $navStatus; ?>
        </ul>
      </div>

    </div>
  </nav>

</div>
