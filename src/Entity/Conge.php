<?php

namespace Entity;

class Conge{

  private $id;
  private $date_deb;
  private $date_fin;
  private $comment;
  private $user_id;


  public function __construct(){


  }

  public getDateDeb(){

    return $this->date_deb;
  }

  public setDateDeb($_date_deb){

    $this->date_deb = $_date_deb;
  }


  public getDateFin(){

    return $this->date_fin;
  }

  public setDateFin($_date_fin){

    $this->date_fin = $_date_fin;
  }

  public getComment(){

    return $this->comment;
  }

  public setComment($_comment){

    $this->comment = $_comment;
  }

  public getUser_Id(){

    return $this->user_id;
  }

  public setUser_Id($_user_id){

    $this->user_id = $_user_id;
  }

}

 ?>
