<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./inc/css/styles.css">
</head>
<body>
<?php include './inc/img/header.inc.php'; ?>
   



<div class="container mt-5 w-75  form-panier">
    <div class="row justify-content-center">
        <div class="text-center w-100 border border-dark p-5">
            <form class="">
                <h1>Panier</h1>
                <div class="container-fluid">
                    <div class="row">
                        <div class="mb-3 col-6 mx-auto d-flex justify-content-center  mt-5">
                            <div class="card" style="width: 16rem;">
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





<?php include './inc/img/footer.inc.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
