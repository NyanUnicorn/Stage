<?php

namespace Entity;

class Ville{

  private $id;
  private $libelle;
  private $duree_min_add;

  public function __construct($_id,$_libelle,$_duree_min_add){
    $this->id = $_id;
    $this->libelle = $_libelle;
    $this->duree_min_add = $_duree_min_add;

  }

  public getLibelle(){

    return $this->libelle;

  }

  public setLibelle($_libelle){

    $this->libelle = $_libelle;

  }


  public getDureeMinAdd(){

    return $this->duree_min_add;
  }

  public setDureeMinAdd($_duree_min_add){

    $this->duree_min_add = $_duree_min_add;

  }

}

 ?>
