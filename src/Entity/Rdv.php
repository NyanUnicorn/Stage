<?php

namespace Entity;

class Rdv{

  private $id;
  private $date_crea;
  private $adresse;
  private $cd_postale;
  private $ville;
  private $date_rdv;
  private $heure_rdv;
  private $duree_min_rdv;
  private $accompte_verse;
  private $user_id;

  public function __construct($date_rdv, $heure_rdv){


  }

  public getDateCrea(){

    return $date_crea;
  }

  public setDateCrea($_date_crea){

    $this->$date_crea = $_date_crea;

  }

  public getAdresse(){

      return $adresse;
  }

  public SetDateCrea($_adresse){

    $this-> $adresse = $_adresse;
  }


  public getCdPostale(){

      return $cd_postale;
  }

  public setCdPostale($_cd_postale){

    $this->cd_postale = $_cd_postale;

  }


  public getVille(){

      return $ville;
  }

  public setVille($_ville){

    $this->ville = $_ville;

  }


  public getDateRdv(){

      return $date_rdv;
  }

  public setDateRdv($_date_rdv){

    $this->$date_rdv = $_date_rdv;

  }


  public getHeureRdv(){

      return $heure_rdv;
  }

  public setHeureRdv($_heure_rdv){

    $this->$heure_rdv = $_heure_rdv;

  }


  public getDureeMinRdv(){

      return $duree_min_rdv;
  }

  public setDureeMinRdv($_duree_min_rdv){

    $this-> $duree_min_rdv = $_duree_min_rdv;

  }


  public getAccompteVerse(){

      return $accompte_verse;
  }

  public setAccompteVerse($_accompte_verse){

    $this-> $accompte_verse = $_accompte_verse;

  }


  public getUser_Id(){

      return $user_id;
  }

  public setUser_Id($_user_id){

    $this-> $user_id = $user_id;

  }

}

 ?>
