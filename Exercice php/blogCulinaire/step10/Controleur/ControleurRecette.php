<?php

require_once './Modele/Recette.php';
require_once './Modele/Commentaire.php';
require_once './Vue/Vue.php';

class ControleurRecette
{
    private $recette;
    private $commentaire;

    public function __construct()
    {
        $this->recette = new Recette();
        $this->commentaire = new Commentaire();
    }

    // Affiche la recette à la une
    // Affiche les 3 dernières recettes
    // Affiche les 3 derniers commentaires
    public function oneRecipe($idrecette)
    {
    
        $seule =  $this->recette->getone($idrecette);
        $comment = $this->commentaire->getComments($idrecette);
        $vue = new Vue("Recette");
        $vue->generer(array('seule' => $seule,  'comment' => $comment));
    }
}
