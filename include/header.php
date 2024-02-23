<?php
$url = $_SERVER['REQUEST_URI'];
switch ($url) {

    case str_contains($url, 'tableau-admin'):
        $url = 'tableau-admin';
        break 1;

    default:
        $url = 'form';
        break 1;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activité 4 - Formulaire inscription</title>

    <link rel="stylesheet" href="../styles/style.css">


</head>

<body>

    <div id="header">
        <h1>Festival Vercors</h1>
        <div>
            <?php if (isset($_SESSION['connecté'])) { ?>
                <a href="deconnexion.php">Déconnexion</a>
            <?php } else { ?>
                <a href="index.php">Inscription</a>
                <a href="connexion.php">Connexion</a>
            <?php } ?>
        </div>
    </div>