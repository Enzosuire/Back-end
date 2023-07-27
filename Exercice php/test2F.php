<?php

echo "Pour les dates de 2023 ";
print PHP_EOL;
$Jour_ferie = array (
    '01-01', // Nouvel An
    '05-01', // Fête du Travail
    '04-09', // Pâques 2023
    '05-28', // Pentecôte 2023
    '05-08', // Fin de la Seconde guerre Mondiale en europe
    '07-14', // Fête nationale 
    '08-15', // Assomption
    '11-01', // Toussaint
    '11-11', // Armistice
    '12-25', // Noël 

    );
    
    echo "Les jours fériés en France :";
    print PHP_EOL;
    foreach ($Jour_ferie as $jour) {
    echo "$jour";
    print PHP_EOL;
    }

    ?>



