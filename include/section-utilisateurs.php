<?php
?>
<table class="tableau-utilisateurs">
    <caption>
        <h1>Liste des Paticipants</h1>
    </caption>
    <thead>
        <tr>
            <th>ID</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Téléphone</th>
            <th>Mail</th>
            <th>Adresse</th>
            <th>NombrePlaces</th>
            <th>Tente</th>
            <th>Van</th>
            <th>Casque</th>
            <th>Luge</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($clients) && is_array($clients)) {
            foreach ($clients as $client) { ?>
                <tr>
                    <td><?= $client->getId() ?></td>
                    <td><?= $client->getPrenom() ?></td>
                    <td><?= $client->getNom() ?></td>
                    <td><?= $client->getTelephone() ?></td>
                    <td><?= $client->getEmail() ?></td>
                    <td><?= $client->getAdressePostale() ?></td>
                    <td><?= $client->getNombreResa() ?></td>
                    <td><?= $client->getTypePass() ?></td>
                    <td><?= $client->getTente() ?></td>
                    <td><?= $client->getVan() ?></td>
                    <td><?= $client->getCasque() ?></td>
                    <td><?= $client->getLuge() ?></td>
                    <td><button onclick="location.href='src/suppression?suppression=<?= $client->getId() ?>'">🗑️ Supprimer</button></td>
                </tr>
        <?php }
        } ?>
    </tbody>
</table>