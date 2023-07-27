<?php
$dateSaisie=0;
$formatDate=0;

function isEaster($date) {
    $easterDate = date("m-d", easter_date(date("Y", strtotime($date)))+86400);
    $date = date("m-d", strtotime($date));
    
    if ($date === $easterDate) {
        return true;
    } else {
        return false;
    }
}

$Jour_ferie = array(
    '01-01', // Nouvel An
    '05-01', // Fête du Travail
    '05-08', // Fin de la Seconde guerre Mondiale en Europe
    '07-14', // Fête nationale (France)
    '08-15', // Assomption
    '11-01', // Toussaint
    '11-11', // Armistice
    '12-25', // Noël
);

echo "Entrez une date au format DD-MM-YYYY : ";
$dateSaisie = readline();

$formatDate = date("d-m", strtotime($dateSaisie));


$isFerie = in_array($formatDate, $Jour_ferie);
$isEaster = isEaster($dateSaisie);

if ($isFerie) {
    echo "$dateSaisie correspond à un jour férié.";
}

if ($isEaster) {
    echo "$dateSaisie correspond au lundi de Pâques (jour férié).";
}

if (!$isFerie && !$isEaster) {
    echo "$dateSaisie'est ni un jour férié ni le lundi de Pâques.";
}
?>