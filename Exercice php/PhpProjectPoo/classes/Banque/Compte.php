<?php
namespace App\Banque;


use App\Client\Compte as CompteClient;

abstract class Compte
{
    protected CompteClient $titulaire;
    private $solde;



    public function __construct(CompteClient $compte, float $montant = 100)
    {
        $this->titulaire = $compte;
        $this->solde = $montant;
       
    }

    /**
     * Get the value of titulaire
     */
    public function getTitulaire(): CompteClient
    {
        return $this->titulaire;
    }

    /**
     * Set the value of titulaire
     *
     * @return  self
     */
    public function setTitulaire(CompteClient $compte): self
    {
        
        if (isset($compte)) {
            $this->titulaire = $compte;
    }
    return $this;

    }

    /**
     * Get the value of solde
     */
    protected function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set the value of solde
     *
     * @return  self
     */
    protected function setSolde($solde)
    {
        if ($solde >= 0) {
            $this->solde = $solde;
            return $this;
        }
    }

  
}