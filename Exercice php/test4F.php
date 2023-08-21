<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <input name="departement"  type="text" value="" placeholder="Code de departement" required >
    <button type="submit">Soumettre</button>



    </form>
    


<?php 
if (isset($_POST ["departement"])==TRUE) {

    if (($handle= fopen ("departement.csv", "r")) !== FALSE) {
     while (($data = fgetcsv ($handle,1000,";"))!==FALSE) {
         if ($_POST["departement"]==$data[1]) { 
            print $data [2] .PHP_EOL;
        }
    }

        fclose ($handle);
    }
}

?>
</body>
</html>