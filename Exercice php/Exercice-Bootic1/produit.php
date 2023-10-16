
<?php include './inc/img/header.inc.php'; 


 $product_id = $_GET['id'];
   
 try {
    $username = "root";
    $password = '';
    $dsn = 'mysql:host=localhost;dbname=dbbootic;port=3306;charset=utf8';
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $req = $db->query('SELECT * FROM t_produit INNER JOIN t_categorie ON (t_produit.id_categorie = t_categorie.id_categorie) WHERE id_produit = '. $product_id);

    
    $res = $req->fetchAll();
    echo "<div class=\"container-fluid mt-3 \">";  
    echo "<div class=\"row\">";
   
    foreach ($res as $key => $value) {
     echo' <div class="container mt-2 w-75  p-5 form-produit">
         <div class="row justify-content-center">
             <div class="text-center w-100 border border-dark p-5">
                 <form class="">
                     <h1>Produit</h1>
                     <div class="container-fluid">
                         <div class="row">
                             <div class="mb-3 col-6 mx-auto d-flex justify-content-center">
                                 <div class="card" style="width: 20rem;">
                                     <img src="./../Exercice-Bootic1/inc/img/'.$value[8].'"class="card-img-top mt-3" alt="...">
                                     <div class="card-body">
                                         <h5 class="card-title">'.$value[3].'</h5>
                                         <p class="card-text"> '.$value[4].'</p>
                                         <h5>'.$value[9].' €</h5>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <a href="panier.php?id=<?= $product_id ?>" class="btn btn-outline-dark">Accéder au panier</a>
                    
                 </form>
             </div>
         </div>
     </div>';

    }
   

     
    echo "</div>";  
    echo "</div>";  
  
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}





 include './inc/img/footer.inc.php'; ?>




