<?php 

require_once('classes/calcul/impot.php');

if (isset($_POST['revenu']) && isset($_POST['nom'])) {
    $nom = $_POST['nom'];
    $revenu = $_POST['revenu'];

    $impotCalculator = new Impot($nom, $revenu);
    $message = $impotCalculator->AfficheImpot();

    echo $message; 
}



