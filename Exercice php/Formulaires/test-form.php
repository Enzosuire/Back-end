<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    

    <section>
    <form action="recup.php" method="post">
        <input type="text" title="Minimum trois caractères" name="nom" placeholder="Nom-Prénom" required>
        <br>
        <br>
        <input type="email" name="email" placeholder="Votre email">
        <br>
        <br>
        <input type="tel" name="Téléphone" placeholder="Téléphone">
        <br>
        <br>

        <select>
            <option>Vous êtes</option>
            <option value="Choix 1">Vous êtes un Homme</option>
            <option value="Choix 2">Vous êtes une Femme </option>
          </select>

          <br>
          <br>
          <textarea name="commentaire" rows="10" cols="30">commentaires </textarea>

          <br>
          <br>
        </section>
          

        <section>
         <h3> Quelle est la meilleure maniére de vous contacter ?</h3>
          <input type="radio" name="contact" value="Téléphone" /> Téléphone
          <input type="radio" name="contact" value="Courriel" /> Courriel

          <h3>Jours de la semaine où : </h3>
          <input  type="checkbox" name="Jours" >Lundi
          <input  type="checkbox" name="Jours" >Mardi
          <input  type="checkbox" name="Jours" >Mercredi
          <input  type="checkbox" name="Jours" >Jeudi
          <input  type="checkbox" name="Jours" >Vendredi


          <h3>Heure approprié pour un rendez vous : </h3>

          <input  type="checkbox" name="Jours" >Matin
          <input  type="checkbox" name="Jours" >Aprés-midi
        </section>

        <br>
        <button type="submit">Envoyer</button>


    </form>







</body>
</html>