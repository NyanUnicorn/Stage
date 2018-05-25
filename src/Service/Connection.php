<?php
namespace Service;

use Service\DB;
use Service\Form;
use Entity\User;
use Repository\UserRepository as UserRep;
use Enumeration\Roles;
use Enumeration\Status;
//take away after test


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

  public static function checkInscription(){
    $errors = [];
    if(strlen($_POST['prenom']) <= 1){$errors[] = 'veuillez entrer votre prénom';}
    if(strlen($_POST['nom']) <= 1){$errors[] = 'veuillez entrer votre nom';}
    if(!isset($_POST['civ'])){$errors[] = 'veuillez préciser votre civitité';}
    if(strlen($_POST['ddn']) <= 1){$errors[] = 'veuillez entrer votre date de naissance';}
    if(strlen($_POST['ville']) <= 2){$errors[] = 'veuillez préciser la ville dans laquel vous habitez';}
    if(strlen($_POST['cp']) <= 1){$errors[] = 'veuillez préciser votre code postale';}
    if(strlen($_POST['adresse']) <= 1){$errors[] = 'veuillez préciser votre adresse';}
    if(strlen($_POST['phone']) < 10){$errors[] = 'veuillez ajouter un numéro de télephone';}
    if(strlen($_POST['profession']) <= 1){$errors[] = 'veuillez préciser votre profession';}
    if(strlen($_POST['email']) <= 3){$errors[] = 'veuillez ajouter une adresse e-mail';}else{
    if(strlen($_POST['confirmEmail']) <= 1){$errors[] = 'veuillez confirmer votre e-mail';}else{
      if(!Form::testPasswordConfirm($_POST['email'], $_POST['confirmEmail'])){ $errors[] = 'Votre confirmation de e-mail ne coincide pas';}
    }}
    if(strlen($_POST['pswd']) <= 1){$errors[]= 'veuillez entrez un mot de passe';}else if(strlen($_POST['pswd']) <= 6){$errors[]= 'votre mot de passe est trop court';}else{
    if(strlen($_POST['confirmPswd']) <= 1){$errors[]= 'veuillez confirmer votre mot de passe';}else{
      if(!Form::testPasswordConfirm($_POST['pswd'], $_POST['confirmPswd'])){ $errors[] = 'Votre confirmation de mod de passe ne coincide pas';}
    }}
    if(strlen($_POST['motif']) <= 1){$errors[]= 'veuillez indiquer comment vous nous avez connue';
    }else if($_POST['motif'] === 'Autre'){if(strlen($motif = $_POST['autremotif']) <= 1){$errors[]= 'veuillez indiquer comment vous nous avez connue';}}
    return $errors;
  }

  public static function createAccount(){
    $status = Status::Active;
    $role = Roles::User;
    $errors = [];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $civilite = $_POST['civ'];
    $oddn = $_POST['ddn'];
    $ddn = date("Y-m-d", strtotime($oddn));
    $adresse = $_POST['adresse'];
    $cadresse = $_POST['cadresse'];
    $ville = $_POST['ville'];
    $cp = $_POST['cp'];
    $phone = $_POST['phone'];
    $profession = $_POST['profession'];
    $email = $_POST['email'];
    $password = $_POST['pswd'];
    var_dump($_POST['pswd']);
    $motif = '';
    $dcc = date("Y-m-d");
    if($_POST['motif'] === 'Autre'){
      $motif = $_POST['autremotif'];
    }else{
      $motif = $_POST['motif'];
    }
    $newsletter = 0;
    if(isset($_POST['newsletter'])){
      $newsletter = 1;
    }

    if(UserRep::userExist($email)){
      $errors[] = 'Ce mail est déja utilisé';
    }else{
      var_dump(!UserRep::userExist($email));
      $User = new User( $role , $status, $civilite, $nom, $prenom, $email, $ddn, $dcc, $phone, $adresse, $cadresse, $cp, $ville, $profession, $motif, $newsletter);
      UserRep::createUser($User, $password);
    }
    return $errors;
  }



}
