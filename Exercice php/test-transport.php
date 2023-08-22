<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <input name="arret"  type="text" value="" placeholder="Nom arret  " required >
    <button type="submit">Soumettre</button>
 



    </form>
    


<?php 
 if (isset($_POST["arret"])) {
    $arret_saisi = $_POST["arret"];
    echo "<p>Vous avez saisi l'arrêt : $arret_saisi</p>";
 }

if (isset($_POST ["arret"])==TRUE) {
    if (($handle1= fopen ("bus-tram-circulation-passages.csv", "r")) !== FALSE) {
     while (($data = fgetcsv ($handle1,1000,";"))!== FALSE) {
         if ($_POST["arret"]==$data[14]) { 
            /*print_r($data); */
            print "<br>";
            echo "Nom de la ligne :";
            print $data[9] . '<br>' ;
            print "<br>";
            echo "Destination :";
            print $data [10] .'<br>'  ; 
            break;
            
           
        }
        
    }

        fclose ($handle1);
    }
}



if (isset($_POST ["arret"])==TRUE) {
    if (($handle2= fopen ("horaires-theoriques-et-arrets-du-reseau-irigo-gtfs.csv", "r")) !== FALSE) {
     while (($data = fgetcsv ($handle2,1000,";"))!== FALSE) {
         if ($_POST["arret"]==$data[2]) { 
            print "<br>";
            echo "Code :";
            print $data[1] . '<br>';
            print "<br>";
            echo "Fauteuil roulant :";
            print $data [10] .'<br>' ;
            break;
        
            
           
        }
        
    }

        fclose ($handle2);
    }
}


$heure_actuelle = date('H:i:s') ; 
echo "Heure actuelle : $heure_actuelle";

if (($handle3 = fopen("bus-tram-circulation-passages.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle3, 1000, ";")) !== FALSE) {
        if ($_POST["arret"] == $data[14]) {
            $horaires = explode(" ", $data[3]); 

            $heure_actuelle = strtotime(date('H:i:s'));

            foreach ($horaires as $horaire) {
                $horaireBus = strtotime($horaire);

                if ($data[3]> $heure_actuelle) {
                    echo "<b>Prochain bus</b>: " . date('H:i', $horaireBus) . "<br>";
                    
                    
                }
            }
        }
    }
    fclose($handle3);
}


?>
</body>
</html>