<?php 


require("Model.php");

function accueil()
{

 $req = getCountries();

 require ('countries.View.php');

}



 function details() {



if (isset($_GET['id'])){
 $country_id = ($_GET['id']);
 $details = getDetails($country_id);
 
 require("detailsView.php");

 

}
 }




