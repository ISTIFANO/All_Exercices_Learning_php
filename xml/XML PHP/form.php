<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion de données dans iut.xml</title>
</head>
<body>

<h2>Form</h2>

<form action="" method="post">
    <label for="id">ID :</label>
    <input type="text" id="id" name="id"><br><br>
    
    <label for="nom">Nom de l'étudiant :</label>
    <input type="text" id="nom" name="nom"><br><br>
    
    <label for="uv">Nom de l'UV :</label>
    <input type="text" id="uv" name="uv"><br><br>
    
    <label for="duree">Duree:</label>
    <input type="text" id="duree" name="duree"><br><br>
    
    <label for="note">Note:</label>
    <input type="text" id="note" name="note"><br><br>
    
    <input type="submit" value="Insérer les données">
</form>

<hr>

<h2>Visualisation du fichier iut.xml</h2>

<iframe src="iut.xml" style="width:100%; height:400px;"></iframe>

</body>
</html>
