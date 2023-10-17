<?php

require ('Modele.php');

$recipe = getRecipe();
$recipes = getThreeLastRecipes();
$tuple = getThreeLastReviews();


require ('vueAccueil.php');

?>
