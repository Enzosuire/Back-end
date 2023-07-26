<?php

//  variables
$tableau=array();
$i=0;
$n=0;
$m=0;

// Boucle
for ($i= 0; $i<= 8;$i++) {

    echo"entrez le nombre : ";
    $tableau[$i] = (float)readline();
    print_r ($i);
    print "";
    print PHP_EOL;
    $n=$n+$tableau[$i]; 
}


//calcul de la moyennne
$m= $n/9;

echo"la moyenne est :". $m;


?>