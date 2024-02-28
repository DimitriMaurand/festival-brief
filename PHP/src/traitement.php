<?php
require 'config.php';
require 'classes/Client.php';
require 'classes/Database.php';
require 'classes/Reservation.php';
require 'classes/Donnee.php';
// Les éléments à cocher

//récupération
// $NombrePlaces = $_POST['nombrePlaces'];
// $TarifReduit = $_POST['tarifReduit'];

// $Pass1jour = $_POST['pass1jour'];

// $ChoixJour1 = $_POST['choixJour1'];
// $ChoixJour2 = $_POST['choixJour2'];
// $ChoixJour3 = $_POST['choixJour3'];

// $ChoixJour12 = $_POST['choixJour12'];
// $ChoixJour23 = $_POST['choixJour23'];

// $Pass2jours = $_POST['pass2jours'];
// $Pass3jours = $_POST['pass3jours'];

// $Pass1jour = $_POST['pass1jour'];
// $Pass2jour = $_POST['pass2jour'];
// $Pass3jour = $_POST['pass3jour'];

// $TenteNuit1 = $_POST['tenteNuit1'];
// $TenteNuit2 = $_POST['tenteNuit2'];
// $TenteNuit3 = $_POST['tenteNuit3'];
// $Tente3Nuits = $_POST['tente3Nuits'];

// $VanNuit1 = $_POST['vanNuit1'];
// $VanNuit2 = $_POST['vanNuit2'];
// $VanNuit3 = $_POST['vanNuit3'];
// $Van3Nuits = $_POST['van3Nuits'];

// $EnfantsOui = $_POST['enfantsOui'];
// $EnfantsNon = $_POST['enfantsNon'];

// $NombreCasquesEnfants = $_POST['nombreCasquesEnfants'];
// $NombreLugesEte = $_POST['NombreLugesEte'];

//&& isset($_POST['tarifReduit']) && isset($_POST['passSelection']) && isset($_POST['tenteNuit1']) && isset($_POST['tenteNuit2'])
// && isset($_POST['tenteNuit3']) && isset($_POST['vanNuit1']) && isset($_POST['vanNuit2']) && isset($_POST['van3Nuits']) && isset($_POST['enfantsOui'])
// && isset($_POST['enfantsNon']) && isset($_POST['nombreCasquesEnfants']) && isset($_POST['NombreLugesEte'])
// empty($_POST['tarifReduit']) && !empty($_POST['passSelection']) && !empty($_POST['tenteNuit1']) && !empty($_POST['tenteNuit2'])
// && !empty($_POST['tenteNuit3']) && !empty($_POST['vanNuit1']) && !empty($_POST['vanNuit2']) && !empty($_POST['van3Nuits']) && !empty($_POST['enfantsOui'])
// && !empty($_POST['enfantsNon']) && !empty($_POST['nombreCasquesEnfants']) && !empty($_POST['NombreLugesEte'])


///
if (
    isset($_POST['nombrePlaces'])  && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['telephone']) && isset($_POST['password']) && isset($_POST['adressePostale']) &&
    !empty($_POST['nombrePlaces']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['telephone']) && !empty($_POST['password']) && !empty($_POST['adressePostale'])
) {
    $nom = htmlentities($_POST['nom']);
    $prenom = htmlentities($_POST['prenom']);
    $AdressePostale = htmlentities($_POST['adressePostale']);
    $Telephone = htmlentities($_POST['telephone']);

    if (isset($_POST['pass1jour'])) {
        $typePass = $_POST['choixJour1'];
    } elseif (isset($_POST['choixJour2'])) {
        $typePass = $_POST['choixJour2'];
    } else {
        $typePass = $_POST['choixJour3'];
    }

    if (isset($_POST['choixJour12'])) {
        $typePass = $_POST['choixJour12'];
    } else {
        $typePass = $_POST['choixJour23'];
    }

    if (isset($_POST['pass2jours'])) {
        $typePass = $_POST['pass2jours'];
    } else {
        $typePass = $_POST['pass3jours'];
    }

    if (isset($_POST['tarifReduit'])) {
        $typePass = $_POST['pass2jour'];
    } elseif (isset($_POST['pass2jour'])) {
        $typePass = $_POST['pass2jour'];
    } else {
        $typePass = $_POST['pass3jour'];
    }


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



    $client = new Client($Nom, $Prenom, $Telephone, $Email, $AdressePostale);
    $Database = new Database();
    if ($Database->saveClient($client)) {
        header('location:/../confirmation.php');
    } else {
        header('location:/../index.php?erreur=' . ERREUR_ENREGISTREMENT);
    }
    var_dump($client);
    $client = new Client(
        $NombrePlaces,
        $TarifReduit,
        $Pass1jour,
        $ChoixJour1,
        $ChoixJour2,
        $ChoixJour3,
        $ChoixJour12,
        $ChoixJour23,
        $Pass2jours,
        $Pass3jours,

        $Pass2jour,
        $Pass3jour,
        $VanNuit1,
        $VanNuit2,
        $VanNuit3,
        $Van3Nuits,
        $TenteNuit1,
        $TenteNuit2,
        $TenteNuit3,
        $Tente3Nuits,
        $EnfantsOui,
        $EnfantsNon,
        $NombreCasquesEnfants,
        $NombreLugesEte
    );
    $Reservation = new Reservation($reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation);
    if ($Database->savereservations($reservations)) {

        header('location:/../confirmation.php');
    } else {
        header('location:/../index.php?erreur=' . ERREUR_ENREGISTREMENT);
    }
}
