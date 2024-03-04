<?php
final class Database
{
    /////////////////Clients
    private $_DB_Client;

    public function __construct()
    {
        $this->_DB_Client = __DIR__ . "/../csv/clients.csv";
    }

    public function getAllClients(): array
    {
        $connexion = fopen($this->_DB_Client, 'r');
        $clients = [];

        while (($client = fgetcsv($connexion, 500, ",")) !== FALSE) {
            if (count($client) >= 11) {
                $clients[] = new Client(
                    $client[1],
                    $client[2],
                    $client[3],
                    $client[4],
                    $client[5],
                    $client[6],
                    $client[7],
                    $client[8],
                    $client[9],
                    $client[10],
                    $client[11],
                    $client[0]
                );
            }
            fclose($connexion);
            return $clients;
        }
    }

    public function getClientById(int $id): Client|bool
    {
        $connexion = fopen($this->_DB_Client, 'r');
        while (($client = fgetcsv($connexion, 500, ",")) !== FALSE) {
            if ((int) $client[0] === $id) {
                $clients[] = new Client(
                    $client[1],

                    $client[2],
                    $client[3],
                    $client[4],
                    $client[5],
                    $client[6],
                    $client[7],
                    $client[8],
                    $client[9],
                    $client[10],
                    $client[11],
                    $client[0]
                );
                break;
            } else {
                $client = false;
            }
        }
        return $client;
    }

    public function getClientByEmail(string $email): Client|bool
    {
        $connexion = fopen($this->_DB_Client, 'r');
        while (($client = fgetcsv($connexion, 500, ",")) !== FALSE) {
            if ((int) $client[4] === $email) {
                $clients[] = new Client(
                    $client[1],
                    $client[2],
                    $client[3],
                    $client[4],
                    $client[5],
                    $client[6],
                    $client[7],
                    $client[8],
                    $client[9],
                    $client[10],
                    $client[11],
                    $client[0]
                );
                break;
            } else {
                $client = false;
            }
        }
        return $client;
    }

    public function saveClient(Client $client): bool
    {
        $connexion = fopen($this->_DB_Client, 'ab');

        $retour = fputcsv($connexion, $client->getObjectToClient());

        fclose($connexion);

        return $retour;
    }

    public function deleteThisClient(int $IdClient): bool
    {
        if ($this->getClientById($IdClient)) {
            $clients = $this->getAllClients();
            $connexion = fopen($this->_DB_Client, 'wb');
            foreach ($clients as $client) {
                if ($client->getID() !== $IdClient) {
                    $retour = fputcsv($connexion, $client->getObjectToClient());
                }
            }
            fclose($connexion);
            return true;
        } else {
            return false;
        }
    }
}
