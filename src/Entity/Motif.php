<?php

namespace Entity;

class Motif{

  private $id;
  private $motif;

  public function __construct($_motif){

    $this->motif = $_motif;
  }

  public getMotif(){

    return $this->motif;
  }

  public setMotif($_motif){

    $this->motif = $_motif;
  }
}

 ?>
