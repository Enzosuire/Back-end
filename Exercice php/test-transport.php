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

if (isset($_POST["arret"])==true) {
    if (($handle = fopen("https://data.angers.fr/api/explore/v2.1/catalog/datasets/bus-tram-circulation-passages/exports/csv?lang=fr&timezone=Europe%2FBerlin&use_labels=true&delimiter=%3B", "r")) !== FALSE) {
        $min=100000;
        $prochain=0;
        while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
            
            if ($_POST["arret"]==$data[14]) {
                $duree=strtotime($data[3])-time();
                if ($duree>0) {
                    if ($duree<$min) {
                        $min=$duree;
                        $prochain=strtotime($data[3]);
                    }
                    
                }
                
            }
        }
        print date("d/m/Y H:i:s",$prochain);
        fclose($handle);
    }
}

?>
</body>
</html>