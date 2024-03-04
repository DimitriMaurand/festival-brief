<?php
session_start();
require_once 'PHP/src/classes/Client.php';
require_once 'PHP/src/classes/Database.php';
require_once 'PHP/src/traitement.php';
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
    <h1>Confirmation</h1>
    <div>
        <?php
        $DB = new Database();
        $utilisateurs = $DB->getAllClients();
        include 'include/section-utilisateurs.php';
        ?>
    </div>


    <?php if ($succes) { ?>
        <div class="message succes">
            Votre inscription est validée !
        </div>
    <?php } ?>

</form>
<script src="./scripts/script.js"></script>

</html>