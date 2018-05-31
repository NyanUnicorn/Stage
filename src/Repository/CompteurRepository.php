<?php

namespace Repository;

use Service\DB;
use Service\ClassTools as Tool;
use Enumeration\Roles;
use Enumeration\Status;

class CompteurRepository{

  public static function infoCompteur($_id, $_libelle){

    $query = new DB();

    return $query->query("SELECT libelle, valeure, img FROM Compteur");

  }

  public static function userExist($_email){
    $exists = TRUE;
    $query = new DB();
    $return = $query->query("SELECT email FROM User WHERE email = '$_email'");
    $result = $return->fetchAll();

}

 ?>
