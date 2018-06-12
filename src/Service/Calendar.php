<?php
namespace Service;

use Entity\Rdv;
use Repository\RDVRepository as RdvRep;
use Service\ClassTools as Tool;
use Service\Connection;
use Enumeration\Roles;

class Calendar{
  public static function load(){
    $admin = Roles::Admin;
    $user = Roles::User;
    $data = [];
    if(Connection::authenticated()){
        $User = $_SESSION['USER'];
        if($User->getRole() == $admin){
          $data = array_merge($data, RdvRep::getRdvAsAdmin());
        }else if($User->getRole() == $user){
          $data = array_merge($data,RdvRep::getRdvAsUser($User->getEmail()));
        }
    }else{
      $data = array_merge($data,RdvRep::getRdvAsVisitor());
    }

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
      $RDV = new Rdv($rdv['date_crea'], $rdv['adresse'], $rdv['cd_postale'], $rdv['ville'], $rdv['date_rdv'], $rdv['duree_min_rdv'], $rdv['user_id'], $rdv['nom'], $rdv['prenom'], $urlId, $rdv['status']);
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
    //array_push($_SESSION['rdv'] , $rdvList);
    return $data;
  }

  public static function prepareArray2($_input1, $_input2){
    //compare both array
    foreach($_input2 as $key=>$elem2){
      foreach($_input1 as $elem1){
        if($elem2['user_id'] == $elem1['user_id']){
    //replace array 2 what exists in array 1 (user_id for reference)
          $_input2[$key] = $elem1;
        }
      }
    }

    //loopthrough and create json
    $data = [];
    $_SESSION['rdv'] = [];
    foreach($_input2 as $key=>$rdv){
      foreach($_input1 as $elem1){
        if($rdv['user_id'] == $elem1['user_id']){
          $urlId = Tool::generateRandomString(30);
          $RDV = new Rdv($rdv['date_crea'], $rdv['adresse'], $rdv['cd_postale'], $rdv['ville'], $rdv['date_rdv'], $rdv['duree_min_rdv'], $rdv['user_id'], $rdv['nom'], $rdv['prenom'], $urlId, $rdv['status']);
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
            'title'       =>  'Complet',
            'start'       =>  $rdv['date_rdv'],
            'end'         =>  $duree,
          );
        }
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
        'title'       =>  'Complet',
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
    if(strlen($input['nom']) <= '10'){
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

  public static function CreateRdv($_POST){
    $date_crea
    $nom
    $prenom
    $adresse
    $ville
    $info_supp
    $dateRdv
    $duree
    $status
    $user_id
    
  }

}
