<?php
session_start();
require_once 'classes/Database.php';
// require_once 'classes/client.php';
$Database = new Database();

// Formulaire de connexion soumis :
if (isset($_POST['password']) && !empty($_POST['password'])) {


    if ($userAvecCeMail) {
        if (password_verify($_POST['password'], $userAvecCeMail->getPassword())) {
            $_SESSION['connecté'] = TRUE;
            $_SESSION['user'] = serialize($userAvecCeMail);
            header('location: ../tableau-de-bord.php');
            die;
        }
    }
}

// Si on arrive là c'est que quelque chose s'est mal passé.
// Afin d'éviter de donner des indications sur la nature de l'échec à l'utilisateur,
// on lui renvoie une erreur générale.
header('location: ../connexion.php?erreur');
die;
