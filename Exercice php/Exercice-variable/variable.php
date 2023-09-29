<?php

// EX 2 :

// $note_maths =15 ;
// $note_francais = 12 ;
// $note_histoire = 9;

// $moyenne = ( $note_maths + $note_francais + $note_histoire) /3 ;


// echo 'La moyenne est de '.$moyenne.' /20.';


// La moyenne est de 12 /20.
// echo '<br>' ;



// EX 3 :

// a script 1 :

// $a="Les ";
// $b="7 merveilles du monde";


// $c= $a.$b ;  "Les"." 7 merveilles du monde"

// $d=$b+13;  on ne peut pas additionner avec une String


// $b=&$c Les 7 merveilles du monde



// b script 2 :


// $a="5+5";

// $b="2E2";

// $c= $a + $b ; 

// Warning: A non-numeric value encountered in C:\xampp\htdocs\Exercice-variable\index.php 


// Ex 4 :

// $x="3 fois"; chaine de caractères

// $x=5.2;  chaine numerique (decimal )
// $z=$x%5;  valeur decimal ca ne marche pas modulo égale a 0 int 


// $x= "0" || 1; le boolean  recherche deux valeurs si elle sont vrai ou faux celon une string ou un numerique ( si la string est vide faux "" vrai " ")


// $y=is_string($x); Détermine si la variable donnee est de type chaine de caractères



// EX 5 


function bool($var ){
    if($var) echo 'TRUE<br>';
    else echo 'FALSE<br>';

}

// bool(""==FALSE); c'est vrai puisque q'une chaine de caractere vide ne contient rien
// echo "<br>";

// bool("0"=="");  false les valeurs ne sont pas egale puisque 0 est chaine de caractere avec un element il n'est pas egale
//  echo "<br>";

// bool(0==""); false  numerique et chaine caractere vide 
// echp "<br>";


// bool(0===FALSE); false 0 est egale a false

//  bool("0"==FALSE); true 
