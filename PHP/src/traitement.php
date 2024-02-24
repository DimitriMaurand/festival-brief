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
    isset($_POST['nombrePlaces'])  && isset($_POST['nom'])
    && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['telephone'])
    && isset($_POST['password'])
    && isset($_POST['adressePostale']) && !empty($_POST['nombrePlaces']) && !empty($_POST['nom'])
    && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['telephone'])
    && !empty($_POST['adressePostale']) && !empty($_POST['password'])
) {
    $nom = htmlentities($_POST['nom']);
    $prenom = htmlentities($_POST['prenom']);
    $AdressePostale = htmlentities($_POST['adressePostale']);
    $Telephone = htmlentities($_POST['telephone']);


    //pass 1 jour
    if (isset($_POST['pass1jour'])) {
        if (isset($_POST['choixJour1'])) {
            $typePass = 'journee_01_07';
        } elseif (isset($_POST['choixJour2'])) {
            $typePass = 'journee_02_07';
        } else {
            $typePass = 'journee_03_07';
        }
    }

    //choix 2 jours
    if (isset($_POST['choixJour12'])) {
        $typePass = 'journees_01_07-02_07';
    }
    if (isset($_POST['choixJour23'])) {
        $typePass = 'journees_02_07-03_07';
    }

    //pass plusieurs jours
    if (isset($_POST['pass2jours'])) {
        $typePass = 'pass_2_jours';
    }
    if (isset($_POST['pass3jours'])) {
        $typePass = 'pass_3_jours';
    }

    //tarif réduit
    if (isset($_POST['tarifReduit'])) {
        if (isset($_POST['pass1jour'])) {
            $typePass = 'réduit_pass_1jour';
        } elseif (isset($_POST['pass2jour'])) {
            $typePass = 'réduit_pass_2jour';
        } else {
            $typePass = 'réduit_pass_3jour';
        }
    }

    //option

    //tente
    if (isset($_POST['tenteNuit1'])) {
        $tente = 'tente_Nuit_1';
    }

    if (isset($_POST['tenteNuit2'])) {
        $tente = 'tente_Nuit_2';
    }
    if (isset($_POST['tente_Nuit_3'])) {
        $tente = 'tente_Nuit_3';
    }

    //van
    if (isset($_POST['vanNuit1'])) {
        $Van = 'vanNuit1';
    }
    if (isset($_POST['vanNuit2'])) {
        $Van = 'van_Nuit_2';
    }
    if (isset($_POST['vanNuit3'])) {
        $Van = 'van_Nuit_3';
    }
    if (isset($_POST['van3Nuits'])) {
        $Van = 'van_3_Nuits';
    }

    //casque
    if (isset($_POST['enfantsOui'])) {
        if (isset($_POST['nombreCasquesEnfants'])) {
            $enfant = 'nombreCasquesEnfants';
        }
    }

    if (isset($_POST['enfantsOui'])) {
        if (isset($_POST['NombreLugesEte'])) {
            $enfant = 'NombreLugesEte';
        }
    }
    //coordonnée


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

        $typePass,

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
