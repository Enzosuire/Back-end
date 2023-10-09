<?php 
include '../inc/img/header.inc.php'; 

$reference = $_POST['reference'];
$categorie = $_POST['categorie'];
$titre = $_POST['titre'];
$description = $_POST['Description'];
$couleur = $_POST['couleur'];
$sexe =  $_POST['genre'];
$prix = $_POST['Prix'];
$stock = $_POST['stock'];
$taille = strtoupper($_POST['taille']);
$image = '../inc/img/sacs/sac_jaune.webp';

echo $reference ;
echo "<br>";
echo $categorie ;
echo "<br>";
echo $titre ;
echo "<br>";
echo $description ;
echo "<br>";
echo $couleur ;
echo "<br>";
echo $sexe ;
echo "<br>";
echo $prix ;
echo "<br>";
echo $stock ;
echo "<br>";
echo $taille;
echo "<br>";
echo $image ;
echo "<br>";

try {
    $username = "root";
    $password = '';
    $dsn = 'mysql:host=localhost;dbname=dbbootic;port=3306;charset=utf8';
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'INSERT INTO t_produit (reference, id_categorie, titre, description, couleur,sexe, prix, stock ,taille, image)
    VALUES (:reference, :categorie, :titre, :description, :couleur, :sexe, :prix ,:stock, :taille, :image,   )';

    $stmt = $db->prepare($sql);
    $stmt->bindParam(':reference', $reference, PDO::PARAM_STR);
    $stmt->bindParam(':categorie', $categorie, PDO::PARAM_INT);
    $stmt->bindParam(':titre', $titre, PDO::PARAM_STR);
    $stmt->bindParam(':description', $description, PDO::PARAM_STR);
    $stmt->bindParam(':couleur', $couleur, PDO::PARAM_STR);
    $stmt->bindParam(':sexe', $sexe, PDO::PARAM_STR);
    $stmt->bindParam(':prix', $prix, PDO::PARAM_INT);
    $stmt->bindParam(':stock', $stock, PDO::PARAM_INT);
    $stmt->bindParam(':taille', $taille, PDO::PARAM_STR);
    $stmt->bindParam(':image', $image, PDO::PARAM_STR);

    $stmt->execute();

   
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}

include '../inc/img/footer.inc.php';
?>
