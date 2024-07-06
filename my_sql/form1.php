<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
</head>
<body>

    <div class="form-container">
        <h2>Connexion</h2>
        <form method="post" action="">
            <label for="email">E-mail :</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Se connecter</button>
      
        </form>
    </div>

    <?php 
    if(isset($_POST['password']) && isset($_POST['email'])){
        $connexion = new mysqli("localhost", "root", "", "test");

        if($connexion->connect_error){
            die("failed to connect : " . $connexion->connect_error);
        } else {
            // Utilisation d'une requête préparée pour éviter les attaques par injection SQL
            $dataemail = $connexion->prepare("SELECT * FROM registration WHERE email = ?");
            $dataemail->bind_param('s', $_POST['email']);
            $dataemail->execute();
            $dataemail_resultat = $dataemail->get_result();

            if($dataemail_resultat->num_rows > 0){
                $data = $dataemail_resultat->fetch_assoc();
                if($data["password"] === $_POST['password']){
                    echo '<h2>Connexion réussie</h2>';
                } else {
                    echo '<h2>Mot de passe incorrect</h2>';
                }
            } else {
                echo '<h2>Email invalide</h2>';
            }
        }
    }
    ?>

</body>
</html>
