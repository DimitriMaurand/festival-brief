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



///
if (
    isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['telephone'])  && isset($_POST['adressePostale']) &&
    !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['telephone']) && !empty($_POST['adressePostale'])
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

    if (isset($_POST['pass2jour']) || isset($_POST['pass3jour']) || isset($_POST['pass1jour']) && isset($_POST['choixJour1']) || isset($_POST['choixJour2']) || isset($_POST['choixJour3']) && !empty($_POST['pass2jour']) || !empty($_POST['pass3jour']) || !empty($_POST['pass1jour']) && !empty($_POST['choixJour1']) || !empty($_POST['choixJour2']) || !empty($_POST['choixJour3'])) {
        header('location:/../confirmation.php');
    } else {
        header('location:/../index.php?erreur=' . ERREUR_ENREGISTREMENT);
    }



    if (isset($_POST['nombrePlaces']) && isset($_POST['tarifReduit']) && !empty($_POST['nombrePlaces']) && !empty($_POST['tarifReduit'])) {
        header('location:/../confirmation.php');
    } else {
        header('location:/../index.php?erreur=' . ERREUR_ENREGISTREMENT);
    }

    // if (
    //     isset($_POST['tenteNuit1']) && isset($_POST['tenteNuit2'])
    //     && isset($_POST['tenteNuit3']) && !empty($_POST['tenteNuit1']) && !empty($_POST['tenteNuit2'])
    //     && !empty($_POST['tenteNuit3'])) {
    //     # code...
    // }

    // if (isset($_POST['vanNuit1']) && isset($_POST['vanNuit2']) && isset($_POST['van3Nuits']) && !empty($_POST['vanNuit1']) && !empty($_POST['vanNuit2']) && !empty($_POST['van3Nuits'])) {
    //     # code...
    // }

    // if (isset($_POST['enfantsOui']) && isset($_POST['enfantsNon']) && !empty($_POST['enfantsOui']) && !empty($_POST['enfantsNon'])) {
    //     # code...
    // }



    // if (isset($_POST['nombreCasquesEnfants']) && isset($_POST['NombreLugesEte']) && !empty($_POST['nombreCasquesEnfants']) && !empty($_POST['NombreLugesEte'])) {
    //     # code...
    // }


    if (isset($_POST['password']) && !empty($_POST['password'])) {
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
    }



    $client = new Client($recupNom, $recupPrenom, $recupTelephone, $recupEmail, $recupAdressePostale);
    $Database = new Database();
    if ($Database->saveClient($client)) {
        header('location:/../confirmation.php');
    } else {
        header('location:/../index.php?erreur=' . ERREUR_ENREGISTREMENT);
    }
    var_dump($client);
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
    $Reservation = new Reservation($reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation);
    if ($Database->savereservations($reservations)) {

        header('location:/../confirmation.php');
    } else {
        header('location:/../index.php?erreur=' . ERREUR_ENREGISTREMENT);
    }
} else {
    header('location:/../index.php?erreur=' . ERREUR_CHAMP_VIDE);
    die;
}
