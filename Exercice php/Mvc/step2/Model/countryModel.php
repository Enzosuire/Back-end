<?php


function getCountries()
{
    $db = new PDO('mysql:host=localhost; dbname=db_countries; port=3306; charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $country = $db->prepare('SELECT * FROM countries');
    $country->execute();
    $countries = $country->fetchAll();

    return $countries;
}


function getDetails($country_id)
{

    $db = new PDO('mysql:host=localhost; dbname=db_countries; port=3306; charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $details = $db->prepare("SELECT * FROM details WHERE country_id = :country_id");
    $details->bindParam(':country_id', $country_id, PDO::PARAM_INT);
    $details->execute();
    $countryDetails = $details->fetchAll(PDO::FETCH_ASSOC);

    return $countryDetails;
}


function saveCountryDetail($country_id, $label, $value)
{

    $db = new PDO('mysql:host=localhost;dbname=db_countries;port=3306;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $insertQuery = $db->prepare("INSERT INTO details (country_id, label, value) VALUES (:country_id, :label, :value)");

    $insertQuery->bindParam(':country_id', $country_id, PDO::PARAM_INT);
    $insertQuery->bindParam(':label', $label, PDO::PARAM_STR);
    $insertQuery->bindParam(':value', $value, PDO::PARAM_STR);

    return $insertQuery->execute();

    $db = null;
}
