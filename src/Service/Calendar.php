<?php
namespace Service;

use Entity\Rdv;
use Repository\UserRepository as UserRep;
use Repository\RDVRepository as RdvRep;
use Service\ClassTools as Tool;
use Service\Connection;
use Enumeration\Roles;
use Enumeration\RdvStatus;

class Calendar{
  public static function load(){
    $admin = Roles::Admin;
    $user = Roles::User;
    $data = [];
    if(Connection::authenticated()){
        $User = $_SESSION['USER'];
        if($User->getRole() == $admin){
          $data = RdvRep::getRdvAsAdmin();
        }else if($User->getRole() == $user){
          $data = RdvRep::getRdvAsUser($User->getEmail());
        }
    }else{
      $data = RdvRep::getRdvAsVisitor();
    }
    //var_dump($data);
    echo json_encode($data);
  }

  public static function prepareArray(){
    $output = [];
    $argv = func_get_args();
    switch(func_num_args()){
      case 1:
        $output = self::prepareArray1($argv[0]);
        break;
      case 2:
        $output = self::prepareArray2($argv[0], $argv[1]);
        break;
      case 3:
        $output = self::prepareArray3($argv[0], $argv[1], $argv[2]);
        break;
    }
    return $output;
  }
  public static function prepareArray1($_input){
    $data = [];
    $_SESSION['rdv'] = [];
    foreach($_input as $rdv){
      $urlId = Tool::generateRandomString(30);
      $RDV = new Rdv($rdv['id'], $rdv['date_crea'], $rdv['adresse'], $rdv['ville'], $rdv['date_rdv'], $rdv['duree_min_rdv'], $rdv['user_id'], $rdv['nom'], $rdv['prenom'], $urlId, $rdv['status'],  $rdv['info_supp']);
      array_push($_SESSION['rdv'] , $RDV);

      $duree = $rdv['date_rdv'];
      $duree = date('Y-m-d H:i:s',strtotime('+'.$rdv['duree_min_rdv'].' minutes', strtotime($rdv['date_rdv'])));
      $data[] = array(
        'id'          =>  $rdv['user_id'],
        'title'       =>  $rdv['nom'] . ' ' . $rdv['prenom'],
        'start'       =>  $rdv['date_rdv'],
        'end'         =>  $duree,
        'url'         =>  'rendezvous.php?myrdv='.$urlId.''
      );
    }
    return $data;
  }

  public static function arrayContains($class, $classArray){
    $contains = FALSE;
    foreach($classArray as $elem){
      if($elem == $class){
        $contains = TRUE;
      }
    }
    return $contains;
  }

  public static function prepareArray2($_input1, $_input2){
    //compare both array

    foreach($_input2 as $key=>$elem2){
      foreach($_input1 as $elem1){
        if($elem2['id'] == $elem1['id']){
    //replace array 2 what exists in array 1 (user_id for reference)
          unset($_input2[$key]);
          array_push($_input2 , $elem1);
        }
      }
    }

    //loopthrough and create json
    $data = [];
    $_SESSION['rdv'] = [];
    foreach($_input2 as $key=>$rdv){
      if(self::arrayContains($rdv, $_input1)){
        $urlId = Tool::generateRandomString(30);
        $RDV = new Rdv($rdv['id'], $rdv['date_crea'], $rdv['adresse'], $rdv['ville'], $rdv['date_rdv'], $rdv['duree_min_rdv'], $rdv['user_id'], $rdv['nom'], $rdv['prenom'], $urlId, $rdv['status'],  $rdv['info_supp']);
        array_push($_SESSION['rdv'] , $RDV);

        $duree = $rdv['date_rdv'];
        $duree = date('Y-m-d H:i:s',strtotime('+'.$rdv['duree_min_rdv'].' minutes', strtotime($rdv['date_rdv'])));
        $data[] = array(
          'id'          =>  $rdv['user_id'],
          'title'       =>  $rdv['nom'] . ' ' . $rdv['prenom'],
          'start'       =>  $rdv['date_rdv'],
          'end'         =>  $duree,
          'url'         =>  'rendezvous.php?myrdv='.$urlId.''
        );
      }else{
        $duree = $rdv['date_rdv'];
        $duree = date('Y-m-d H:i:s',strtotime('+'.$rdv['duree_min_rdv'].' minutes', strtotime($rdv['date_rdv'])));
        $data[] = array(
          'id'          =>  $rdv['user_id'],
          'title'       =>  'Horaire occupé',
          'start'       =>  $rdv['date_rdv'],
          'end'         =>  $duree,
        );
      }
    }
    return $data;
  }

