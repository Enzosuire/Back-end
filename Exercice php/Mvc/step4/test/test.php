<?php

$entityManager = require_once("C:/xampp/htdocs/Mvc/step4/config/doctrine2-config.php");

use App\entity\Country;


/*
* Ajout d'un pays
*/

echo"AJOUT D'UN PAYS";
$irlande = new Country();
echo "<pre>";
var_dump($irlande);
echo "<pre>";


$irlande->setLabel("Grèce");
echo "<pre>";
var_dump($irlande);
echo "<pre>";

$entityManager->persist($irlande);
$entityManager->flush();
echo "<pre>";
var_dump($irlande);
echo "<pre>";

// Vérification du résultats
echo"Identifiant du pays crée : ", $irlande->getId();;


/*
* Récupération d'un pays
*/

echo "<br><br>RECUPERATION D'UN PAYS";

$country = $entityManager->find(Country::class, 13);
echo sprintf(
"Country (id: %s, label: %s)",
$country->getId(),
$country->getLabel()

);

/*
* Mise à jour d'un pays
*/

echo "<br><br>MISE A JOUR D'UN PAYS<br><br>";

$country = $entityManager->find(Country::class,21);
echo "<pre>";
var_dump($country);
echo "<pre>";


$country->setLabel("");
echo "<pre>";
var_dump($country);
echo "<pre>";

$entityManager->persist($country);
$entityManager->flush();
echo "<pre>";
var_dump($country);
echo "<pre>";


/*
* Suppression d'un pays
*/

echo ("<br><br> SUPPRESSION D'UN PAYS");

$country = $entityManager->find(Country::class,20);
echo "<pre>";
var_dump($country);
echo "<pre>";

$entityManager->remove($country);
$entityManager->flush($country);

$country = $entityManager->find(Country::class,20);
echo "<pre>";
var_dump($country);
echo "<pre>";


$country = unserialize("informations du pays serialisées");
//  Reprise en charge de l'objet par l'entity manager
$entityManager->merge($country);
$country->setLabel("Belgique");
$entityManager->flush();


$countryRepository = $entityManager->getRepository(Country::class);
