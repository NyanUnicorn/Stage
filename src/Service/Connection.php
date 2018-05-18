<?php
namespace Service;

use Service\DB;
use Service\Form;
use Entity\User;
use Repository\UserRepository as UserRep;


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



  public static function checkLoginInput(){
    $toReturn = [];
    if(!isset($_POST['email'])){
      $toReturn[] = 'email';
    }
    if(!isset($_POST['password'])){
      $toReturn[] = 'password';
    }
    return $toReturn;
  }

  public static function authentication($_errors){
    $toReturn = '';
    if(!(count($_errors) > 0)){
      $userInfo = UserRep::loginUser($_POST['email'], $_POST['password']);
      if($userInfo){
        $data = $userInfo->fetch();
        $USER = new User($data['id'], $data['role'], $data['status'], $data['nom'], $data['prenom'], $data['email'], $data['date_nais'], $data['ville'], $data['Civilite_id']);
        $_SESSION['USER'] = $USER;
      }
      else{
        $toReturn = 'pasword';
      }
    }
    return $toReturn;
  }
}
