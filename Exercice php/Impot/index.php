<?php

require_once('./resultatimpot.php');


echo'

<!DOCTYPE html>
<html>
<head>
    <title>Formulaire</title>
</head>
<body>
    <h1>Formulaire de saisie</h1>
    <form action="index.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required><br><br>

        <label for="revenu">Revenu :</label>
        <input type="text" name="revenu" id="revenu" required><br><br>

        <input type="submit" value="OK">
    </form>
</body>
</html>

';




