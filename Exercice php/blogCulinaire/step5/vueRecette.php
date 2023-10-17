<?php 
$titre = "Bienvenue sur le BlogCulinaire";
ob_start();
?>

<section class="p-5 container">
    <h1 class="">Détail de la recette :</h1>
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card" style="width: 40rem;">
                <img src="./../images/<?= $seule['rec_image']; ?>" class="card-img-top img-fluid" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title"><?= $seule['rec_nom']; ?> </h5>
                    <p class="card-text"><?= $seule['rec_resume']; ?></p>
                    <p><?= $seule['rec_temps']; ?></p>
                    <p><?= $seule['rec-difficulte']; ?></p>
                    <p><?= $seule['rec_budget']; ?></p>
                    <p><?= $seule['rec_ingredients']; ?></p>
                    <p><?= $seule['rec_preparation']; ?></p>
                    <p><?= $seule['rec_categorie']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>



<?php foreach ($comment as $comments) { ?>

   

             
            <?php } ?>
 <p><?= $comment['com_auteur']; ?> </p>
<p><?= $comment['com_contenu']; ?> </p>
    

<?php 
$contenu = ob_get_clean();
require('gabarit.php');
?>