<?php

class Calculatrice{

    //Déclaration des propriétés de la classe

    public $nombre1;
    public $nombre2;


    public function __construct(float $nombre1, float $nombre2 ) {

        $this->nombre1 = $nombre1;

    
        $this->nombre2 = $nombre2;
        
    }
    public function adDition(){

       echo'Le résultat de cette addition est :' .$this->nombre1 + $this->nombre2 ;
       echo'<br>';

}

public function mulTiplication(){

    echo'Le résultat de cette multiplication est :' .$this->nombre1 * $this->nombre2 ;

}
 
}

