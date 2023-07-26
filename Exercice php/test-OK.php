<?php

// DECLARE ET INITIALISATION DE LA VALEUR
$i=0;
$prenom="Jérôme";
$tableau=array();
$tableau[]="Mehdi";
$tableau[]="Théo";

print_r($tableau);
var_dump($tableau);

//AFFICHER 
print "Hello World";

//retour à la ligne;
print PHP_EOL;

//INCREMENTATION
//$j=$j+1;
//$j++;

//DECREMENTATION
//$j=$j-1;
//$j--;

// POUR j ALLANT de 1 à 10

for($j=1;$j<=10;$j++) {
	print $j;
}

//LIRE 
$note=0;
/*$note=readline("Veuillez saisir une note");
print $note;*/

//SI
if ($note==12) {
	print "C'est bien mais pas top";
//SINON
} else {
	print "C'est une autre note";
}

//TANT QUE
/*while($note!=15) {
	$note=readline("Veuillez saisir une note");
}
print "C'est terminé";*/
$a=5;
$b=10;
$somme=$a+$b;
print $somme;

?>