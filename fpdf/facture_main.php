<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulaire de Commande</title>
</head>
<body>



<form action="facture_traitement.php" method="POST">
  <label for="nom">Nom complète :</label><br>
  <input type="text" id="nom" name="nom" required><br><br>

  <label for="adresse">Adresse  :</label><br>
  <input id="adresse" name="adresse" required></textarea><br><br>

  <label for="email">Email :</label><br>
  <input type="email" id="email" name="email" required><br><br>
  <label>Produits :</label><br><input type="checkbox" id="produit1" name="produit[]" value="Produit 1">
  <label for="produit1">Produit 1</label><br>
  <input type="checkbox" id="produit2" name="produit[]" value="Produit 2">
  <label for="produit2">Produit 2</label><br>
  <input type="checkbox" id="produit3" name="produit[]" value="Produit 3">
  <label for="produit3">Produit 3</label><br><br>
  <label for="q">Qua</label> <input type="number" name="qualite[]" id=""><br><br>
  <label for="q">Qua</label> <input type="number" name="qualite[]" id=""><br><br>
  <label for="q">Qua</label> <input type="number" name="qualite[]" id=""><br><br>


  <input type="submit" name="submit" value="Generer la facture">
</form>

</body>
</html>
