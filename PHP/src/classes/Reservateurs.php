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

function __construct(string $nom, string $prenom, string $email, string $telephone, string $adressePostale, int|string $id = "à créer")
{
    $this->setId($id);
    $this->setNom($nom);
    $this->setPrenom($prenom);
    $this->setEmail($email);
    $this->setTelephone($telephone);
    $this->setAdressePostale($adressePostale);
};
