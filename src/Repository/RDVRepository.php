<?php
namespace Repository;

use Service\Calendar;
use Service\DB;


class RDVRepository{
  public static function getRdvAsAdmin(){
      $query = new DB();
      $result = $query->query("SELECT Rdv.prenom, Rdv.nom, Rdv.user_id, Rdv.date_rdv, Rdv.duree_min_rdv, Rdv.date_crea, Rdv.adresse, Rdv.ville, Rdv.status, Rdv.info_supp FROM Rdv ")->fetchAll();
      return Calendar::prepareArray($result);
  }
  public static function getRdvAsUser($_email){
    $query = new DB();
    $result1 = $query->query("SELECT Rdv.prenom, Rdv.nom, Rdv.user_id, Rdv.date_rdv, Rdv.duree_min_rdv, Rdv.date_crea, Rdv.adresse, Rdv.ville, Rdv.status, Rdv.info_supp FROM Rdv LEFT JOIN User on User.id = Rdv.user_id WHERE User.email = '$_email'")->fetchAll();
    $result2 = $query->query("SELECT Rdv.user_id, Rdv.date_rdv, Rdv.duree_min_rdv, Rdv.date_crea FROM Rdv ")->fetchAll();
    return Calendar::prepareArray($result1, $result2);
  }
  public static function getRdvAsVisitor(){
    $query = new DB();
    $result = $query->query("SELECT Rdv.user_id, Rdv.date_rdv, Rdv.duree_min_rdv, Rdv.date_crea FROM Rdv ")->fetchAll();
    return Calendar::prepareArray($result, NULL, NULL);
  }
  public static function createRdv($_rdv){
    $execute = new DB();
    $stmt = $execute->prepare("INSERT INTO Rdv (nom, prenom, info_supp, date_crea, adresse, ville, date_rdv, duree_min_rdv, status, user_id)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
    $stmt->execute(array($_rdv->getNom(),$_rdv->getPrenom(), $_rdv->getInfoSupp(), $_rdv->getDateCrea(), $_rdv->getAdresse(), $_rdv->getVille(), $_rdv->getDateRdv(), $_rdv->getDuree(), $_rdv->getStatus(), $_rdv->getUserId()));
  }

}
