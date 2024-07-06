<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter </title>
</head>
<body>

    <form action="Traitement.php" method="post">
        
            <label for="titre">Titre</label>
            <input type="text"  name="titre"><br>
            <label for="auteur">Auteur </label>
            <input type="text" name="auteur" ><br>
            <label for="prix">Prix </label>
            <input type="number" name="prix"><br>
            <label for="dp">Date de publication</label>
            <input type="date"  name="date_publication" > <br>
            <input type="submit" value="Ajouter"> <br>
      
    </form>
</body>
</html>
