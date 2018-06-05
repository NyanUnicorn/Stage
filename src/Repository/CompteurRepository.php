<?php

namespace Repository;

use Service\DB;
use Service\ClassTools as Tool;
use Enumeration\Roles;
use Enumeration\Status;

class CompteurRepository{

  public static function infoCompteur(){

    $query = new DB();
    $query->exec("SET NAMES 'utf8';");
    return $query->query("SELECT description, valeure, image FROM Compteurs");

  }

  public static function recupPneu(){

    $query = new DB();

    return $query->query("SELECT description, valeure, image FROM Compteurs WHERE description = 'pneu'");
  }

  public static function userExist($_email){
    $exists = TRUE;
    $query = new DB();
    $return = $query->query("SELECT description FROM Compteur WHERE description = 'description'");
    $result = $return->fetchAll();
  }

public static function SetPneu($valeure){

  $exec = new DB();
  $exec->exec("UPDATE compteurs set valeure = $valeure WHERE id = 2");

}


  public static function SetKm($valeure){


    $exec = new DB();
    $exec->exec("UPDATE compteurs set valeure = $valeure WHERE id = 1");


  }

}

 ?>
