
<?php include './inc/img/header.inc.php'; 

try {
    $username = "root";
    $password = '';
    $dsn = 'mysql:host=localhost;dbname=dbbootic;port=3306;charset=utf8';
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $req = $db->query('SELECT * FROM t_produit INNER JOIN t_categorie ON (t_produit.id_categorie = t_categorie.id_categorie)') ;

    
    $res = $req->fetchAll();
    echo' <div class="container-fluid  p-4"> 
    <div class="row">
        <div class="col-12" >
            <div id="carouselExampleCaptions" class="carousel slide ">
                        <div class="carousel-indicators ">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                
                                </div>
                                <div class="carousel-inner " >
                                    <div class="carousel-item active ">
                                        <img src="./inc/img/t_shirt/ts_azur.webp" class="d-block    mx-auto" alt="..." style="width: 35%;">
                                        <div class="carousel-caption d-none d-md-block"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./inc/img/sweats/sw_jaune.webp" class="d-block mx-auto" alt="..." style="width: 35%;">
                                        <div class="carousel-caption d-none d-md-block"> </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./inc/img/sacs/sac_rouge.webp" class="d-block  mx-auto"alt="..." style="width: 35%;" >
                                        <div class="carousel-caption d-none d-md-block"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./inc/img/casquettes/casquette_rose.webp" class="d-block mx-auto" alt="..." style="width: 35%; ">
                                        <div class="carousel-caption d-none d-md-block"></div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" style="background-color: black">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" style="background-color: black">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                        </div>
                              
                                
            </div>        
                                
        </div> 
          
    </div>
</div>';
    echo "<p class=\"text-center p-3\">Produit de la Bootic </p> ";
    echo "<div class=\"container-fluid mt-3 \">";
    echo "<div class=\"row\">";
   
    foreach ($res as $key => $value) {
        echo "<div class=\"col-lg-3 col-12  col-md-4 p-3 text-center\">";
        echo "<div class=\"card   mx-auto p-3\" style=\"width: 16rem;\">";
        echo "<img class=\"card-img-top\" src=\"../Exercice-Bootic1/inc/img/$value[8]\" alt=\"Card image cap\">";
        echo "<div class=\"card-body\">";
        echo "<h5 class=\"card-title text-center\">$value[3]</h5>";
        echo "<p class=\"card-text text-center \">$value[9] €  </p>";
        echo "<a href=\"panier.php?id=$value[0]\" class=\"btn btn-outline-dark m-2\">Acheter</a>";
        echo "<a href=\"produit.php?id=$value[0]\" class=\"btn btn-outline-dark\">Détails</a>";
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


