<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./inc/css/styles.css">
</head>
<body>
<?php include './inc/img/header.inc.php'; ?>

    <div class="container mt-5 p-5 form-inscription">
        
                <div class="row justify-content-center">
                    <div class=" col-lg-6 text-center w-100 border border-dark p-5">
                        <form method="post" action="./admin/admin.php?action=C"  enctype="multipart/form-data">
                            <h1>Inscription</h1>
                            <div class="row">
                                <div class="form-group col-12 col-md-6">
                                <label for="inputEmail4">Pseudo</label>
                                <input type="Pseudo" class="form-control" name="pseudo" id="inputPseudo" placeholder="Pseudo">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                <label for="inputPassword4">Mot de passe</label>
                                <input type="password" class="form-control" name="mdp" id="inputPassword4" placeholder="Password">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12 col-md-6">
                                <label for="inputEmail4">Nom</label>
                                <input type="Nom" class="form-control" name="nom" id="Nom-inscription" placeholder="Nom">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                <label for="inputPassword4">Prénom</label>
                                <input type="prenom" class="form-control" name="prenom" id="prenom-inscription" placeholder="Prénom">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12 col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="form-group col-6 col-md-6 ">
                                <p> Sexe : </p>
                                <input class="form-check-input" type="radio" name="civilite"  value="h"id="gridRadios1">
                                <label class="form-check-label" for="gridRadios">
                                   Homme
                                </label>
                                <input class="form-check-input" type="radio" name="civilite" value="f" id="gridRadios2" >
                                <label class="form-check-label" for="gridRadios2">
                                    Femme
                                </label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="form-group col-12 col-md-6 ">
                                <label for="inputAddress">Adresse</label>
                                <input type="text" class="form-control" name="adresse" id="inputAddress" placeholder=" 5 Rue Main St vincent">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                <label for="inputCity">Ville</label>
                                <input type="text" class="form-control" name="ville" id="inputCity"  placeholder="Angers" >
                                </div>
                            </div>
                            
                            <div class="form-row d-flex justify-content-center">
                                <div class="form-groupcol-12 col-md-6 ">
                                    <label for="inputcodepostal">Code postal</label>
                                    <input type="text" class="form-control" name="cp" id="inputcodepsotal" placeholder="49000">
                                </div>
                            </div>

                             <input type="submit" class="btn btn-outline-dark mt-3" value="S'inscrire"> 
    
                        </form>

                        

                    </div>
    
                </div>
       
    </div>



<?php include './inc/img/footer.inc.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
