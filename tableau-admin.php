<?php
session_start();
// require 'src/classes/Client.php';
require 'src/classes/Database.php';

if (!isset($_SESSION['connecté']) && empty($_SESSION['user'])) {
    // abort
    header('location: connexion.php');
    die;
}
$user = unserialize($_SESSION['user']);

if (!$client->isAdmin()) {
    header('location: tableau-de-bord.php');
    die;
}

if (isset($_GET['section'])) {
    switch ($_GET['section']) {
        case 'utilisateurs':
            $section = 'utilisateurs';
            break 1;
        default:
            $section = null;
            break 1;
    }
} else {
    $section = null;
}
include 'includes/header.php';
?>
<main>
    <?php include 'includes/colonne-admin.php'; ?>
    <div class="content">
        <?php
        $DB = new Database();
        $utilisateurs = $DB->getAllClients();
        include 'includes/section-utilisateurs.php';
        ?>
    </div>
</main>