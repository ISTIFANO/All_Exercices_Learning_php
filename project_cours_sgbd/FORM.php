<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire d'Insertion</title>
</head>
<body>
    <h2>Ajouter un nouveau modele</h2>
    <form action="insersion.php" method="POST">
        <label for="num_mo">Numero de Modele :</label>
        <input type="text" name="num_mo" required><br>

        <label for="nom">Nom :</label>
        <input type="text" name="nom" required><br>

        <label for="numero">Numero de Marque :</label>
        <input type="text" name="numero" required><br>

        <input type="submit" value="Ajouter">
    </form>
</body>
</html>
