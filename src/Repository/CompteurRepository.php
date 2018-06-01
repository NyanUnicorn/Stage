<?php

namespace Repository;

use Service\DB;
use Service\ClassTools as Tool;
use Enumeration\Roles;
use Enumeration\Status;

class CompteurRepository{

  public static function infoCompteur(){

    $query = new DB();

    return $query->query("SELECT description, valeure, image FROM Compteurs");

  }

  public static function userExist($_email){
    $exists = TRUE;
    $query = new DB();
    $return = $query->query("SELECT description FROM Compteur WHERE description = 'description'");
    $result = $return->fetchAll();
  }

}

 ?>
