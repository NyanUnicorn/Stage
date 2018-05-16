<?php

namespace Entity;

class Ville{

  private $id;
  private $libelle;
  private $duree_min_add;

  public function __construct(){


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
