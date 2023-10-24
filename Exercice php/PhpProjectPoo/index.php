<?php

use App\Autoloader;
use App\Banque\{CompteCourant, CompteEpargne};

/*require_once 'classes/Banque/Compte.php';
require_once 'classes/Banque/CompteCourant.php';
require_once 'classes/Banque/CompteEpargne.php';

require_once 'classes/Client/Compte.php';*/

require_once 'classes/AutoLoader.php';

Autoloader::register();




// use App\Banque\Compte as CompteBancaire;
use App\Client\Compte as CompteClient;


$compteClient = new CompteClient("Hendrix","Jimi","07.45.87.74.77");

$compteCourant = new CompteCourant($compteClient,1000,500);

$compteEpargne = new CompteEpargne($compteClient,1000,5);

// echo'<pre>';
// var_dump($compteCourant);

// echo'<pre>';
// var_dump($compteEpargne);

$Telephone = $compteCourant-> getTitulaire()->getTelephone();
$nomPrenom = $compteCourant-> getTitulaire()->getPrenom() . " " . $compteCourant-> getTitulaire()->getNom();

echo "Numéro de téléphone : $Telephone <br>";
echo "Titulaire du compte : $nomPrenom";






// $compteNathan = new CompteCourant("Nathan", 1000, 500);

// echo $compteNathan->retirer(1500);

// echo '<br>';

// $cpteEpargneNathan = new CompteEpargne("Nathan", 1000, 5);
// echo $cpteEpargneNathan->verserInterets();

// echo"<br>";

