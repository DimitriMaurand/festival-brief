<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Admin</title>
</head>

<body>
    <form action="src/authentication.php" method="post" onsubmit=" return ValidationConnexion()">
        <h1>Connexion</h1>
        <?php if ($succes) { ?>
            <div class="message succes">
                Votre inscription est validée !
            </div>
        <?php } ?>
        <label for="mail">Mail :</label>
        <input type="email" name="mail" id="mail" required>
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" required>
        <div id="message"></div>
        <?php if ($echec) { ?>
            <div class="message echec">
                Mot de passe ou email invalide.
            </div>
        <?php } ?>
        <input type="submit" value="Se connecter">
    </form>

</html>
</body>

</html>