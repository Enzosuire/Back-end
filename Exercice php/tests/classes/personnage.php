<?php

class personnage {

    private $Nom ;
    private $prenom;

    private $Age;

    private $sexe;



    public function getNom() {
        return $this->Nom;
    }

    public function getPrenom() {
        return $this->prenom;

    }

    public function getAge() {
        return $this->Age;
    }

    public function getsexe() {
        return $this->sexe;
    }

}