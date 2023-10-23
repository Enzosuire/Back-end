<?php


namespace APP\classes;

class CompteCourant extends Compte {


    private $decouvert;

    
    public function __construct( string $titulaire, float $solde, float $decouvert) {
        
        parent::__construct($titulaire, $solde);

        $this->decouvert = $decouvert;
        
      

    }


    public function getDecouvert() {
        
        return $this->decouvert  ;
    }


    public function reTirer(float $retirer) {
        $solde = parent::getSolde();
        $decouvert = $this->getDecouvert();
        
        if ($retirer > 0 && ($solde - $retirer) >= ($decouvert)) {
            $nouveauSolde = $solde - $retirer;            
            return  parent::setSolde($nouveauSolde);
            // return "Le montant retiré est de :" .$retirer;
        } else {
            return "Impossible de retirer ce montant, dépassement du découvert autorisé.";
        }
    }
}


