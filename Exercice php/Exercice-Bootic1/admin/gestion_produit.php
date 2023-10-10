<?php include '../inc/img/header.inc.php';


$product_id = $_GET['id'];
$CreationP = $_GET['action'];
   
try {
   $username = "root";
   $password = '';
   $dsn = 'mysql:host=localhost;dbname=dbbootic;port=3306;charset=utf8';
   $db = new PDO($dsn, $username, $password);
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $req = $db->query('SELECT * FROM t_produit INNER JOIN t_categorie ON (t_produit.id_categorie = t_categorie.id_categorie)');

   
$res = $req->fetchAll();
if ($CreationP == "C") {
echo' <div class="container mt-5 w-75  p-5 form-inscription">
        
<div class="row justify-content-center">
    <div class=" w-100 border border-dark p-5">
        <form method="post" action="data.php" enctype="multipart/form-data">
            <h1 class="text-center">Gestion de produit </h1>
            <div class="row">
                <div class="form-group col-6">
                <label for="inputreference">Référence:</label>
                <textarea type="Pseudo" class="form-control" name="reference" id="reference" placeholder=""></textarea>
                </div>
                <div class="form-group col-6">
                <label for="inputcategorie">Catégorie:</label>
                <textarea type="password" class="form-control"  name="categorie" id="categorie" placeholder=""></textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                <label for="inputtitre">Titre:</label>
                <textarea type="titre" class="form-control" name="titre" id="titre" placeholder=""></textarea>
                </div>
                <div class="form-group col-6">
                <label for="inputDescription">Description:</label>
                <textarea type="description" class="form-control" name="Description" id="Description" placeholder=""></textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                <label for="inputcouleur">Couleur:</label>
                <textarea type="pseudo" class="form-control" name="couleur" id="couleur" placeholder=""></textarea>
                </div>
                <div class="form-group col-6 ">
                <p> Sexe : </p>
                <input class="form-check-input" type="radio" name="genre" id="gridRadios1" value="Homme" checked>
                <label class="form-check-label" for="gridRadios">
                   Homme
                </label>
                <input class="form-check-input" type="radio" name="genre" id="gridRadios2" value="Femme">
                <label class="form-check-label" for="gridRadios2">
                    Femme
                </label>
                <input class="form-check-input" type="radio" name="genre" id="gridRadios3" value="Mixte">
                <label class="form-check-label" for="gridRadios3">
                    Mixte
                </label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="form-group col-6 ">
                <label for="inputPrix">Prix:</label>
                <textarea type="text" class="form-control" name="Prix" id="Prix" placeholder=""></textarea>
                </div>
                <div class="form-group col-6">
                <label for="inputStock">Stock:</label>
                <textarea type="text" class="form-control" name="stock" id="stock"></textarea>
                </div>
            </div>
            
            <div class="row mt-2">
                    <div class="form-group col-6">
                    <label for="Select" class="form-label">Taille:</label>
                    <select id="Select"class="form-control" name="taille">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XLL">XXL</option>
                    </select>
                    </div>
                    <div class="form-group col-6 mt-2">
                    <label for="inputphoto">Photo:</label>
                    <td class= "text-center" colspan="2"><img src="../inc/img/.webp" width="80rem"  "class="card-img-top mt-3"alt="..." ></td >
                    <input type="file" name="file" class="form-control mt-2" id="image">
                    </div>
            </div>
            <div class="row justify-content-center mt-2"> 
            <input type="submit" class="btn btn-outline-dark mt-3 col-3 " value ="Modification du produit">

                
            </div>

        </form>

        

    </div>

</div>

</div>';

}


elseif ($CreationP == "U") {

    $req = $db->query('SELECT * FROM t_produit INNER JOIN t_categorie ON (t_produit.id_categorie = t_categorie.id_categorie) WHERE id_produit = '. $product_id);

    
    $res = $req->fetchAll();
   
    foreach ($res as $key => $value) {
     echo' <div class="container mt-5 w-75  p-5 form-inscription">
        
     <div class="row justify-content-center">
         <div class=" w-100 border border-dark p-5">
         <form method="post" action="data.php" enctype="multipart/form-data">
                 <h1 class="text-center">Gestion de produit </h1>
                 <div class="row">
                     <div class="form-group col-6">
                     <label for="inputEmail4">Référence:</label>
                     <textarea type="Pseudo" class="form-control" id="inputPseudo" placeholder="">'.$value[1].'</textarea>
                     </div>
                     <div class="form-group col-6">
                     <label for="inputPassword4">Catégorie:</label>
                     <textarea type="password" class="form-control" id="inputPassword4" placeholder="">'.$value[2].'</textarea>
                     </div>
                 </div>
                 <div class="row">
                     <div class="form-group col-6">
                     <label for="inputEmail4">Titre:</label>
                     <textarea type="Nom" class="form-control" id="Nom-inscription" placeholder="">'.$value[3].'</textarea>
                     </div>
                     <div class="form-group col-6">
                     <label for="inputPassword4">Description:</label>
                     <textarea type="prenom" class="form-control" id="prenom-inscription" placeholder="">'.$value[4].'</textarea>
                     </div>
                 </div>
                 <div class="row">
                     <div class="form-group col-6">
                     <label for="inputEmail4">Couleur:</label>
                     <textarea type="email" class="form-control" id="inputEmail4" placeholder="">'.$value[5].'</textarea>
                     </div>
                     <div class="form-group col-6 ">
                     <p> Sexe : </p>
                     <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Homme" checked>
                     <label class="form-check-label" for="gridRadios">
                        Homme
                     </label>
                     <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Femme">
                     <label class="form-check-label" for="gridRadios2">
                         Femme
                     </label>
                     <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Mixte">
                     <label class="form-check-label" for="gridRadios">
                       Mixte
                     </label>
                     </div>
                 </div>
                 <div class="row mt-2">
                     <div class="form-group col-6 ">
                     <label for="inputAddress">Prix:</label>
                     <textarea type="text" class="form-control" id="inputAddress" placeholder="">'.$value[9].'</textarea>
                     </div>
                     <div class="form-group col-6">
                     <label for="inputCity">Stock:</label>
                     <textarea type="text" class="form-control" id="inputCity">'.$value[10].'</textarea>
                     </div>
                 </div>
                 
                 <div class="row mt-2">
                     <div class="form-group col-6">
                         <label for="disabledSelect" class="form-label">Taille:</label>
                         <select id="disabledSelect" class="form-select '.$value[7].'">
                           <option>xs</option>
                           <option>s</option>
                           <option>m</option>
                           <option>l</option>
                           <option>xl</option>
                           <option>xxl</option>
                         </select>
                       </div>
                       <div class="form-group col-6 mt-2">
                         <label for="inputphoto">Photo:</label>
                         <td class= "text-center" colspan="2"><img src="../inc/img/'.$value[12].'/'.$value[8].'.webp" width="80rem"  "class="card-img-top mt-3"'.$value[3].' alt="..." ></td >
                         <input type="file" name="file" class="form-control mt-2" id="image">
                         </div>
                 </div>
                 <div class="row justify-content-center mt-2"> 
                 <button type="submit" class="btn btn-outline-dark mt-3 col-3 ">Modification du produit</button>

                     
                 </div>

             </form>

             

         </div>

     </div>

</div>';

    }
   
}

} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}

include '../inc/img/footer.inc.php'; ?>

