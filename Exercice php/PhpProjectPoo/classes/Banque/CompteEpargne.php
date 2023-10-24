<?php

namespace App\Banque;

use App\Banque\Compte as CompteBancaire;
use App\Client\Compte as CompteClient;

class CompteEpargne extends CompteBancaire
{
    /**
     * attribut taux d'intérêt
     *
     * @var [float]
     */
    private $taux_interets;


    /**
     * fonction constructeur de la classe CompteEpargne
     *
     * @param [string] $nom
     * @param [int] $montant
     * @param [int] $taux
     */
    public function __construct($compte, $montant, $taux)
    {
        parent::__construct($compte, $montant);
        $this->taux_interets = $taux;
    }


    /**
     * Get the value of taux_interets
     */
    public function getTaux_interets()
    {
        return $this->taux_interets;
    }

    /**
     * Set the value of taux_interets
     *
     * @return  self
     */
    public function setTaux_interets($taux_interets)
    {
        $this->taux_interets = $taux_interets;

        return $this;
    }

    public function verserInterets()
    {
        $newSolde = parent::getSolde() + (parent::getSolde() * ($this->taux_interets / 100));
        return "Le solde de votre compte épargne avec les intérêts est de : " . $newSolde . " €";
    }

    /**
     * function affichage de l'objet en cours
     *
     * @return string
     */
    public function __toString()
    {
        return "Le compte de " . parent::getTitulaire() . " est crédité de " . parent::getSolde() . " € avec un découvert autorisé de " . $this->getDecouvert() . " €";
    }
}
