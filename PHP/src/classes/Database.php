<?php
final class Database
{
    private $_DB;

    public function __construct()
    {
        $this->_DB = __DIR__ . "/../csv/clients.csv";
    }

    public function saveClient(Client $client): bool
    {
        $fichier = fopen($this->_DB, 'ab');

        $retour = fputcsv($fichier, $client->getObjectToArray());

        fclose($fichier);

        return $retour;
    }

    public function getAllClients(): array
    {
        $connexion = fopen($this->_DB, 'r');
        $clients = [];

        while (($client = fgetcsv($connexion, 500, ",")) !== FALSE) {
            $clients[] = new Client($client[0], $client[1], $client[2], $client[3], $client[4], $client[5]);
        }
        fclose($connexion);
        return $clients;
    }
}
