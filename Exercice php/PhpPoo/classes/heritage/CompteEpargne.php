<?php


namespace APP\heritage;

class CompteEpargne extends Compte{


    private $taux_interets  ;

    
    public function __construct( string $titulaire, float $solde, float $taux_interets) {
        
        parent::__construct($titulaire, $solde);

        $this->taux_interets = $taux_interets;
        
      

    }


    public function getTaux_interet() {
        
        return $this->taux_interets ;
    }

    public function setTaux_interets($taux){

        $this->taux_interets = $taux;
    }

    public function verserInterets() {
        $solde = parent::getSolde();
        $taux = $this->getTaux_interet() /100 ;
        $interet = $solde * $taux;
        $nouveauSolde = $solde + $interet;
       parent::setSolde($nouveauSolde);
       return "Intérêts versés : $interet";
    }
    



}



