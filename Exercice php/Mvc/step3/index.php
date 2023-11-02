<?php

require ("./Controller/countryController.php");


try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == "details") {
            if (isset($_GET['id'])) {
                $country_id = $_GET['id'];
                if ($country_id != 0) {
                    details();
                } else {
                    throw new Exception("Id non valide", 3);
                }
            } else {
                throw new Exception("Id inexistant", 2);
            }
        } elseif ($_GET['action'] == "addCountryDetail") {
            if (isset($_GET['countryId']) && $_GET['countryId'] > 0) {
                if (isset($_POST['label'])) {
                    if (isset($_POST['value'])) {

                        addCountryDetail($_GET['countryId'], $_POST['label'], $_POST['value']);
                    } else {
                        throw new Exception("Erreur : valeur non définie");
                    }
                } else {
                    throw new Exception("Erreur : clé non valide");
                }
            } else {
                throw new Exception("Erreur : Identifiant de pays bon valide");
            }
        } else {
            throw new Exception("Erreur : action non valide");
        }
    } else {
        accueil();
    }
} catch (Exception $e) {
    $msgErreur = $e->getMessage();
    $file = basename($e->getFile());
    $line = $e->getLine();

    require('./View/errorView.php');
}



// require ('./Model.php');

// $req = getCountries();


// require ('countries.View.php');
