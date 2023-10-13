<?php 

session_start();

include '../inc/img/header.inc.php'; 

$CreationP = $_GET['action'];


if ($CreationP == "C") {


$pseudo = htmlspecialchars(strtoupper($_POST['pseudo']));
$mdp = $_POST['mdp'];
$nom = htmlspecialchars(strtoupper($_POST['nom']));
$prenom = htmlspecialchars(strtoupper($_POST['prenom']));
$email = htmlspecialchars($_POST['email']);
$sexe =  htmlspecialchars($_POST['civilite']);
$adresse = htmlspecialchars($_POST['adresse']);
$ville = htmlspecialchars($_POST['ville']);
$cp = htmlspecialchars($_POST['cp']);



$hashedPassword = password_hash($mdp, PASSWORD_BCRYPT);

// echo $pseudo ;
// echo "<br>";
// echo $mdp ;
// echo "<br>";
// echo $nom ;
// echo "<br>";
// echo $prenom ;
// echo "<br>";
// echo $email ;
// echo "<br>";
// echo $sexe ;
// echo "<br>";
// echo $adresse;
// echo "<br>";
// echo $ville ;
// echo "<br>";
// echo $cp;
// echo "<br>";



try {
    $username = "root";
    $password = '';
    $dsn = 'mysql:host=localhost;dbname=dbbootic;port=3306;charset=utf8';
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO t_membre (pseudo, mdp, nom, prenom, email, civilite, adresse, ville, cp)
    VALUES (:pseudo, :hashedPassword , :nom, :prenom, :email, :sexe, :adresse, :ville, :cp)";

    $stmt = $db->prepare($sql);
    $stmt->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
    $stmt->bindValue(':hashedPassword', $hashedPassword, PDO::PARAM_STR); 
    $stmt->bindValue(':nom', $nom, PDO::PARAM_STR);
    $stmt->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->bindValue(':sexe', $sexe, PDO::PARAM_STR);
    $stmt->bindValue(':adresse', $adresse, PDO::PARAM_STR);
    $stmt->bindValue(':ville', $ville, PDO::PARAM_STR);
    $stmt->bindValue(':cp', $cp, PDO::PARAM_INT);
    

    if ($stmt->execute()){
        echo '
        <div class="row justify-content-center">
        <div class=" w-100 border border-dark p-5">
            <h4 class="text-center">L\'inscription a bien été prise compte.</h4>.
            <div class="text-center"><a class="text-black  text-decoration-none" href="/Exercice-Bootic1/index.php"><input type="button"class="btn btn-outline-dark mt-3 col-3 "value ="Retour vers le gestionnaire de boutique"></a></div>
        </div>
        </div>';
    } else {
        echo"Une erreur est survenue lors de l'insertion des données :";
    }

   
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}


} else {
    $pseudo = htmlspecialchars(strtoupper($_POST['pseudo']));
    $mdp = htmlspecialchars($_POST['mdp']);
    
    try {
        $username = "root";
        $password = '';
        $dsn = 'mysql:host=localhost;dbname=dbbootic;port=3306;charset=utf8';
        $db = new PDO($dsn, $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $sql = "SELECT * FROM t_membre WHERE pseudo = ?";  
        $stmt = $db->prepare($sql);
        $stmt->bindValue(1, $pseudo, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            if (password_verify($mdp, $user['mdp'])) {
                $_SESSION['pseudo'] = $user['pseudo'];
                header('Location: ./../profil.php');
            } else {
                echo '<div class="row justify-content-center">
                    <div class="w-100 border border-dark p-5">
                    <h4 class="text-center">Mot de passe incorrect.</h4>
                    <div class="text-center"><a class="text-black text-decoration-none" href="/Exercice-Bootic1/index.php">
                    <input type="button" class="btn btn-outline-dark mt-3 col-3" value="Retour vers la boutique"></a></div>
                    </div>
                </div>';
            }
        } else {
            echo '<div class="row justify-content-center">
                <div class="w-100 border border-dark p-5">
                    <h4 class="text-center">Vous n\'êtes pas inscrit.</h4>
                    <div class="text-center"><a class="text-black text-decoration-none" href="/Exercice-Bootic1/index.php">
                    <input type="button" class="btn btn-outline-dark mt-3 col-3" value="Retour vers la boutique"></a></div>
                </div>
            </div>';
        }
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
    }
}
include '../inc/img/footer.inc.php';?>




