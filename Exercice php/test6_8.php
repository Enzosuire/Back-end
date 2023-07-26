<?php

//Variables
$tableau=array();
$i=0;
$N=0;
$nbv=0;
$nbnegatives=0;
$nbpositives=0;

echo"entrez le nombre de valeurs : ";
 $nbv = readline();
//Boucle
for ($i=1;$i<=$nbv;$i++) {
    
    echo"entrez le nombre : ";
    $tableau[$i] = (float)readline();
    print_r ($i);
    print "";
    print PHP_EOL;
}

//Calcul valeurs positives ou négatives
for ($i=1;$i<=$nbv;$i++) {

if ($tableau[$i]<0)    {
$nbnegatives++;

}
else{
$nbpositives++;
} 
    
}

echo "Le nombre de valeurs négatives est : ".$nbnegatives;
print PHP_EOL;
echo "Le nombre de valeurs positives est : ".$nbpositives;
print PHP_EOL;




?>