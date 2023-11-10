
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="./src/css/style.css">
</head>
<body>
    <main>

    
     
    <h1>Liste <?= $detailspays['label'] ?></h1>
    <h2>Ajouter une information pour ce pays</h2>
    

   
    <form action="index.php?action=addCountryDetail&countryId=<?=$country_id?>" method="post">
        <label for="label">Clé :</label>
        <input type="text" name="label">
        <label for="value">Valeur :</label>
        <input type="text" name="value">
        <input type="submit" name="submitBtn" value="Ajouter">
    </form>

        
        <a href="./index.php">Retour</a>
        
        <div class="countriesList">

       
        <?php
      foreach ($details as $detail) { ?>

        
        <a href='#' class='btn' style="text-align: center"><?= $detail['label'] ?><br><?= $detail['value'] ?></a>

        

        
    <?php
    }
    
    ?>



  
         
    </div>
    </main>
</body>
</html>


