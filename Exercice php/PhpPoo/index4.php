<?php
// require_once('classes/heritage/Compte.php');
// require_once('classes/heritage/CompteCourant.php');
// require_once('classes/heritage/CompteEpargne.php');
// require_once('classes/heritage/Client/Compte.php');

use APP\Autoloader;



require_once('./classes/Autoloader.php');
Autoloader::register();

use  APP\heritage\Compte as CompteClient;

use APP\Client\Compte;

use APP\heritage\CompteCourant as CompteCourant;

use APP\heritage\CompteEpargne AS CompteEpargne;


$compte1 = new CompteCourant("stephane", 1000 , 500);

$afficher = $compte1->getSolde();

echo $afficher;

echo'<br>';

echo  $compte1->reTirer(501);

echo '<br>';

echo "Le montant après retrait est : ".$compte1->getSolde();




echo"<pre>";
var_dump($compte1);
echo"<pre>";



//CompteEpargne


$compte2 = new CompteEpargne("Jérimie", 5000 , 10);

$resultatInterets = $compte2->verserInterets();

echo $resultatInterets . "<br>";

$nouveauSolde = $compte2->getSolde();
echo "Nouveau solde : $nouveauSolde";

echo"<br>";

$taux = $compte2->getTaux_interet();
echo "le taux est de $taux %";





echo"<pre>";
var_dump($compte2);
echo"<pre>";

