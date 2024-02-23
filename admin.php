<?php
session_start();
// Vérification du mot de passe
$expected_password = 'Festival2024!'; // mot de passe souhaité

if (isset($_POST['password']) && $_POST['password'] === $expected_password) {
    header('location:tableau-de-bord.php');
    die;
}

$echec = null;


if (isset($_GET['erreur'])) {
    $echec = true;
}


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Admin</title>

    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <div class="divConnex">
        <a href="./index.php">
            <p class="plien">Retour</p>
        </a>
    </div>
    <fieldset id="connexion" class="connexion">
        <legend>Connexion</legend>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" required>
        <div id="message"></div>
        <div id="message"></div>
        <?php if ($echec) { ?>
            <div class="message echec">
                Mot de passe invalide.
            </div>
        <?php } ?>

        <input type="submit" value="Se connecter" class="bouton3">
    </fieldset>


</html>
</body>

</html>