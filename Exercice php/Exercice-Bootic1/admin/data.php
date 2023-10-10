<?php 
include '../inc/img/header.inc.php'; 

if (isset($_FILES['file'])) {
    $tmpName = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];
}

$tabExtension = explode('.', $name);
$extension = strtolower(end($tabExtension));

//Tableau des extensions que l'on accepte
$extensions = ['jpg', 'png', 'jpeg', 'gif','webp'];

//Taille max que l'on accepte
$maxSize = 400000;

if (in_array($extension, $extensions) && $size <= $maxSize && $error == 0) {
    move_uploaded_file($tmpName, '../inc/img/' . $name);
} else {
    echo "Une erreur est survenue";
}



$reference = $_POST['reference'];
$categorie = $_POST['categorie'];
$titre = $_POST['titre'];
$description = $_POST['Description'];
$couleur = $_POST['couleur'];
$sexe =  $_POST['genre'];
$prix = $_POST['Prix'];
$stock = $_POST['stock'];
$taille = strtoupper($_POST['taille']);



// echo $reference ;
// echo "<br>";
// echo $categorie ;
// echo "<br>";
// echo $titre ;
// echo "<br>";
// echo $description ;
// echo "<br>";
// echo $couleur ;
// echo "<br>";
// echo $sexe ;
// echo "<br>";
// echo $prix ;
// echo "<br>";
// echo $stock ;
// echo "<br>";
// echo $taille;
// echo "<br>";
// echo $name ;


try {
    $username = "root";
    $password = '';
    $dsn = 'mysql:host=localhost;dbname=dbbootic;port=3306;charset=utf8';
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = ('INSERT INTO t_produit (reference, id_categorie, titre, description, couleur, taille, public, photo, prix, stock) 
    VALUES (:reference, :categorie, :titre, :description, :couleur, :taille, :sexe, :name, :prix, :stock)');

    $stmt = $db->prepare($sql);
    $stmt->bindValue(':reference', $reference, PDO::PARAM_STR);
    $stmt->bindValue(':categorie', $categorie, PDO::PARAM_INT);
    $stmt->bindValue(':titre', $titre, PDO::PARAM_STR);
    $stmt->bindValue(':description', $description, PDO::PARAM_STR);
    $stmt->bindValue(':couleur', $couleur, PDO::PARAM_STR);
    $stmt->bindValue(':taille', $taille, PDO::PARAM_STR);
    $stmt->bindValue(':sexe', $sexe, PDO::PARAM_STR);
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $stmt->bindValue(':prix', $prix, PDO::PARAM_INT);
    $stmt->bindValue(':stock', $stock, PDO::PARAM_INT);
    

    if ($stmt->execute()){
        echo '
        <div class="row justify-content-center">
        <div class=" w-100 border border-dark p-5">
            <h4 class="text-center">Les données ont été insérées avec succès</h4>.
            <div class="text-center"><a class="text-black  text-decoration-none" href="gestion_boutique.php"><input type="button"class="btn btn-outline-dark mt-3 col-3 "value ="Retour vers le gestionnaire de boutique"></a></div>
        </div>
        </div>';
    } else {
        echo"Une erreur est survenue lors de l'insertion des données :";
    }

   
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}






if (isset($_FILES['file'])) {
    $tmpName = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];
}

$tabExtension = explode('.', $name);
$extension = strtolower(end($tabExtension));

//Tableau des extensions que l'on accepte
$extensions = ['jpg', 'png', 'jpeg', 'gif','webp'];

//Taille max que l'on accepte
$maxSize = 400000;

if (in_array($extension, $extensions) && $size <= $maxSize && $error == 0) {
    move_uploaded_file($tmpName, '../inc/img/' . $name);
} else {
    echo "Une erreur est survenue";
}



$reference = $_POST['reference'];
$categorie = $_POST['categorie'];
$titre = $_POST['titre'];
$description = $_POST['Description'];
$couleur = $_POST['couleur'];
$sexe =  $_POST['genre'];
$prix = $_POST['Prix'];
$stock = $_POST['stock'];
$taille = strtoupper($_POST['taille']);



// echo $reference ;
// echo "<br>";
// echo $categorie ;
// echo "<br>";
// echo $titre ;
// echo "<br>";
// echo $description ;
// echo "<br>";
// echo $couleur ;
// echo "<br>";
// echo $sexe ;
// echo "<br>";
// echo $prix ;
// echo "<br>";
// echo $stock ;
// echo "<br>";
// echo $taille;
// echo "<br>";
// echo $name ;


try {
    $username = "root";
    $password = '';
    $dsn = 'mysql:host=localhost;dbname=dbbootic;port=3306;charset=utf8';
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = ('UPDATE t_produit SET (reference =:reference, id_categorie= :id_categorie, titre=:titre, description = :description , couleur = :couleur, taille = :taille, public, photo, prix, stock) 
    VALUES (:reference, :categorie, :titre, :description, :couleur, :taille, :sexe, :name, :prix, :stock)');

    $stmt = $db->prepare($sql);
    $stmt->bindValue(':reference', $reference, PDO::PARAM_STR);
    $stmt->bindValue(':categorie', $categorie, PDO::PARAM_INT);
    $stmt->bindValue(':titre', $titre, PDO::PARAM_STR);
    $stmt->bindValue(':description', $description, PDO::PARAM_STR);
    $stmt->bindValue(':couleur', $couleur, PDO::PARAM_STR);
    $stmt->bindValue(':taille', $taille, PDO::PARAM_STR);
    $stmt->bindValue(':sexe', $sexe, PDO::PARAM_STR);
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $stmt->bindValue(':prix', $prix, PDO::PARAM_INT);
    $stmt->bindValue(':stock', $stock, PDO::PARAM_INT);
    

    if ($stmt->execute()){
        echo '
        <div class="row justify-content-center">
        <div class=" w-100 border border-dark p-5">
            <h4 class="text-center">Les données ont été insérées avec succès</h4>.
            <div class="text-center"><a class="text-black  text-decoration-none" href="gestion_boutique.php"><input type="button"class="btn btn-outline-dark mt-3 col-3 "value ="Retour vers le gestionnaire de boutique"></a></div>
        </div>
        </div>';
    } else {
        echo"Une erreur est survenue lors de l'insertion des données :";
    }

   
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
include '../inc/img/footer.inc.php';



?>


