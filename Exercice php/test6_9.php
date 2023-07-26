<?php
$tableau=array();
$i=0;
$N=0;


for ($i= 0 ; $i<=8 ; $i++) {

    echo"entrez le nombre: " ;
    $tableau[$i] = (float)readline();
    print_r ($i) ;
    print "";
    print PHP_EOL;
    $N=$N+$tableau[$i];

   
}
print ($N);


?>