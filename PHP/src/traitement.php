<?php
// Les éléments à cocher

//récupération
$recupNombrePlaces = $_POST['nombrePlaces'];
$recupTarifReduit = $_POST['tarifReduit'];
$recupPassSelection = $_POST['passSelection'];
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


///
if (
    isset($_POST['nombrePlaces']) && isset($_POST['tarifReduit']) && isset($_POST['passSelection']) && isset($_POST['tenteNuit1']) && isset($_POST['tenteNuit2'])
    && isset($_POST['tenteNuit3']) && isset($_POST['vanNuit1']) && isset($_POST['vanNuit2']) && isset($_POST['van3Nuits']) && isset($_POST['enfantsOui'])
    && isset($_POST['enfantsNon']) && isset($_POST['nombreCasquesEnfants']) && isset($_POST['NombreLugesEte']) && isset($_POST['nom'])
    && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['telephone'])
    && isset($_POST['adressePostale']) && !empty($_POST['nombrePlaces']) && !empty($_POST['tarifReduit']) && !empty($_POST['passSelection']) && !empty($_POST['tenteNuit1']) && !empty($_POST['tenteNuit2'])
    && !empty($_POST['tenteNuit3']) && !empty($_POST['vanNuit1']) && !empty($_POST['vanNuit2']) && !empty($_POST['van3Nuits']) && !empty($_POST['enfantsOui'])
    && !empty($_POST['enfantsNon']) && !empty($_POST['nombreCasquesEnfants']) && !empty($_POST['NombreLugesEte']) && !empty($_POST['nom'])
    && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['telephone'])
    && !empty($_POST['adressePostale'])
) {
    $nom = htmlentities($_POST['nom']);
    $prenom = htmlentities($_POST['prenom']);

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

    

    $user = new User($nom, $prenom, $mail, $adressePostale);
    $Database = new Database();
    if ($Database->saveUtilisateur($user)) {
        header('location:/../confirmation.php');
    } else {
        header('location:/../index.php?erreur=' . ERREUR_ENREGISTREMENT);
    }
} else {
    header('location:/../index.php?erreur=' . ERREUR_CHAMP_VIDE);
    die;
}
};
