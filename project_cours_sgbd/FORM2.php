<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire d'Insertion</title>
</head>
<body>
    <h2>Ajouter un nouveau proprietaire et vehicule</h2>
    
    <form action="traitement_insertion_proprietaire.php" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required><br>

        <label for="prenom">Prenom :</label>
        <input type="text" name="prenom" required><br>

        <label for="marque">Marque du vehicule :</label>
        <select name="marque" id="marque" onchange="chargerModeles()">
            <option value="marque1">Marque 1</option>
            <option value="marque2">Marque 2</option>
            <!-- Ajoutez d'autres options de marque selon vos besoins -->
        </select><br>

        <label for="modele">Modele du vehicule :</label>
        <select name="modele" id="modele" required>
            <!-- Cette liste sera chargee dynamiquement en JavaScript -->
        </select><br>

        <input type="submit" value="Ajouter">
    </form>

   
    <script>
        function chargerModeles() {
            var marqueSelect = document.getElementById("marque");
            var modeleSelect = document.getElementById("modele");

            modeleSelect.innerHTML = "<option value='modele1'>Modèle 1</option><option value='modele2'>Modèle 2</option>";
        }
    </script>


</body>
</html>
