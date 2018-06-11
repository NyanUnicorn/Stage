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

  //constructeur
  public function __construct($_date_crea,$_adresse,$_cd_postale,$_ville,$_date_rdv,$_duree_min_rdv,$_user_id, $_user_nom, $_user_pre, $_url_id, $_status){
    $this->date_crea = $_date_crea;
    $this->adresse = $_adresse;
    $this->cd_postale = $_cd_postale;
    $this->ville = $_ville;
    $this->date_rdv = $_date_rdv;
    $this->duree_min_rdv = $_duree_min_rdv;
    $this->user_id = $_user_id;
    $this->user_nom = $_user_nom;
    $this->user_pre = $_user_pre;
    $this->url_id = $_url_id;
    $this->status = $_status;
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


  public function getCdPostale(){

      return $this->cd_postale;
  }

  public function setCdPostale($_cd_postale){

    $this->cd_postale = $_cd_postale;

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


  public function getHeureRdv(){

      return $this->heure_rdv;
  }

  public function setHeureRdv($_heure_rdv){

    $this->heure_rdv = $_heure_rdv;

  }


  public function getDureeMinRdv(){

      return $this->duree_min_rdv;
  }

  public function setDureeMinRdv($_duree_min_rdv){

    $this->duree_min_rdv = $_duree_min_rdv;

  }


  public function getUser_Id(){

      return $this->user_id;
  }

  public function setUser_Id($_user_id){

    $this->user_id = $user_id;

  }

}

 ?>
