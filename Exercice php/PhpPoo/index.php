<?php

require_once('classes/Compte.php');

//Premiére instance de classe compte
$compte1 = new Compte('Stéphane',1000000);


$voirSolde = $compte1->getSolde();
echo''. $voirSolde .'';
echo'<br>';

$compte1 -> setSolde(20);
echo'<br>';



$newSolde = $compte1->getSolde();
echo''. $newSolde.'';
echo'<br>';

$deposer = $compte1->getdePoser(500);
echo ''. $deposer .'';

$retire=$compte1->getreTirer(100);
echo ''. $retire .'';

//On écrit dans la propriéré titulaire 
// $compte1->titulaire = "Stéphane";

//On écrit dans la propriété solde
// $compte1->solde = 1000000;

//Deuxiéme instance de classe compte
$compte2 = new Compte('Guillaume',);

// $compte2->titulaire = "Guillaume";




echo '<br>';




