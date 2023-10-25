<?php


require ('Modele.php');

function accueil()
{

$recipe = getRecipe();
$recipes = getThreeLastRecipes();
$tuple = getThreeLastReviews();

require ('vueAccueil.php');

}


function oneRecipe($idrecette) {
    
    $seule = getone($idrecette);
    $comment = getComments($idrecette);
    require('vueRecette.php');
}

function erreur($msgErreur){

    require('vueErreur.php');
}