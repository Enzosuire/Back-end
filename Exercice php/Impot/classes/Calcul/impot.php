<?php

const tAux_inf = 0.15;

const tAux_sup = 0.20;

class Impot {
    private $Nom;
    private $revenu;

    public function __construct($Nom, $revenu) {
        $this->Nom = $Nom;
        $this->revenu = $revenu;
    }

    public function CalculImpot() {
        if ($this->revenu <= 15000) {
            return $this->revenu * tAux_inf ;
        } elseif ($this->revenu > 15000) {
            return $this->revenu * tAux_sup ;
        }
    }

    public function AfficheImpot() {
        $impot = $this->CalculImpot();
        return " Mr $this->Nom votre impôt est de $impot euros.";
    }
}











