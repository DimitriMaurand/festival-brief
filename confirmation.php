<?php
session_start();
require 'php/src/classes/Client.php';
require 'php/src/classes/Database.php';
require 'php/src/traitement.php';
// if (isset($_SESSION['connecté']) && !empty($_SESSION['user'])) {
//     // abort
//     header('location:tableau-de-bord.php');
//     die;
// }

$succes = null;
$echec = null;
if (isset($_GET['succes']) && $_GET['succes'] === "inscription") {
    $succes = true;
}
if (isset($_GET['erreur'])) {
    $echec = true;
}

// include "includes/header.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de réservation Music Vercos Festival</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<form action="src/authentication.php" method="post" onsubmit=" return ValidationConnexion()">
    <h1>Connexion</h1>
    <div>
        <?php
        $DB = new Database();
        $utilisateurs = $DB->getAllClients();
        include 'includes/section-utilisateurs.php';
        ?>
    </div>


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
<script src="./scripts/script.js"></script>

</html>