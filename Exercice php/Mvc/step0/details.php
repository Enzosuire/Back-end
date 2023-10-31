<?php 

require("Model.php");


if (isset($_GET['id'])){
 $country_id = ($_GET['id']);
 $details = getDetails($country_id);
 
 include("detailsView.php");

 

}

