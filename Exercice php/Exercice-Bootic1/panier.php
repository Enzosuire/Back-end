<?php
include './inc/img/header.inc.php';

session_start();

if (isset($_SESSION['panier']) && !empty($_SESSION['panier'])) {
    echo '<div class="container mt-2 w-75 p-5 form-panier">
        <div class="row justify-content-center">
            <div class="text-center w-100 border border-dark p-5">
                <form method="post" action="./admin/admin.php?action=CO" enctype="multipart/form-data">
                    <h1>Panier</h1>
                    <div class="container-fluid">
                        <div class="row">';
    $total = 0;

    // Connexion à la base de données
    $username = "root";
    $password = '';
    $dsn = 'mysql:host=localhost;dbname=dbbootic;port=3306;charset=utf8';
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Parcourez les produits dans le panier
    foreach ($_SESSION['panier'] as $product) {
        $sql = 'SELECT * FROM t_produit WHERE id_produit = :id';
        $stmt = $db->prepare($sql);
        $stmt->execute(['id' => $product]);
        $product = $stmt->fetch();

        echo '<div class="mb-3 col-6 mx-auto d-flex justify-content-center mt-">
                <div class="card" style="width: 20rem;">
                    <img src="' . $product['image'] . '" class="card-img-top mt-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">' . $product['nom'] . '</h5>
                        <p class="card-text">' . $product['description'] . '<br>Taxes incluses et frais d\'expédition calculés lors du paiement</p>
                        <h5>Total : ' . $product_details['prix'] . ' €</h5>
                    </div>
                </div>
            </div>';

        // Ajoutez le prix de chaque produit au total
        $total += $product_details['prix'];
    }

    echo '</div>
        </div>
        <h5>Total : ' . $total . ' €</h5>
        <button type="submit" class="btn btn-outline-dark">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-lock2" viewBox="0 0 16 16">
                <path d="M8 5a1 1 0 0 1 1 1v1H7V6a1 1 0 0 1 1-1zm2 2.076V6a2 2 0 1 0-4 0v1.076c-.54.166-1 .597-1 1.224v2.4c0 .816.781 1.3 1.5 1.3h3c.719 0 1.5-.484 1.5-1.3V8.3c0-.627-.46-1.058-1-1.224z"></path>
                <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"></path>
            </svg> Passer la commande
        </button>
    </form>
</div>
</div>
</div>';
} else {
    echo "Votre panier est vide.";
}

include './inc/img/footer.inc.php';
?>


<!--    


<div class="container mt-2 w-75  p-5  form-panier">
    <div class="row justify-content-center">
        <div class="text-center w-100 border border-dark p-5">
            <form method="post" action="./admin/admin.php?action=CO"  enctype="multipart/form-data">
                <h1>Panier</h1>
                <div class="container-fluid">
                    <div class="row">
                        <div class="mb-3 col-6 mx-auto d-flex justify-content-center  mt-">
                            <div class="card" style="width: 20rem;">
                                <img src="./inc/img/t_shirt/ts_azur.webp"class="card-img-top mt-3" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">T-shirt bleu</h5>
                                    <p class="card-text">Taille : L <br>
                                    Taxes incluses et frais d'expédition calculés lors du paiement
                                        <br>
                                      
                                    </p>
                                    <h5> Total : 40€</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-dark " >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-lock2" viewBox="0 0 16 16">
                    <path d="M8 5a1 1 0 0 1 1 1v1H7V6a1 1 0 0 1 1-1zm2 2.076V6a2 2 0 1 0-4 0v1.076c-.54.166-1 .597-1 1.224v2.4c0 .816.781 1.3 1.5 1.3h3c.719 0 1.5-.484 1.5-1.3V8.3c0-.627-.46-1.058-1-1.224z"/>
                    <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                    </svg> Passer la commande
                </button>
            </form>
        </div>
    </div>
</div>


 -->


 
