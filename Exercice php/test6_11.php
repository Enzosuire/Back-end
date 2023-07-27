<?php
$tableau1=array();
$tableau2=array();
$i=0;
$i2=0;
$schtroumpf=0;
$nbv1=0;
$nbv2=0;

echo"entrez le nombre de valeurs : ";
$nbv1=readline();

for ($i=1; $i<=$nbv1;$i++) {

    echo "Entrez la valeur du tableau : ";
    $tableau1[$i] = (float)readline();
    print_r ($i);
    print "";
    
}

echo"entrez le nombre de valeurs : ";
$nbv2=readline();

for ($i=1; $i<=$nbv2;$i++) {

    echo "Entrez la valeur du tableau: ";
    $tableau2[$i] = (float)readline();
    print_r ($i);
    print "";
     
}
$schtroumpf=0;

for ($i=1; $i<=$nbv1;$i++) {

    for ($i2 = 1; $i2 <= $nbv2; $i2++) {
        $schtroumpf = $schtroumpf + ($tableau1[$i] * $tableau2[$i2]);
  
    }
}

echo "Le schtroumpf des deux tableaux est : ".$schtroumpf;



 

?>