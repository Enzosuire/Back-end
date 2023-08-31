<?php

// première paramètre chaîne de connexion
$dbh = new PDO('mysql:host=localhost;dbname=pays 1', 'root' ,'' );

// use the connection here
$sth = $dbh->query("SELECT libelle_continent AS 'Nom' FROM t_continents ;");
$regions = $dbh->query ("SELECT libelle_region AS 'Nom' FROM t_regions;");
$pays = $dbh->query ("SELECT libelle_pays AS 'Nom' FROM t_pays;");

// fetch all rows into array, by default PDO::FETCH_BOTH is used
$rows = $sth->fetchAll();
$regions = $regions->fetchAll();
$pays = $pays->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les données du Monde</title>
</head>
<body>

<form>
		<select name="continent">
		<?php
            foreach ($rows as $row) {
                ?>
                <option><?php print $row["Nom"]; ?></option>
                
                <?php
            }?>
</select>

<select name="region">
		<?php

		foreach ($regions as $regions) {
			?>
			
				<option><td><?php print $regions["Nom"]; ?></option>
			
			<?php
		}
		?>
</select>
<button type= "submit">Appliquer</button>
</form>
    <table>
        <thead>
        <th>Nom des pays </th>

        </thead>
        <tbody>
		
			<?php
            foreach ($pays as $pays) {
                ?>
                <tr>
                    <td><?php print $pays["Nom"]; ?></td>
                </tr>
                <?php
            }

            ?>
			 
            

		
		</tbody>
    
    </table>
            
</body>
</html>


