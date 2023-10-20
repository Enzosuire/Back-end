<?php

class Compte{

    //Déclaration des propriétés de la classe

    public $titulaire;
    public $solde;


    public function __construct(string $nom , float $somme =500) {

    //on attribue le nom a la propriété titulaire de l'instance créée
        $this->titulaire = $nom;

    //on attribue le somme a la propriété titulaire de l'instance créée
        $this->solde = $somme;
        
    }
    public function getSolde(){

        return"Le solde du compte est de $this->solde €. ";

}


public function setSolde( float $somme){


    if ($somme >=0 ){
    $this->solde = $somme ;
    }
    return $this->solde;
     
  
}


public function getdePoser( float $sommeajout){


  return " Le somme déposée est de : " .$this->solde + $sommeajout ;
  
   

}

public function getreTirer( float $retirer){

    if ($retirer > 0 &&  $retirer <= $this->solde ) {
       
        return " Le montant a retiré est de : " . $this->solde - $retirer;  
    }else{
        return "On peux pas retirer de montant";
    }

   
  
  }

// to string ca renvoie une chaîne de caractères représentant l'objet

  

}//Fermeture de la classes
