<?php


// EX1

// $civil = 'f';

// if ($civil=='f') {

//     echo "bonjour madame";
// } else if ($civil =='m') {
    
//     echo "bonjour monsieur";
// }


// EX 2


// $budget = 1553.89 ;

// $achats = 1554.76 ;

// if ($achats < $budget) {
//    echo "j'ai le budget";
// } else {
//     echo "pas d'achat je n'ai pas le budget ";

// }


// EX 3 

// $age = 70 ;


// if ($age >= 18 ) {
//     echo "je suis majeur ";
// } else {
//     echo "je suis mineur ";
// }



// EX 4 

// $heure =  6;


// if ($heure >=6 && $heure <=12 ) {
//     echo "c'est le matin" ;

// } elseif ($heure >=20 || $heure <= 5) {

//   echo "c'est la nuit";

// }
//  else  {
//      echo "c'est l'apres-midi";
// }

// EX5 

// $note = 12;


// if ($note >=18 && $note <=20 ) {
//    echo "Note de grade A";
// }elseif ($note >=14 && $note <18 ) {
//    echo "Note de grade B";
// }elseif ($note >=10 && $note <14 ) {
//    echo "Note de grade C";
// }elseif ($note >=0 && $note <10 ) {
//    echo "Note de grade D";
// } else {
//     echo "Note sans grade";
// }


// EX6

// $nombre = 21 ;

// if ($nombre % 3 == 0 && $nombre % 7 == 0){
//    echo "le nombre est multiple de 3 et de 7";
// } else {
//     echo "le nombre n'est pas multiple de 3 et de 7 ";
// }

// L'operateur de modulo retourne le reste de la division de $nombre par 3. 
// Si le reste est egal a zero, cela signifie que $nombre est divisible par 3.


// EX7

// $nombre1 = 10;
// $nombre2  = 15;
// $operation = "addition";
// $resultat = 0;


// switch ($operation) {
//     case "addition":
//        $resultat = $nombre1 +$nombre2;
       
//         break;
//     case "soustraction":
//        $resultat = $nombre1 - $nombre2;
//         break;
//     case "multiplication":
//        $resultat = $nombre1 * $nombre2;
//         break;
//     case "division":
//        $resultat = $nombre1 / $nombre2;
//         break;
    
//     default:
//        echo "operation ne correspond pas ";
//         break;
// }
// echo "le résultat de l'opération est " .$resultat;
