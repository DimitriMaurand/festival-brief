<?php
final class Database
{
    /////////////////:Clients
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
            $clients[] = new Client($client[0], $client[1], $client[2], $client[3], $client[4], $client[5]);
        }
        fclose($connexion);
        return $clients;
    }

    public function getClientById(int $id): Client|bool
    {
        $connexion = fopen($this->_DB_Client, 'r');
        while (($client = fgetcsv($connexion, 500, ",")) !== FALSE) {
            if ((int) $client[0] === $id) {
                $clients[] = new Client($client[0], $client[1], $client[2], $client[3], $client[4], $client[5]);
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
                $clients[] = new Client($client[0], $client[1], $client[2], $client[3], $client[4], $client[5]);
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

    ///////////////Reservations
    private $_DB_Reservations;

    public function __construct__()
    {
        $this->_DB_Reservations = __DIR__ . "/../csv/reservation.csv";
    }

    public function getAllReservations(): array
    {
        $connexion = fopen($this->_DB_Reservations, 'r');
        $reservations = [];

        while (($reservation = fgetcsv($connexion, 500, ",")) !== FALSE) {
            $reservation[] = new Reservation($reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation);
        }
        fclose($connexion);
        return $reservations;
    }

    public function getreservationsById(int $id): Reservation|bool
    {
        $connexion = fopen($this->_DB_Reservations, 'r');
        while (($reservation = fgetcsv($connexion, 500, ",")) !== FALSE) {
            if (
                (int) $reservation[0] === $id
            ) {
                $reservations[] = new Reservation($reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation, $reservation);
                break;
            } else {
                $reservations = false;
            }
        }
        return $reservations;
    }

    public function getreservationsByEmail(string $email): Reservation|bool
    {
        $connexion = fopen($this->_DB_Reservations, 'r');
        while (($reservation = fgetcsv($connexion, 500, ",")) !== FALSE) {
            if (
                (int) $reservation[4] === $email
            ) {
                $reservations[] = new Reservation($reservation[0], $reservation[1], $reservation[2], $reservation[3], $reservation[4], $reservation[5], $reservation[6], $reservation[7], $reservation[8], $reservation[9], $reservation[10], $reservation[11], $reservation[12], $reservation[13], $reservation[14], $reservation[15], $reservation[16], $reservation[17], $reservation[18], $reservation[19], $reservation[20], $reservation[21], $reservation[22], $reservation[23], $reservation[24], $reservation[25], $reservation[26], $reservation[27], $reservation[28], $reservation[29]);
                break;
            } else {
                $reservations = false;
            }
        }
        return $reservations;
    }

    public function savereservations(Reservation $reservations): bool
    {
        $connexion = fopen($this->_DB_Reservations, 'ab');

        $retour = fputcsv($connexion, $reservations->getObjectToReservation());

        fclose($connexion);

        return $retour;
    }

    public function deleteThisreservations(int $Idreservations): bool
    {
        if ($this->getReservationsById($Idreservations)) {
            $reservations = $this->getAllReservations();
            $connexion = fopen($this->_DB_Reservations, 'wb');
            foreach ($reservations as $reservation) {
                if (
                    $reservation->getID() !== $Idreservations
                ) {
                    $retour = fputcsv($connexion, $reservation->getObjectToReservations());
                }
            }
            fclose($connexion);
            return true;
        } else {
            return false;
        }
    }
}
