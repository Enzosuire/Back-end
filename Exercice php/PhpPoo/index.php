<?php

require_once('classes/Compte.php');

//Premiére instance de classe compte
$compte1 = new Compte('Stéphane',1000000);
$compte1->voirSolde();
$compte1->dePoser(500);
$compte1->reTirer(100);

//On écrit dans la propriéré titulaire 
// $compte1->titulaire = "Stéphane";

//On écrit dans la propriété solde
// $compte1->solde = 1000000;

//Deuxiéme instance de classe compte
$compte2 = new Compte('Guillaume',);

// $compte2->titulaire = "Guillaume";




echo '<br>';




