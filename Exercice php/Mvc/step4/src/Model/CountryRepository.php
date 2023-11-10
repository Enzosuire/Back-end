<?php

namespace App\Modele;


$entityManager = require_once("C:/xampp/htdocs/Mvc/step4/config/doctrine2-config.php");


use APP\entity\Country;
use Doctrine\ORM\EntityRepository ;


// require_once("./step4/test/query-builder.php");

class CountryRepository  {



function getCountries()
{
$entityManager = require_once("./config/doctrine2-config.php");
$TCountry = $entityManager->getRepository(Country::class);
$countries = $TCountry->findAll();
var_dump($countries);
return $countries;


}


// $countryRepository = $entityManager->getRepository(Country::class);

// $TCountry = $queryBuilder->findAll();

// foreach ($TCountry as $country) {
//     $country->getLabel();

    // $db = $this->getBdd();
    // $country = $db->prepare('SELECT * FROM countries');
    // $country->execute();
    // $countries = $country->fetchAll();

    // return $countries;
}


function getDetails($country_id)
{

    // $db = new PDO('mysql:host=localhost; dbname=db_countries; port=3306; charset=utf8', 'root', '');
    // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // $details = $db->prepare("SELECT * FROM details WHERE country_id = :country_id");
    // $details->bindParam(':country_id', $country_id, PDO::PARAM_INT);
    // $details->execute();
    // $countryDetails = $details->fetchAll(PDO::FETCH_ASSOC);

    // return $countryDetails;
}

