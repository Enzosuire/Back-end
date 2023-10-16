
<?php include './inc/img/header.inc.php'; ?>

<?php
//On démarre une nouvelle session
session_start();

// on vérifie que la variable de session pseudo existe
if (isset($_SESSION['pseudo'])) {
    $pseudo = $_SESSION['pseudo'];

require './functions.php';
}

?>


    <div class="container mt-5 w-75 p-5 form-profil">
        
                <div class="row d-flex justify-content-center">
                    <div class="text-center w-100 border border-dark p-5">
                        <form class="">
                            <h1>Bonjour  <?= $_SESSION['pseudo']; ?></h1>
                            <p> Bienvenue sur votre profil</p>
                            <div class="container-fluid mt-5 border border-dark w-75 p-4">
                            <h4 class="text-center" >Informations personelles : </h4>
                                <div class="row">
                                    <div class="container-fluid ">
                                    <?php
                                    if ($pseudo) {
                                        $membre = getProfile($pseudo);
                                    ?>
                                   
                                    <p>Email :  <?= $membre[5]; ?></p>
                                    <p>Adresse : <?= $membre[9]; ?> </p>
                                    <p>Ville : <?= $membre[7]; ?></p>
                                    <p>Code Postal : <?= $membre[8]; ?></p>
                                    <a href="admin/admin.php?logout=1" class="btn btn-outline-dark mt-3">Déconnexion</a>
                                 
                                    
                                     <?php
                                    } else {
                                        echo 'non';
                                    }

                                    ?>
                                    </div>
                                </div>
                            </div>
                             
            
                  
                        </form>

                        

                    </div>
    
                </div>
       
    </div>




<?php include './inc/img/footer.inc.php'; ?>
