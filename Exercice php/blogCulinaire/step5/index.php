<?php

require ('Modele.php');

try {

$recipe = getRecipe();
$recipes = getThreeLastRecipes();
$tuple = getThreeLastReviews();

require ('vueAccueil.php');
   
} catch (PDOException $e) {
 $msgErreur =$e -> getMessages();

require('vueErreur.php');
}
?>
