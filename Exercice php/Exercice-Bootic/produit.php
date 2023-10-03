<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./inc/css/styles.css">
</head>
<body>
<?php include './inc/img/header.inc.php'; ?>
   



<div class="container mt-5 w-75  form-produit">
    <div class="row justify-content-center">
        <div class="text-center w-100 border border-dark p-5">
            <form class="">
                <h1>Produit</h1>
                <div class="container-fluid">
                    <div class="row">
                        <div class="mb-3 col-6 mx-auto d-flex justify-content-center">
                            <div class="card" style="width: 16rem;">
                                <img src="./inc/img/t_shirt/ts_azur.webp"class="card-img-top mt-3" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">T-shirt bleu</h5>
                                    <p class="card-text">Description : <br>Fabriqués à partir de coton biologique 100% filé et peigné.<br>
                                        Épaisseur de 200g/m2 pour un confort optimal.<br>
                                        Lavage : Le lavage est à réaliser à la machine, produit retourné à 30° ou bien lavage à la main.
                                    </p>
                                    <h5>40€</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-dark">Accéder au panier</button>
            </form>
        </div>
    </div>
</div>





<?php include './inc/img/footer.inc.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
