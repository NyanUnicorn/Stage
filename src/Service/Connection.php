<?php
namespace Service;

use Service\DB;
use Service\Form;


class Connection{


  public static function navConnexion(){
    $toReturn;
    if(Connection::authenticated()){
      $toReturn = '../models/pieces/nav_profile_drop.php';
    }else{
      $toReturn = '../models/pieces/nav_conn_btn.php';
    }
    return $toReturn;
  }

  public static function authenticated(){
    $connected = False;
    if(isset($_SESSION['timeout'])){
      if($_SESSION['timeout'] >= time()){
        $connected = True;
        resetTimeout();
      }
    }
    return $connected;
  }

  public static function resetTimeout(){
    $_SESSION['timeout'] = strtotime('+1 minutes');
  }
  public static function checkInput(){

  }



  public static function logIn(){
    $toReturn = 'email';
    if(isset($POST['email'])){
      $toReturn = 'password';
      if(isset($POST['Pwd'])){

      }
    }
  }



}
