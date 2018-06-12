<?php
namespace Repository;

use Service\Calendar;
use Service\DB;


class RDVRepository{
  public static function getRdvAsAdmin(){
      $query = new DB();
      $result = $query->query("SELECT Rdv.prenom, Rdv.nom, Rdv.user_id, Rdv.date_rdv, Rdv.duree_min_rdv, Rdv.date_crea, Rdv.adresse, Rdv.cd_postale, Rdv.ville, Rdv.status FROM Rdv ")->fetchAll();
      return Calendar::prepareArray($result);
  }
  public static function getRdvAsUser($_email){
    $query = new DB();
    $result1 = $query->query("SELECT Rdv.prenom, Rdv.nom, Rdv.user_id, Rdv.date_rdv, Rdv.duree_min_rdv, Rdv.date_crea, Rdv.adresse, Rdv.cd_postale, Rdv.ville, Rdv.status FROM Rdv LEFT JOIN User on User.id = Rdv.user_id WHERE User.email = '$_email'")->fetchAll();
    $result2 = $query->query("SELECT Rdv.user_id, Rdv.date_rdv, Rdv.duree_min_rdv, Rdv.date_crea FROM Rdv ")->fetchAll();
    return Calendar::prepareArray($result1, $result2);
  }
  public static function getRdvAsVisitor(){

  }

}
