<!--  -->

<li class="nav_item <?php echo strpos($uri, "agenda") ? 'active' : ''  ?>">
<a class="" href="#">Agenda</a>
</li>

<!--

Fraction de code qui détermine si l'utilisateur est connecté ou non
Si l'utilisateur est connecté affiche son nom et un menu déroulant afin qu'il puisse acceder à diverses fonctionalitées

-->

<li class="nav_item">
  <a class="" href="#"><?php echo $_SESSION['USER']->getNom(); ?></a>
  <ul class="nav_dropdown">
    <li><a href="#">Profile</a></li>
    <li><a href="#">Agenda</a></li>
    <li><a href="#">Déconnecter</a></li>
  </ul>
</li>
