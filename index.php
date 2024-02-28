<?php
session_start();



$code_erreur = null;
if (isset($_GET['erreur'])) {
  $code_erreur = (int) $_GET['erreur'];
}



?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire de réservation Music Vercos Festival</title>
  <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
  <div class="divConnex">
    <a href="./admin.php">
      <p class="plien">Connexion</p>
    </a>
  </div>
  <form action="php/src/traitement.php" id="inscription" method="POST">
    <fieldset id="reservation" class="fieldset">
      <legend>Réservation</legend>
      <h3>Nombre de réservation(s) :</h3>
      <input type="number" name="nombrePlaces" id="NombrePlaces" required>
      <h3>Réservation(s) en tarif réduit</h3>
      <input type="checkbox" name="tarifReduit" id="tarifReduit">
      <label for="tarifReduit">Ma réservation sera en tarif réduit</label>

      <h3>Choisissez votre formule :</h3>

      <div class="jour1">
        <div class="box">
          <input type="checkbox" name="pass1jour" id="pass1jour">

          <label for=" pass1jour">Pass 1 jour : 40€</label>

        </div>
        <!-- Si case cochée, afficher le choix du jour -->
        <section id="pass1jourDate">
          <div class="box">

            <input type="checkbox" name="choixJour1" id="choixJour1" class="passSelection">
            <label for="choixJour1">Pass pour la journée du 01/07</label>
          </div>
          <div class="box">
            <input type="checkbox" name="choixJour2" id="choixJour2" class="passSelection">
            <label for="choixJour2">Pass pour la journée du 02/07</label>
          </div>
          <div class="box">
            <input type="checkbox" name="choixJour3" id="choixJour3" class="passSelection">

            <label for="choixJour3">Pass pour la journée du 03/07</label>
          </div>
        </section>
      </div>

      <!-- Si case cochée, afficher le choix des jours -->
      <section id="pass2joursDate">
        <div class="box">
          <input type="checkbox" name="choixJour12" id="choixJour12">
          <label for="choixJour12">Pass pour deux journées du 01/07 au 02/07</label>
        </div>
        <div class="box">
          <input type="checkbox" name="choixJour23" id="choixJour23">
          <label for="choixJour23">Pass pour deux journées du 02/07 au 03/07</label>
        </div>
      </section>
      <div class="tarif">
        <div class="box">
          <input type="checkbox" name="pass2jours" id="pass2jours">
          <label for="pass2jours">Pass 2 jours : 70€</label>
        </div>
        <div class="box">
          <input type="checkbox" name="pass3jours" id="pass3jours">
          <label for="pass3jours">Pass 3 jours : 100€</label>
        </div>
      </div>
      <!-- tarifs réduits : à n'afficher que si tarif réduit est sélectionné -->
      <div class="tarifReduit">
        <div class="box">
          <input type="checkbox" name="pass1jour" id="pass1jour">
          <label for="pass1jour">Pass 1 jour : 25€</label>
        </div>
        <div class="box">
          <input type="checkbox" name="pass2jours" id="pass2jours">
          <label for="pass2jours">Pass 2 jours : 50€</label>
        </div>
        <div class="box">
          <input type="checkbox" name="pass3jours" id="pass3jours">
          <label for="pass3jours">Pass 3 jours : 65€</label>
        </div>
      </div>
      <!-- FACULTATIF : ajouter un pass groupe (5 adultes : 150€ / jour) uniquement pass 1 jour -->

      <p class="bouton" onclick="suivant('option')">Suivant</p>
    </fieldset>
    <fieldset id="options" class="fieldset">
      <legend>Options</legend>
      <div class="cadre">
        <h3>Réserver un emplacement de tente : </h3>
        <div class="box">
          <input type="checkbox" id="tenteNuit1" name="tenteNuit1">
          <label for="tenteNuit1">Pour la nuit du 01/07 (5€)</label>
        </div>
        <div class="box">
          <input type="checkbox" id="tenteNuit2" name="tenteNuit2">
          <label for="tenteNuit2">Pour la nuit du 02/07 (5€)</label>
        </div>
        <div class="box">
          <input type="checkbox" id="tenteNuit3" name="tenteNuit3">
          <label for="tenteNuit3">Pour la nuit du 03/07 (5€)</label>
        </div>
        <div class="box">
          <input type="checkbox" id="tente3Nuits" name="tente3Nuits">
          <label for="tente3Nuits">Pour les 3 nuits (12€)</label>
        </div>
      </div>

      <div class="cadre">
        <h3>Réserver un emplacement de camion aménagé : </h3>
        <div class="box">
          <input type="checkbox" id="vanNuit1" name="vanNuit1">
          <label for="vanNuit1">Pour la nuit du 01/07 (5€)</label>
        </div>
        <div class="box">
          <input type="checkbox" id="vanNuit2" name="vanNuit2">
          <label for="vanNuit2">Pour la nuit du 02/07 (5€)</label>
        </div>
        <div class="box">
          <input type="checkbox" id="vanNuit3" name="vanNuit3">
          <label for="vanNuit3">Pour la nuit du 03/07 (5€)</label>
        </div>
        <div class="box">
          <input type="checkbox" id="van3Nuits" name="van3Nuits">
          <label for="van3Nuits">Pour les 3 nuits (12€)</label>
        </div>
      </div>
      <div class="cadre">
        <h3>Venez-vous avec des enfants ?</h3>
        <div class="box">
          <input type="checkbox" name="enfantsOui" id="enfantsOui">
          <label for="enfantsOui">Oui</label>
          <input type="checkbox" name="enfantsNon">
          <label for="enfantsNon">Non</label>
        </div>
      </div>
      <!-- Si oui, afficher : -->
      <div class="enfant">
        <section class="cadre">
          <h4>Voulez-vous louer un casque antibruit pour enfants* (2€ / casque) ?</h4>
          <label for="nombreCasquesEnfants">Nombre de casques souhaités :</label>
          <input class="champ" type="number" name="nombreCasquesEnfants" id="nombreCasquesEnfants" value="0">
          <p>*Dans la limite des stocks disponibles.</p>
        </section>
        <div class="cadre">
          <h3>Profitez de descentes en luge d'été à tarifs avantageux !</h3>
          <label for="NombreLugesEte">Nombre de descentes en luge d'été :</label>
          <input class="champ" type="number" name="NombreLugesEte" id="NombreLugesEte" value="0">
        </div>
      </div>
      <p class="bouton2" onclick="suivant('coordonnees')">Suivant</p>
    </fieldset>
    <fieldset id="coordonnees" class="fieldset">
      <legend>Coordonnées</legend>
      <label for="nom">Nom :</label>
      <input class="champ" type="text" name="nom" id="nom" required>
      <label for="prenom">Prénom :</label>
      <input class="champ" type="text" name="prenom" id="prenom" required><br>
      <label for="email">Email :</label>
      <input class="champ" type="email" name="email" id="email" required>

      <?php if ($code_erreur === 3) { ?>
        <div class="message echec">
          L'Email n'est pas valide.
        </div>
      <?php } ?>

      <label for="telephone">Téléphone :</label>
      <input class="champ" type="text" name="telephone" id="telephone" required>
      <label for="adressePostale">Adresse Postale :</label>
      <input type="text" name="adressePostale" id="adressePostale" required>

      <input type="submit" name="soumission" class="bouton3" value="Réserver">
    </fieldset>
  </form>
</body>
<script src="./scripts/script.js"></script>

</html>