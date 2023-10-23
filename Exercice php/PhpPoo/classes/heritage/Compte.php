<?php


namespace APP\classes;
abstract class Compte{

    private $titulaire;

    private $solde;

  


    protected function __construct( string $titulaire, float $solde) {

        $this->titulaire = $titulaire;
        
        $this->solde = $solde;


    }



public function getSolde(){


  
    return $this->solde;
    
  
}

public function setSolde(float $somme){

    $this->solde = $somme ;
    

}
    

        
    }
 