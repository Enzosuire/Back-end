
<?php include './inc/img/header.inc.php'; ?>

    <div class="container mt-5 w-75 p-5 form-connexion">
        
                <div class="row justify-content-center p-5 ">
                    <div class="text-center w-100 border border-dark p-5">
                        <form method="post" action="./admin/admin.php?action=CO"  enctype="multipart/form-data">
                            <h1>Connexion</h1>
                            <div class="mb-3 col-6 mx-auto ">
                            <label for="exampleInputEmail1" class="form-label">Pseudo</label>
                            <input type="pseudo" name="pseudo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3 col-6 mx-auto">
                            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                            <input type="password" name="mdp" class="form-control" id="exampleInputPassword1">
                            </div>
                            <input type="submit" class="btn btn-outline-dark mt-3" value="Se connecter"> 
    
                        </form>

                        

                    </div>
    
                </div>
       
    </div>



<?php include './inc/img/footer.inc.php'; ?>

