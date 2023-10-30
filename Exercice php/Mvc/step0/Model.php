<?php


function getCountries(){


    try {
        $db = new PDO('mysql:host=localhost; dbname=db_countries; port=3306; charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $country = $db->prepare('SELECT * FROM countries');
        $country->execute(); 
        $countries = $country->fetchAll(); 

        return $countries;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

