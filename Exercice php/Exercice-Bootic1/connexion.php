
<?php include './inc/img/header.inc.php'; ?>
<?php
session_start();

// on vérifie que la variable de session pseudo existe
if (isset($_SESSION['pseudo'])) {
    $pseudo = $_SESSION['pseudo'];
}

require './functions.php';
?>


    <div class="container mt-5  form-connexion p-5">
                <div class="row justify-content-center pt-5 pb-5">
                    <div class="col-lg-6, col-md-8, col-sm-10, col-12  text-center border border-dark p-5">
                        <form method="post" action="./admin/admin.php?action=CO"  enctype="multipart/form-data" >
                            <h1 class="mb-4 mx-auto">Connexion</h1>
                            <div class="mb-3 col-lg-6 col-12 mx-auto ">
                            <label for="pseudo" class="form-label">Pseudo</label>
                            <input type="text" name="pseudo" class="form-control" id="pseudo" required >
                            <div id="emailHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3 col-lg-6 col-12  mx-auto ">
                            <label for="mdp" class="form-label">Mot de passe</label>
                            <input type="password" name="mdp" class="form-control" id="mdp" required >
                            </div>
                            <input type="submit" class="btn btn-outline-dark mt-3" value="Se connecter"> 
    
                        </form>

                        

                    </div>
    
                </div>
       
    </div>



<?php include './inc/img/footer.inc.php'; ?>

