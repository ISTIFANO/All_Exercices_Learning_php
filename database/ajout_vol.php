<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter_vol</title>
    <style>
        form{
            width: 400px;
            height: 400px;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            text-align: center;
        }
        #button{
            color: white;
            background-color: rgb(22, 22, 255);
            width: 40%;
            border: none;
            height: 30px;
            border-radius: 3px;
            margin-left: auto;
            margin-right: auto;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form method="POST" action="traitement_ajout_vol.php">
        <label>Numéro de vol</label>
        <input type="text" name="NV" required>
        <label>Numéro de pilote</label>
        <input type="text" name="NP" required>
        <label>Numéro d'avion</label>
        <input type="text" name="NA" required>
        <label>Ville de départ</label>
        <input type="text" name="VD" required>
        <label>Ville d'arrivée</label>
        <input type="text" name="VA" required>
        <label>Heure de départ</label>
        <input type="datetime-local" name="HD" required>
        <label>Heure d'arrivée</label>
        <input type="datetime-local" name="HA" required>
        <input type="submit" value="Ajouter" id="button">
        
    </form>
    <form method="POST" action="liste_vols.php">
        <input type="submit" value="Afficher liste" name="afficher" id="button">
    </form>
</body>
</html>
<?php
    if(isset($_POST["erreur"])){
        if($_POST["erreur"]!="ok"){
            
        }
    }


?>