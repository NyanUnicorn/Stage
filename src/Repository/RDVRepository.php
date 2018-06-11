<?php
namespace Repository;

use Service\Calendar;
use Service\DB;


class RDVRepository{
  public static function getRdvAsAdmin(){
      $query = new DB();
      $result = $query->query("SELECT User.prenom, User.nom, User.id, Rdv.date_rdv, Rdv.duree_min_rdv, Rdv.date_crea, Rdv.adresse, Rdv.cd_postale, Rdv.ville FROM Rdv LEFT JOIN User on User.id = Rdv.user_id")->fetchAll();
      return Calendar::prepareArray($result);
  }
  public static function getRdvAsUser($_id){

  }
  public static function getRdvAsVisitor(){

  }

}
