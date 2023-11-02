<?php 


require("./Model/countryModel.php");

function accueil()
{

 $req = getCountries();

 require ('./View/countriesView.php');

}



 function details() {



if (isset($_GET['id'])){
 $country_id = ($_GET['id']);
 $details = getDetails($country_id);
 
 require('./View/detailsView.php');

}

 }


 function addCountryDetail($country_id,$label,$value) {

$result = saveCountryDetail($country_id, $label, $value);

var_dump($result);
if ($result == false) {

    throw new Exception("Erreur: impossible d'ajouter le nouveau détail");
} else {
    header('Location: index.php?action=details&id='.$country_id);


}


}



