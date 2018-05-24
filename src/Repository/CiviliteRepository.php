<?php
namespace Repository;

use Service\DB;

class CiviliteRepository {

  public static function getCivilite($_civilite){
    $query = new DB();
    return $query->query("SELECT labelle FROM Civilite WHERE id = $_civilite");
  }
  public static function listCivilite(){
    $query = new DB();
    return $query->query("SELECT id, libelle FROM Civilite");
  }
}
