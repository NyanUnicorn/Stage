<!--  -->

<li class="menu_item <?php echo strpos($uri, "agenda") ? 'active' : ''  ?>">
<a class="" href="#">Agenda</a>
<i></i>
</li>

<!--

Fraction de code qui détermine si l'utilisateur est connecté ou non
Si l'utilisateur est connecté affiche son nom et un menu déroulant afin qu'il puisse acceder à diverses fonctionalitées

-->

<li class="menu_item">
  <a class="" href="#"><?php echo $_SESSION['USER']->getNom(); ?></a>
  <i class="fas fa-caret-right" ng-click=<?php $q = "'"; echo '"selectSub('.$q.'profile'.$_SESSION['USER']->getSessionId().$q.');goToSubmenu();"' ?>></i>
  <ul id=<?php echo '"profile'.$_SESSION['USER']->getSessionId().'"' ?> class="nav_dropdown">
    <li ng-click="goToMainmenu();"><a class="backButton"><i class="fas fa-caret-left"> </i> Retour</a></li>
    <li><a href="user-profile.php">Profile</a></li>
    <li><a href="#">Agenda</a></li>
    <li><a href="#">Déconnecter</a></li>
  </ul>
</li>
