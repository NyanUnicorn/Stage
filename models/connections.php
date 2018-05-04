<?php

$Username = '';
$Password = '';
$Email = '';


function navConnexion(){
  if(authenticated()){
    require '/pieces/nav_profile_drop.php';
  }else{
    require '/pieces/nav_conn_btn.php';
  }
}

function authenticated(){
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
  $_SESSION['timeout'] = strtotime('+1 minutes');
}
function checkInput(){

}
