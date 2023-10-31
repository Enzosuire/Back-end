
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countries POO Exercice</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <h1>Liste des pays</h1>
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


