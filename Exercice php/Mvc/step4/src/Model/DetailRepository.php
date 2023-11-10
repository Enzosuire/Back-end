<?php

namespace App\Modele;

use Doctrine\ORM\EntityRepository;
use PDO;

// require_once("./step4/test/query-builder.php");


class DetailRepository  {


    function getDetails($country_id)
    {
    
        // $db = $this->getBdd();
        // $details = $db->prepare("SELECT * FROM details WHERE country_id = :country_id");
        // $details->bindParam(':country_id', $country_id, PDO::PARAM_INT);
        // $details->execute();
        // $countryDetails = $details->fetchAll(PDO::FETCH_ASSOC);
    
        // return $countryDetails;
    }


    function saveCountryDetail($country_id, $label, $value)
    {
    
        // $db = $this->getBdd();
    
        // $insertQuery = $db->prepare("INSERT INTO details (country_id, label, value) VALUES (:country_id, :label, :value)");
    
        // $insertQuery->bindParam(':country_id', $country_id, PDO::PARAM_INT);
        // $insertQuery->bindParam(':label', $label, PDO::PARAM_STR);
        // $insertQuery->bindParam(':value', $value, PDO::PARAM_STR);
    
        // return $insertQuery->execute();
    
        // $db = null;
    }



    function getdetailsPays($country_id)
    {
        // $db = $this->getBdd();
        // $country = $db->prepare('SELECT * FROM countries WHERE id = :country_id');
        // $country->bindParam(':country_id', $country_id, PDO::PARAM_INT);
        // $country->execute();
        // $countries = $country->fetch();
    
        // return $countries;
    }
    

}