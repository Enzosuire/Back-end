<?php

use App\Autoloader;
use App\Controleur\Routeur;

require_once 'AutoLoader.php';

Autoloader::register();


// require ('./Controleur/Routeur.php');

$routeur = new Routeur();

$routeur->RouteurRequete();





?>
