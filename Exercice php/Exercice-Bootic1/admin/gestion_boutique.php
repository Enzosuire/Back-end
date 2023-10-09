<?php include '../inc/img/header.inc.php';



try {
    $username = "root";
    $password = '';
    $dsn = 'mysql:host=localhost;dbname=dbbootic;port=3306;charset=utf8';
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $req = $db->query('SELECT * FROM t_produit INNER JOIN t_categorie ON (t_produit.id_categorie = t_categorie.id_categorie)');
    echo('<div class="row  py-5">
    <div class="col-12 text-center">
      <button class="btn btn-dark mx-auto"><a class="text-light text-decoration-none" href="gestion_produit.php">Ajouter un Produit</a></button>
    </div>
    </div>');
    $res = $req->fetchAll();
  
   
    foreach ($res as $key => $value) {
     echo' <table class="table table table-bordered ">
    <h1 class="text-center mt-2" >Gestionnaire de la boutique</h1>
  <thead>
    <tr>
      <th scope="col">id_produit</th>
      <td class= "text-center">'.$value[0].'</td >
      
    </tr>
  </thead>
  <tbody >
    <tr>
      <th scope="row">reference</th>
      <td class= "text-center">'.$value[1].'</td >
    </tr>
    <tr>
      <th scope="row">categorie</th>
      <td class= "text-center">'.$value[2].'</td >
    </tr>
    <tr>
      <th scope="row">titre</th>
      <td class= "text-center" colspan="2">'.$value[3].'</td >
      
    </tr>
    <tr>
      <th scope="row">Description</th>
      <td class= "text-center" colspan="2">'.$value[4].'</td>
      
    </tr>
    <tr>
      <th scope="row">Couleur</th>
      <td class= "text-center" colspan="2">'.$value[5].' </td>
      
    </tr>
    <tr>
      <th scope="row">Taille</th>
      <td class= "text-center" colspan="2">'.$value[6].'</td>
      
    </tr>
    <tr>
      <th scope="row">Public</th>
      <td class= "text-center" colspan="2">'.$value[7].'</td >
      
    </tr>
    <tr>
      <th scope="row">Photo</th>
      <td class= "text-center" colspan="2"><img src="../inc/img/'.$value[12].'/'.$value[8].'.webp" width="80rem"  "class="card-img-top mt-3 " alt="..." ></td >
      
    </tr>
    <tr>
      <th scope="row">Prix</th>
      <td class= "text-center" colspan="2">'.$value[9].'</td >
      
    </tr>
    <tr>
      <th scope="row">Stock</th>
      <td class= "text-center" colspan="2">'.$value[10].'</td >
      
    </tr>
    <tr>
      <th scope="row">Modification</th>
      <td class= "text-center" colspan="2"><a href="gestion_produit.php?id=$value[0]" class="text-decoration-none text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-database-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Z"/>
  <path d="M12.096 6.223A4.92 4.92 0 0 0 13 5.698V7c0 .289-.213.654-.753 1.007a4.493 4.493 0 0 1 1.753.25V4c0-1.007-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1s-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4v9c0 1.007.875 1.755 1.904 2.223C4.978 15.71 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.525 4.525 0 0 1-.813-.927C8.5 14.992 8.252 15 8 15c-1.464 0-2.766-.27-3.682-.687C3.356 13.875 3 13.373 3 13v-1.302c.271.202.58.378.904.525C4.978 12.71 6.427 13 8 13h.027a4.552 4.552 0 0 1 0-1H8c-1.464 0-2.766-.27-3.682-.687C3.356 10.875 3 10.373 3 10V8.698c.271.202.58.378.904.525C4.978 9.71 6.427 10 8 10c.262 0 .52-.008.774-.024a4.525 4.525 0 0 1 1.102-1.132C9.298 8.944 8.666 9 8 9c-1.464 0-2.766-.27-3.682-.687C3.356 7.875 3 7.373 3 7V5.698c.271.202.58.378.904.525C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777ZM3 4c0-.374.356-.875 1.318-1.313C5.234 2.271 6.536 2 8 2s2.766.27 3.682.687C12.644 3.125 13 3.627 13 4c0 .374-.356.875-1.318 1.313C10.766 5.729 9.464 6 8 6s-2.766-.27-3.682-.687C3.356 4.875 3 4.373 3 4Z"/>
</svg></a></td>
      
    </tr>
    <tr>
      <th scope="row">Suppresion</th>
      <td class= "text-center" colspan="2"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
</svg></td >
      
    </tr>
  </tbody>
</table> ';

    }
   

} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}


include '../inc/img/footer.inc.php'; ?>