  public static function prepareArray3($_input, $visibility, $authority){
    $data = [];
    foreach($_input as $rdv){
      $duree = $rdv['date_rdv'];
      $duree = date('Y-m-d H:i:s',strtotime('+'.$rdv['duree_min_rdv'].' minutes', strtotime($rdv['date_rdv'])));
      $data[] = array(
        'id'          =>  $rdv['user_id'],
        'title'       =>  'Horaire occupé',
        'start'       =>  $rdv['date_rdv'],
        'end'         =>  $duree,
      );
      }
    return $data;
  }

  public static function validRendezVous($_rdvList, $_rdvId){
    $valid = FALSE;
    foreach($_rdvList as $rdv){
      if($rdv->getUrlId() == $_rdvId){
        $valid = TRUE;
      }
    }
    return $valid;
  }


  public static function getRdv($_rdvList, $_rdvId){
    $rdv = NULL;
    foreach($_rdvList as $key=>$rdv){
      if($rdv->getUrlId() == $_rdvId){
        $rdv = $_rdvList[$key];
      }
    }
    return $rdv;
  }

  public static function checkInput($input){
    $errors = [];
    if(strlen($input['nom']) <= 1){
      array_push($errors , 'Veuillez indiquer votre nom');
    }
    if(strlen($input['prenom']) <= 1){
      array_push($errors , 'Veuillez indiquer votre prenom');
    }
    if(strlen($input['adresse']) <= 1){
      array_push($errors , 'Veuillez indiquer votre adresse de rendez-vous');
    }
    if(strlen($input['ville']) <= 1){
      array_push($errors , 'Veuillez indiquer votre ville');
    }
    if($input['dtRdv'] == NULL){
      array_push($errors , 'Veuillez indiquer votre date de rendez-vous');
    }
    return $errors;
  }

  public static function getRdvStatus($user){
    $status = NULL;
    if($user->getRole() == Roles::Admin){
      $status = RdvStatus::Accepted;
    }else if($user->getRole() == Roles::User){
      $status = RdvStatus::Requested;
    }
    return $status;
  }

  public static function getDuree($post){
    $duree = NULL;
    if($post['premier'] == 1){
      $duree = 60;
    }else if($post['premier'] == 0){
      $duree = 90;
    }
    return $duree;
  }

  public static function CreateRdv($post){
    $USER = $_SESSION['USER'];
    $date_crea = date('Y-m-d H:i:s', time());
    $nom = $post['nom'];
    $prenom = $post['prenom'];
    $adresse = $post['adresse'];
    $ville = $post['ville'];
    $info_supp = $post['supp'];
    $date_rdv = $post['dtRdv'];
    $duree = self::getDuree($post);
    $status = self::getRdvStatus($USER);
    $user_id = UserRep::getId($USER->getEmail())['id'];
    $rdv = new RDV($date_crea,$adresse,$ville,$date_rdv,$duree,$user_id, $nom, $prenom, $status, $info_supp);
    RdvRep::createRdv($rdv);
  }

  public static function isValidRdvRequest($_post){
    $error = [];
    //get rendez vous list
    $rdvList = RdvRep::getRdvMini();
    //get start date time and duration
    $datetime = $_post['dtRdv'];
    var_dump($rdvList);
    $duree = self::getDuree($_post);
    //check for collisions before and after
    foreach($rdvList as $rdv){
      $rdvduree = $rdv['duree_min_rdv'];
      if(date('Y-m-d H:i:s',strtotime('+'.$rdvduree.' minutes', strtotime($rdv['date_rdv']))) > $datetime){
        $error = 'collision de rendez-vous';
      }else if($rdv['date_rdv'] > date('Y-m-d H:i:s',strtotime('+'.$duree.' minutes', strtotime($datetime))) ){
        $error = 'collision de rendez-vous';
      }
      return $error;
    }

  }

  public static function executeRdvOption($input, $RDV){
    if($input == 'confirm'){
      RdvRep::confirmRdv($RDV);
    }else if($input == 'refuse'){
      RdvRep::refuseRdv($RDV);
    }
  }

}
