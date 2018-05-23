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
        self::resetTimeout();
        //var_dump($_SESSION['timeout']);
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
      $_SESSION['emailInput'] = Form::getInputPost('email');
      var_dump($_POST['email']);
      $userInfo = UserRep::loginUser($_POST['email'], $_POST['password']);
      $data = $userInfo->fetch();
      if($data){
        $USER = new User($data['id'], $data['role'], $data['status'], $data['nom'], $data['prenom'], $data['email'], $data['date_nais'], $data['ville'], $data['Civilite_id']);
        $_SESSION['USER'] = $USER;
        self::resetTimeout();
        //$_SESSION['emailInput'] = NULL;
        var_dump($_SESSION['timeout']);
      }
      else{
        $toReturn = 'password';
      }

    }
    return $toReturn;
  }

  public static function checkInscription($pre, $nom, $civ, $ddn, $vil, $cp, $adr, $tel, $pro, $eml, $ceml, $pwd, $cpwd, $mot){
    $errors = [];
    if(strlen($pre) <= 1){$errors[] = 'veuillez entrer votre prénom';}
    if(strlen($nom) <= 1){$errors[] = 'veuillez entrer votre nom';}
    if(strlen($civ) <= 1){$errors[] = 'veuillez préciser votre civitité';}
    if(strlen($ddn) <= 1){$errors[] = 'veuillez entrer votre date de naissance';}
    if(strlen($vil) <= 2){$errors[] = 'veuillez préciser la ville dans laquel vous habitez';}
    if(strlen($cp) <= 1){$errors[] = 'veuillez préciser votre code postale';}
    if(strlen($adr) <= 1){$errors[] = 'veuillez préciser votre adresse';}
    if(strlen($tel) <= 10){$errors[] = 'veuillez ajouter un numéro de télephone';}
    if(strlen($pro) <= 1){$errors[] = 'veuillez préciser votre profession';}
    if(strlen($eml) <= 3){$errors[] = 'veuillez ajouter une adresse e-mail';}
    if(strlen($ceml) <= 1){$errors[] = 'veuillez confirmer votre e-mail';}else{
      if(Form::public static function testPasswordConfirm($eml, $ceml)){ $errors[] = 'Votre confirmation de e-mail ne coincide pas';}
    }
    if(strlen($pwd) <= 1){$errors[]= 'veuillez entrez un mot de passe';}else if(strlen($pwd) <= 6){$errors[]= 'votre mot de passe est trop court';}
    if(strlen($cpwd) <= 1){$errors[]= 'veuillez confirmer votre mot de passe';}else{
      if(Form::public static function testPasswordConfirm($pwd, $cpwd)){ $errors[] = 'Votre confirmation de mod de passe ne coincide pas';}
    }
    if(strlen($mot) <= 1){$errors[]= 'veuillez indiquer comment vous nous avez connue';}
    return $errors[];
  }



}
