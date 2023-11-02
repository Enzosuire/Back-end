<?php 

require_once('./Model/CountryRepository.php');
require_once('./Model/DetailRepository.php');

function accueil()
{

$countryRepository = new CountryRepository();

 $req = $countryRepository->getCountries();

 require ('View/countriesView.php');


}



 function details() {

$DetailRepository= new DetailRepository();


if (isset($_GET['id'])){
 $country_id =  ($_GET['id']);
 $details = $DetailRepository->getDetails($country_id);
 
 require('View/detailsView.php');

}

 }


 function addCountryDetail($country_id,$label,$value) {

$detailRepository = new DetailRepository();

$result = $detailRepository->saveCountryDetail($country_id, $label, $value);

if ($result == false) {

    throw new Exception("Erreur: impossible d'ajouter le nouveau détail");
} else {
    header('Location: index.php?action=details&id='.$country_id);


}


}



