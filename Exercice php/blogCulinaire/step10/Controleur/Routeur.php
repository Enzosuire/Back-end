<?php

require_once 'ControleurAcceuil.php';
require_once 'ControleurRecette.php';
require_once './Vue/Vue.php';

class Routeur 
{
    private $ctrlAcceuil;
    private $ctrlRecette;

    public function __construct()
    {
        $this->ctrlAcceuil = new ControleurAccueil();

        $this->ctrlRecette = new ControleurRecette();
    }

    // Affiche la recette à la une
    // Affiche les 3 dernières recettes
    // Affiche les 3 derniers commentaires

    public function RouteurRequete ()
    {
    
        try {
    
            if (isset($_GET['action'])) {
                if($_GET['action']== "recette"){
                    if (isset($_GET['id'])){
                    $idrecette = intval($_GET['id']);
                    if($idrecette !=0){
                        $this->ctrlRecette->oneRecipe($idrecette);
                    }else{
                        throw new Exception("Id non valide", 3);
                    }
                    }else{
                        throw new Exception("Id inexsistant", 2);
                        
                    }
                } else {
                    
                    throw new Exception("Action non valide", 1);
                    
                    
                }
            } else {
                    
                
                $this->ctrlAcceuil->accueil();
                
            }
           
        
        } catch (Exception $e) {

            $this->erreur($e->getMessage());
           
        }
    }

        private function erreur ($msgErreur){

            $vue = new Vue("Erreur");
            $vue->generer(array('msgErreur'=> $msgErreur));
        

        
    }
}
