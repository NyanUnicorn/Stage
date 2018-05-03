<?php
function navConnexion(){
  echo '<a class="itemDeroulants NavForm nav-link" href="#">Connexion</a>';
}

function sessionConnected(){
  $connected = False;
  if(isset($_SESSION['timeout'])){
    if($_SESSION['timeout'] >= time()){
      $connected = True;
      resetTimeout();
    }
  }
  return $connected;
}

function resetTimeout(){
  $_SESSION['timeout'] = strtotime('+30 minutes');
}
