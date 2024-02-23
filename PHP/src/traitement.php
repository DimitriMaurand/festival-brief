<?php
require 'config.php';
require 'classes/Client.php';
require 'classes/Database.php';
require 'classes/Reservation.php';
require 'classes/Donnee.php';
// Les éléments à cocher

//récupération
$recupNombrePlaces = $_POST['nombrePlaces'];
$recupTarifReduit = $_POST['tarifReduit'];

$recupPass1jour = $_POST['pass1jour'];

$recupChoixJour1 = $_POST['choixJour1'];
$recupChoixJour2 = $_POST['choixJour2'];
$recupChoixJour3 = $_POST['choixJour3'];

$recupChoixJour12 = $_POST['choixJour12'];
$recupChoixJour23 = $_POST['choixJour23'];

$recupPass2jours = $_POST['pass2jours'];
$recupPass3jours = $_POST['pass3jours'];

$recupPass1jour = $_POST['pass1jour'];
$recupPass2jour = $_POST['pass2jour'];
$recupPass3jour = $_POST['pass3jour'];

$recupTenteNuit1 = $_POST['tenteNuit1'];
$recupTenteNuit2 = $_POST['tenteNuit2'];
$recupTenteNuit3 = $_POST['tenteNuit3'];
$recupTente3Nuits = $_POST['tente3Nuits'];

$recupVanNuit1 = $_POST['vanNuit1'];
$recupVanNuit2 = $_POST['vanNuit2'];
$recupVanNuit3 = $_POST['vanNuit3'];
$recupVan3Nuits = $_POST['van3Nuits'];

$recupEnfantsOui = $_POST['enfantsOui'];
$recupEnfantsNon = $_POST['enfantsNon'];

$recupNombreCasquesEnfants = $_POST['nombreCasquesEnfants'];
$recupNombreLugesEte = $_POST['NombreLugesEte'];

$recupNom = $_POST['nom'];
$recupPrenom = $_POST['prenom'];
$recupEmail = $_POST['email'];
$recupTelephone = $_POST['telephone'];
$recupAdressePostale = $_POST['adressePostale'];

$recupPassword = $_POST['password'];


///
if (
    isset($_POST['nombrePlaces']) && isset($_POST['tarifReduit']) && isset($_POST['passSelection']) && isset($_POST['tenteNuit1']) && isset($_POST['tenteNuit2'])
    && isset($_POST['tenteNuit3']) && isset($_POST['vanNuit1']) && isset($_POST['vanNuit2']) && isset($_POST['van3Nuits']) && isset($_POST['enfantsOui'])
    && isset($_POST['enfantsNon']) && isset($_POST['nombreCasquesEnfants']) && isset($_POST['NombreLugesEte']) && isset($_POST['nom'])
    && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['telephone'])
    && isset($_POST['password'])
    && isset($_POST['adressePostale']) && !empty($_POST['nombrePlaces']) && !empty($_POST['tarifReduit']) && !empty($_POST['passSelection']) && !empty($_POST['tenteNuit1']) && !empty($_POST['tenteNuit2'])
    && !empty($_POST['tenteNuit3']) && !empty($_POST['vanNuit1']) && !empty($_POST['vanNuit2']) && !empty($_POST['van3Nuits']) && !empty($_POST['enfantsOui'])
    && !empty($_POST['enfantsNon']) && !empty($_POST['nombreCasquesEnfants']) && !empty($_POST['NombreLugesEte']) && !empty($_POST['nom'])
    && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['telephone'])
    && !empty($_POST['adressePostale']) && !empty($_POST['password'])
) {
    $nom = htmlentities($_POST['nom']);
    $prenom = htmlentities($_POST['prenom']);
    $AdressePostale = htmlentities($_POST['adressePostale']);
    $Telephone = htmlentities($_POST['telephone']);



    if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        $mail = htmlentities($_POST['mail']);
    } else {
        header('location:/../index.php?erreur=' . ERREUR_EMAIL);
        die;
    }

    if (strlen($_POST['password']) >= 8) {
        if ($_POST['password'] === $_POST['password2']) {
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        } else {
            header('location:/../index.php?erreur=' . ERREUR_PASSWORD_IDENTIQUE);
            die;
        }
    } else {
        header('location:/../index.php?erreur=' . ERREUR_PASSWORD_LENGTH);
        die;
    }



    $client = new Client($recupNom, $recupPrenom, $recupTelephone, $recupEmail, $recupAdressePostale);
    $Database = new Database();
    if ($Database->saveClient($client)) {
        header('location:/../confirmation.php');
    } else {
        header('location:/../index.php?erreur=' . ERREUR_ENREGISTREMENT);
    }
    var_dump($client);
} else {
    header('location:/../index.php?erreur=' . ERREUR_CHAMP_VIDE);
    die;
}

$client = new Client(
    $recupNombrePlaces,
    $recupTarifReduit,
    $recupPass1jour,
    $recupChoixJour1,
    $recupChoixJour2,
    $recupChoixJour3,
    $recupChoixJour12,
    $recupChoixJour23,
    $recupPass2jours,
    $recupPass3jours,

    $recupPass2jour,
    $recupPass3jour,
    $recupVanNuit1,
    $recupVanNuit2,
    $recupVanNuit3,
    $recupVan3Nuits,
    $recupTenteNuit1,
    $recupTenteNuit2,
    $recupTenteNuit3,
    $recupTente3Nuits,
    $recupEnfantsOui,
    $recupEnfantsNon,
    $recupNombreCasquesEnfants,
    $recupNombreLugesEte
);
$Reservation = new Reservation($reservation[0], $reservation[1], $reservation[2], $reservation[3], $reservation[4], $reservation[5], $reservation[6], $reservation[7], $reservation[8], $reservation[9], $reservation[10], $reservation[11], $reservation[12], $reservation[13], $reservation[14], $reservation[15], $reservation[16], $reservation[17], $reservation[18], $reservation[19], $reservation[20], $reservation[21], $reservation[22], $reservation[23], $reservation[24], $reservation[25], $reservation[26], $reservation[27], $reservation[28], $reservation[29]);
if ($Database->savereservations($reservations)) {

    header('location:/../confirmation.php');
} else {
    header('location:/../index.php?erreur=' . ERREUR_ENREGISTREMENT);
}
