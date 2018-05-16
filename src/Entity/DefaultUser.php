<?php

  namespace Entity;

  class DefaultUser{

    private $id;
    private $nom;
    private $prenom;
    private $phone;
    private $adresse;
    private $description;
    private $civilite;

    private $role;
    private $status;

    public function __construct(){


    }

    public getNom(){

      return $this->nom;
    }

    public setNom($_nom){

      $this->nom = $_nom;
    }

    public getPrenom(){

      return $this->prenom;
    }

    public setPrenom($_prenom){

      $this->prenom = $_prenom;
    }

    public getPhone(){

      return $this->phone;
    }

    public setPhone($_phone){

      $this->phone = $_phone;
    }

    public getAdresse(){

      return $this->adresse;
    }

    public setAdresse($_adresse){

      $this->adresse = $_adresse;
    }

    public getDescription(){

      return $this->description;
    }

    public setDescription($_description){

      $this->description = $_description;
    }

    public getCivilite(){

      return $this->civilite;
    }

    public setCivilite($_civilite){

      $this->civilite = $_civilite;
    }
  }

 ?>
