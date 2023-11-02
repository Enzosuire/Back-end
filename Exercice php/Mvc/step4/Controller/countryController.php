<?php

//namespace App\Controller;

use App\Modele\CountryRepository;
use App\Modele\DetailRepository;

//use Exception;

require_once('./Model/CountryRepository.php');
require_once('./Model/DetailRepository.php');

function accueil()
{

    $countryRepository = new CountryRepository();

    $req = $countryRepository->getCountries();

    require('View/countriesView.php');
}



function details()
{

    if (isset($_GET['id'])) {
        $DetailRepository = new DetailRepository();
        $country_id =  ($_GET['id']);
        $details = $DetailRepository->getDetails($country_id);

        $DetailpaysRepository = new DetailRepository();
        $country_id =  ($_GET['id']);
        $detailspays = $DetailpaysRepository->getdetailsPays($country_id);

        require('View/detailsView.php');
    }
}




function addCountryDetail($country_id, $label, $value)
{

    $detailRepository = new DetailRepository();

    $result = $detailRepository->saveCountryDetail($country_id, $label, $value);

    if ($result == false) {

        throw new Exception("Erreur: impossible d'ajouter le nouveau détail");
    } else {
        header('Location: index.php?action=details&id=' . $country_id);
    }





}

