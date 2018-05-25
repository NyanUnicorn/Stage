<?php
namespace Repository;

use Service\DB;

/**/
class CiviliteRepository {

  public static function getCivilite($_civilite){
    $query = new DB();
    $result = $query->query("SELECT libelle FROM Civilite WHERE id = $_civilite");
    return $result->fetch()['libelle'];
  }
  public static function listCivilite(){
    $query = new DB();
    return $query->query("SELECT id, libelle FROM Civilite");
  }
  public static function getCiviliteId($_civilite){
    $query = new DB();
    $result = $query->query("SELECT id FROM Civilite WHERE libelle = '$_civilite'");
    return $result->fetch()['id'];
  }
}
