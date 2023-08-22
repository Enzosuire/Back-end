<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <input name="arrondissement"  type="text" value="" placeholder="Numéro d'arrondissement   " required >
    <button type="submit">Soumettre</button>



    </form>
    


<?php 

if (isset($_POST ["arrondissement"])==TRUE) {
    if (($handle= fopen ("tournagesdefilmsparis2011.csv", "r")) !== FALSE) {
     while (($data = fgetcsv ($handle,3000,";"))!== FALSE) {
         if ($_POST["arrondissement"]==$data[5]) { 
            print "<br>";
            print $data [0] .PHP_EOL;
            
           
        }
        
    }

        fclose ($handle);
    }
}


?>
</body>
</html>