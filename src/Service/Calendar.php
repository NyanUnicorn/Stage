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
      //  $data = array_merge($data, RdvRep::getRdvAsAdmin());
      //$data = array_merge($data,RdvRep::getRdvAsVisitor());
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
        $output = prepareArray2($argv[0], $argv[1]);
        break;
    }
    return $output;
  }
  public static function prepareArray1($_input){
    $data = [];
    $_SESSION['rdv'] = [];
    foreach($_input as $rdv){
      //$rdv = [];
      $urlId = Tool::generateRandomString(30);
      //$rdv['rdv_url_id'] = $rdvId;
      //$rdv[''];
      $RDV = new Rdv($rdv['date_crea'], $rdv['adresse'], $rdv['cd_postale'], $rdv['ville'], $rdv['date_rdv'], $rdv['duree_min_rdv'], $rdv['user_id'], $rdv['nom'], $rdv['prenom'], $urlId, $rdv['status']);
      $_SESSION['rdv'] = $RDV;

      $duree = $rdv['date_rdv'];
      $duree = date('Y-m-d H:i:s',strtotime('+'.$rdv['duree_min_rdv'].' minutes', strtotime($rdv['date_rdv'])));
      $data[] = array(
        'id'          =>  $rdv['user_id'],
        'title'       =>  $rdv['nom'] . ' ' . $rdv['prenom'],
        'start'       =>  $rdv['date_rdv'],
        'end'         =>  $duree,
        'url'         =>  'agenda/rendezvous.php?'.$urlId.''
      );
    }
    return $data;
  }

  public static function prepareArray2($_inpunt1, $_input2){
    //compare both array
    //delete from array 2 what exists in array 1 (user_id for reference)
    //loopthrough and create json
  }

}
