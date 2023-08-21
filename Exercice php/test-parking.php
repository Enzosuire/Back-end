<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <input name="parking"  type="text" value="" placeholder="Non du parking " required >
    <button type="submit">Soumettre</button>



    </form>
    


<?php 

if (isset($_POST ["parking"])==TRUE) {
    if (($handle= fopen ("occupation-parkings-temps-reel.csv", "r")) !== FALSE) {
     while (($data = fgetcsv ($handle,30,";"))!== FALSE) {
         if ($_POST["parking"]==$data[0]) { 
            print $data [4] .PHP_EOL;
           
        }
    }

        fclose ($handle);
    }
}



?>
</body>
</html>