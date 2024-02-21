<?php
final class Database
{
    private $_DB;

    public function __construct()
    {
        $this->_DB = __DIR__ . "/../csv/utilisateurs.csv";
    }

    public function getAllReservateurs(): array
    {
        $connexion = fopen($this->_DB, 'r');
        $utiliseurs = [];

        while (($user = fgetcsv($connexion, 1000, ",")) !== FALSE) {
            $utiliseurs[] = new Reservateur($user[1], $user[2], $user[3], $user[4], $user[0], $user[5]);
        }

        fclose($connexion);

        return $utiliseurs;
    }

    public function getThisUtilisateurById(int $id): Reservateur|bool
    {
        $connexion = fopen($this->_DB, 'r');
        while (($user = fgetcsv($connexion, 1000, ",")) !== FALSE) {
            if ((int) $user[0] === $id) {
                $user = new Reservateur($user[1], $user[2], $user[3], $user[4], $user[0], $user[5]);
                break;
            } else {
                $user = false;
            }
        }
        return $user;
    }

    public function getThisUtilisateurByMail(string $mail): Reservateur|bool
    {
        $connexion = fopen($this->_DB, 'r');
        while (($user = fgetcsv($connexion, 1000, ",")) !== FALSE) {
            if ($user[3] === $mail) {
                $user = new Reservateur($user[1], $user[2], $user[3], $user[4], $user[0], $user[5]);
                break;
            } else {
                $user = false;
            }
        }
        return $user;
    }

    public function saveUtilisateur(Reservateur $user): bool
    {
        $connexion = fopen($this->_DB, 'ab');

        $retour = fputcsv($connexion, $user->getObjectToArray());

        fclose($connexion);

        return $retour;
    }

    public function deleteThisUser(int $IdUser): bool
    {
        if ($this->getThisUtilisateurById($IdUser)) {
            $utiliseurs = $this->getAllReservateurs();

            $connexion = fopen($this->_DB, 'wb');
            foreach ($utiliseurs as $utiliseur) {
                if ($utiliseur->getID() !== $IdUser) {
                    $retour = fputcsv($connexion, $utiliseur->getObjectToArray());
                }
            }
            fclose($connexion);
            return true;
        } else {
            return false;
        }
    }
}
