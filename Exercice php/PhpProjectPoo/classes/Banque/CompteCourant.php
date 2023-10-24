<?php

namespace App\Banque;

use App\Banque\Compte as CompteBancaire;
use App\Client\Compte as CompteClient;

class CompteCourant extends CompteBancaire
{
    /**
     * montant du découvert autorisé
     *
     * @var [int]
     */
    private $decouvert;

    /**
     * fonction constructeur de la classe CompteCourant
     *
     * @param [string] $nom
     * @param [int] $montant
     * @param [int] $autoDecouvert
     */
    public function __construct($compte, $montant, $autoDecouvert)
    {
        parent::__construct($compte, $montant);
        $this->decouvert = $autoDecouvert; 
       
    }

    /**
     * Get the value of decouvert
     */
    public function getDecouvert()
    {
        return $this->decouvert;
    }

    /**
     * Set the value of decouvert
     *
     * @return  self
     */
    public function setDecouvert($decouvert)
    {
        $this->decouvert = $decouvert;

        return $this;
    }

    /**
     * Autorise ou non le retrait d'argent sur le compte
     * en tenant compte du découvert autorisé
     * @param [int] $retrait
     * @return void
     */
    public function retirer($retrait)
    {
        if ($retrait != 0 && $retrait <= (parent::getSolde() + $this->getDecouvert())) {
            $newSold = parent::getSolde() - $retrait;
            parent::setSolde($newSold);
            return $this->afficheSolde();
        } else {
            return "Le retrait est impossible, le solde de votre compte est insuffisant";
        }
    }
    /**
     * affichage du message de modification du solde
     *
     * @return void
     */
    private function afficheSolde()
    {
        return "Le solde de votre compte courant est désormais de : " . parent::getSolde() . " €";
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
