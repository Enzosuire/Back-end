
<?php

require_once("Repository.php");


class DetailRepository extends Repository {


    function getDetails($country_id)
    {
    
        $db = $this->getBdd();
        $details = $db->prepare("SELECT * FROM details WHERE country_id = :country_id");
        $details->bindParam(':country_id', $country_id, PDO::PARAM_INT);
        $details->execute();
        $countryDetails = $details->fetchAll(PDO::FETCH_ASSOC);
    
        return $countryDetails;
    }


    function saveCountryDetail($country_id, $label, $value)
    {
    
        $db = $this->getBdd();
    
        $insertQuery = $db->prepare("INSERT INTO details (country_id, label, value) VALUES (:country_id, :label, :value)");
    
        $insertQuery->bindParam(':country_id', $country_id, PDO::PARAM_INT);
        $insertQuery->bindParam(':label', $label, PDO::PARAM_STR);
        $insertQuery->bindParam(':value', $value, PDO::PARAM_STR);
    
        return $insertQuery->execute();
    
        $db = null;
    }
    

}