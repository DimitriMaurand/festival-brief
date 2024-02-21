<?php
class Reservateurs
{
    private $_id;
    private $_nom;
    private $_prenom;
    private $_email;
    private $_telephone;
    private $_adressePostale;
}

/**
 * Création d'un nouvel utilisateur
 * @param string $nom      Le nom de l'utilisateur
 * @param string $prenom   Le prénom de l'utilisateur
 * @param string $mail     Le mail de l'utilisateur
 * * @param int $telephone       Le numero lode telephone de l'utilisateur
 * @param string $adressePostale L'adresse postale de l'utilisateur
 * @param int $id       L'id de l'utilisateur si on le connait, sinon rien.
 */

function __construct(string $nom, string $prenom, string $email, string $telephone, string $adressePostale, int|string $id = "à créer")
{
    $this->setId($id);
    $this->setNom($nom);
    $this->setPrenom($prenom);
    $this->setEmail($email);
    $this->setTelephone($telephone);
    $this->setAdressePostale($adressePostale);
};

