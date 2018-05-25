<!--  -->

<li class="menuNavItem nav-item <?php echo strpos($uri, "agenda") ? 'active' : ''  ?>">
<a class="itemDeroulants NavForm nav-link" href="#">Agenda</a>
</li>

<!--

Fraction de code qui détermine si l'utilisateur est connecté ou non
Si l'utilisateur est connecté affiche son nom et un menu déroulant afin qu'il puisse acceder à diverses fonctionalitées

-->

<li class="menuNavItem nav-item dropdown">
<a class="itemDeroulants NavForm nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

<!-- Echo le prenom de l'utilisateur une fois login -->

  <?php echo $_SESSION['USER']->getNom(); ?>
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
  <a class="itemDeroulants dropdown-item" href="#">Profile</a>
  <a class="itemDeroulants dropdown-item" href="#">Agenda</a>
  <a class="itemDeroulants dropdown-item" href="#">Déconnecter</a>
</div>
</li>
