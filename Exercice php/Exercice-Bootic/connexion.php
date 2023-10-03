<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./inc/css/styles.css">
</head>
<body>
<?php include './inc/img/header.inc.php'; ?>

    <div class="container mt-5 w-75 p-5 form-connexion">
        
                <div class="row justify-content-center p-5 ">
                    <div class="text-center w-100 border border-dark p-5">
                        <form class="">
                            <h1>Connexion</h1>
                            <div class="mb-3 col-6 mx-auto ">
                            <label for="exampleInputEmail1" class="form-label">Pseudo</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3 col-6 mx-auto">
                            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn btn-outline-dark">Se connecter</button>
                        </form>

                        

                    </div>
    
                </div>
       
    </div>



<?php include './inc/img/footer.inc.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
