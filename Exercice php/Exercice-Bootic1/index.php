
<?php include './inc/img/header.inc.php'; 

try {
    $username = "root";
    $password = '';
    $dsn = 'mysql:host=localhost;dbname=dbbootic;port=3306;charset=utf8';
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $req = $db->query('SELECT * FROM t_produit INNER JOIN t_categorie ON (t_produit.id_categorie = t_categorie.id_categorie)') ;

    
    $res = $req->fetchAll();
    echo "<div class=\"container-fluid mt-3\">";
    echo "<div class=\"row\">";
   
    foreach ($res as $key => $value) {
        echo "<div class=\"col-3 p-3 text-center\">";
        echo "<div class=\"card  mx-auto p-3\" style=\"width: 16rem;\">";
        echo "<img class=\"card-img-top\" src=\"../Exercice-Bootic/inc/img/$value[12]/$value[8].webp\" alt=\"Card image cap\">";
        echo "<div class=\"card-body\">";
        echo "<h5 class=\"card-title text-center\">$value[3]</h5>";
        echo "<p class=\"card-text text-center \">$value[9] €  </p>";
        echo "<a href=\"#\" class=\"btn btn-outline-dark \">Acheter</a>";
        echo "<a href=\"#\" class=\"btn btn-outline-dark\">Détails</a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";  

    }

     
    echo "</div>";  
    echo "</div>";  
  
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}




include './inc/img/footer.inc.php'; ?>


