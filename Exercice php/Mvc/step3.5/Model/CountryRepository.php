<?php

namespace App\Modele;

use App\Modele\Repository;

require_once("Repository.php");


class CountryRepository extends Repository {


function getCountries()
{
    $db = $this->getBdd();
    $country = $db->prepare('SELECT * FROM countries');
    $country->execute();
    $countries = $country->fetchAll();

    return $countries;
}


// function getDetails($country_id)
// {

//     $db = new PDO('mysql:host=localhost; dbname=db_countries; port=3306; charset=utf8', 'root', '');
//     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $details = $db->prepare("SELECT * FROM details WHERE country_id = :country_id");
//     $details->bindParam(':country_id', $country_id, PDO::PARAM_INT);
//     $details->execute();
//     $countryDetails = $details->fetchAll(PDO::FETCH_ASSOC);

//     return $countryDetails;
// }

}