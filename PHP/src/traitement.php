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
    && isset($_POST['adressePostale'])
) {
};
