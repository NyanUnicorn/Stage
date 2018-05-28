<?php
namespace Repository;

use Service\DB;

/**/
class CiviliteRepository {

  public static function getCivilite($_civilite){
    $query = new DB();

    // requete Sql pour recuperer le libelle(homme/femme) de la civilite selon son id
    $result = $query->query("SELECT libelle FROM Civilite WHERE id = $_civilite");
    return $result->fetch()['libelle'];
  }
  public static function listCivilite(){
    $query = new DB();
    return $query->query("SELECT id, libelle FROM Civilite");
  }
  public static function getCiviliteId($_civilite){
    $query = new DB();
    //requete Sql pour recuperer l'id de la civilite selon son libelle
    $result = $query->query("SELECT id FROM Civilite WHERE libelle = '$_civilite'");
    return $result->fetch()['id'];
  }
}
