<?php

require ("controller.php");



try {
    
    if (isset($_GET['action'])) {
        if($_GET['action']== "details"){
            if (isset($_GET['id'])){
            $country_id = $_GET['id'];
            if($country_id !=0){
                details();
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
            
        accueil();
        
    }
   

} catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require('vueErreur.php');
}




// require ('./Model.php');

// $req = getCountries();


// require ('countries.View.php');












