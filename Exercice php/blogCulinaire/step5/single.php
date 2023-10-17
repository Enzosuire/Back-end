<?php

require('Modele.php');

$idrecette = $_GET['id'];
try {
    if( isset($idrecette)) {

    if ($idrecette != 0) {
        $seule = getone($idrecette);
        $comment = getComments($idrecette);

            require('vueRecette.php');
        } else {
           
            throw new Exception("Identifiant incorrect");
        }
    } else {
        throw new Exception("L'identifiant ne correspond pas à une recette");
    
    }

} catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require('vueErreur.php');
}





?>