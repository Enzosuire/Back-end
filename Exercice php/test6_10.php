<?php
$tableau=array();
$i=0;
$N=0;
$tableau2=array();
$tableau3=array();


for ($i=0; $i<=8;$i++) {
     
    echo " Entrez une valeur pour tab : ";
    $tableau[$i]= (float)readline();
    print_r ($i);

}

for ($i=0; $i<=8;$i++) {
     
    echo " Entrez une valeur pour tab2 : ";
    $tableau2[$i]= (float)readline();
    print_r ($i);
    

}



$tableau3=0;

for ($i=0; $i<=8;$i++) {

$tableau3=$tableau3+$tableau[$i]+$tableau2[$i];

}

echo "La somme des éléments de Tab et Tab2/Tab3 est  :";
print ($tableau3);


?>