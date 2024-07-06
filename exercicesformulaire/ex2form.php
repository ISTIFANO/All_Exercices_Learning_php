<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styleform.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form2ex</title>
</head>
<body>
<form action="" method="POST">
    <label for="Nom">Nom</label> <br>
    <input type="text" name="nom" id="nomId"><br>
    
    <label for="pNom">Prenom</label><br>
    <input type="text" name="prenom" id="prenomId"><br>
    
    <label for="ville">Ville</label><br>
    <input type="text" name="ville" id="villeId"><br>
    
    <label for="adress">Adress</label><br>
    <input type="text" name="adresse" id="adresseId"><br>
    
    <label for="cp">Code Postal</label><br>
    <input type="number" name="codePostal" id="codePostalId"><br>
    
    <input type="submit" id="myAnchor">
    <br>
</form>

<script> 
    const n = document.getElementById("nomId").value;
    const pnom = document.getElementById("prenomId").value;
    const ville = document.getElementById("villeId").value;
    const adress = document.getElementById("adresseId").value;
    const codepostale = document.getElementById("codePostalId").value;

    if (n === "" || pnom === "" || ville === "" || adress === "" || codepostale === "") {
        alert("sv p remplir tous les champs.");
    }
</script>

</body>
</html>