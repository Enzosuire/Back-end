<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <h1>Liste des pays</h1>
        <div class="countriesList">
        
        <?php
      foreach ($req as $country) { ?>

        <a href='<?='details.php?id='.$country['id']?>' class='btn' style="text-align: center"><?= $country['label'] ?><br><span style="color: white;">Affichez les détails</span></a>

       
        

        
        
    <?php
    }
    
    ?>
            
        </div>
    </main>
</body>
</html>


