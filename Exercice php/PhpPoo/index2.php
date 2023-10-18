
<?php 

require_once('classes/calculatrice.php');


$compte1 = new Calculatrice(5 ,10);

// var_dump($compte1);

$compte1->adDition();
$compte1->mulTiplication();

