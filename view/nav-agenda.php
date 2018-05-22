<li class="menuNavItem nav-item dropdown ">
<a class="itemDeroulants NavForm nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <?php echo $_SESSION['USER']->getNom(); ?>
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
  <a class="itemDeroulants dropdown-item" href="#">Profile</a>
  <a class="itemDeroulants dropdown-item" href="#">Agenda</a>
  <a class="itemDeroulants dropdown-item" href="#">Déconnecter</a>
</div>
</li>
