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
    public function voirSolde(){

        echo"Le solde du compte est de $this->solde €. ";

}

public function dePoser( float $sommeajout){


  echo " Le somme déposée est de : " .$this->solde + $sommeajout ;
  
   

}

public function reTirer( float $retirer){

    if ($retirer > 0 &&  $retirer <= $this->solde ) {
       
        echo " Le montant a retiré est de : " . $this->solde - $retirer;  
    }else{
        echo "On peux pas retirer de montant";
    }

   
  
  }


}//Fermeture de la classes
