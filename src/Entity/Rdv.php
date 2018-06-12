<?php

namespace Entity;

//creationd de l'objet Rdv
class Rdv{
  private $id;
  private $date_crea;
  private $adresse;
  private $cd_postale;
  private $ville;
  private $date_rdv;
  private $duree_min_rdv;
  private $user_id;
  private $user_nom;
  private $user_pre;
  private $url_id;
  private $status;
  private $info_supp;

  //constructeur

  public function __construct(){
    $output = [];
    $argv = func_get_args();
    switch(func_num_args()){
      case 10:
        self::__construct0($argv[0], $argv[1], $argv[2], $argv[3], $argv[4], $argv[5], $argv[6], $argv[7], $argv[8], $argv[9]);
        break;
      case 11:
        self::__construct1($argv[0], $argv[1], $argv[2], $argv[3], $argv[4], $argv[5], $argv[6], $argv[7], $argv[8], $argv[9], $argv[10]);
        break;
    }
  }
  public function __construct0($_date_crea,$_adresse,$_ville,$_date_rdv,$_duree_min_rdv,$_user_id, $_user_nom, $_user_pre, $_status, $_info_supp){
    $this->date_crea = $_date_crea;
    $this->adresse = $_adresse;
    $this->ville = $_ville;
    $this->date_rdv = $_date_rdv;
    $this->duree_min_rdv = $_duree_min_rdv;
    $this->user_id = $_user_id;
    $this->user_nom = $_user_nom;
    $this->user_pre = $_user_pre;
    $this->status = $_status;
    $this->info_supp = $_info_supp;
  }

  public function __construct1($_date_crea,$_adresse,$_ville,$_date_rdv,$_duree_min_rdv,$_user_id, $_user_nom, $_user_pre, $_url_id, $_status, $_info_supp){
    $this->date_crea = $_date_crea;
    $this->adresse = $_adresse;
    $this->ville = $_ville;
    $this->date_rdv = $_date_rdv;
    $this->duree_min_rdv = $_duree_min_rdv;
    $this->user_id = $_user_id;
    $this->user_nom = $_user_nom;
    $this->user_pre = $_user_pre;
    $this->url_id = $_url_id;
    $this->status = $_status;
    $this->info_supp = $_info_supp;
  }


  public function getInfoSupp(){
    return $this->info_supp;
  }
  public function setInfoSupp($input){
    $this->$info_supp = $input;
  }

  public function getDateCrea(){
    return $this->date_crea;
  }
  public function setDateCrea($_date_crea){
    $this->date_crea = $_date_crea;
  }
  public function getAdresse(){
      return $this->adresse;
  }
  public function SetAdresse($_adresse){
    $this->adresse = $_adresse;
  }
  public function getVille(){
      return $this->ville;
  }
  public function setVille($_ville){
    $this->ville = $_ville;
  }
  public function getDateRdv(){
      return $this->date_rdv;
  }
  public function setDateRdv($_date_rdv){
    $this->date_rdv = $_date_rdv;
  }
  public function getDuree(){
      return $this->duree_min_rdv;
  }
  public function setDuree($_duree_min_rdv){
    $this->duree_min_rdv = $_duree_min_rdv;
  }
  public function getUserId(){
      return $this->user_id;
  }
  public function setUser_Id($_user_id){
    $this->user_id = $user_id;
  }
  public function getUrlId(){
      return $this->url_id;
  }
  public function getStatus(){
      return $this->status;
  }
  public function getNom(){
      return $this->user_nom;
  }
  public function getPrenom(){
      return $this->user_pre;
  }
}

 ?>
