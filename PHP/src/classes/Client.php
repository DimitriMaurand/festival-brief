<?php
class Client
{
    private $_id;
    private $_nom;
    private $_prenom;
    private $_email;
    private $_telephone;
    private $_adressePostale;


    /**
     * Création d'un nouvel utilisateur
     * @param string $nom      Le nom de l'utilisateur
     * @param string $prenom   Le prénom de l'utilisateur
     * @param string $mail     Le mail de l'utilisateur
     * * @param int $telephone       Le numero lode telephone de l'utilisateur
     * @param string $adressePostale L'adresse postale de l'utilisateur
     * @param int $id       L'id de l'utilisateur si on le connait, sinon rien.
     */

    function __construct(string $nom, string $prenom, string $telephone, string $email, string $_adressePostale, int|string $id = "à créer")
    {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setTelephone($telephone);
        $this->setEmail($email);
        $this->setAdressePostale($_adressePostale);
        $this->setId($id);
    }



    public function getId(): int
    {
        return $this->_id;
    }
    public function setId(int|string $id)
    {
        if (is_string($id) && $id === "à créer") {
            $this->_id = $this->CreerNouvelId();
        } else {
            $this->_id = $id;
        }
    }



    public function getNom(): string
    {
        return $this->_nom;
    }
    public function setNom(string $nom)
    {
        $this->_nom = $nom;
    }



    public function getPrenom(): string
    {
        return $this->_prenom;
    }
    public function setPrenom(string $prenom)
    {
        $this->_prenom = $prenom;
    }



    public function getTelephone(): string
    {
        return $this->_telephone;
    }
    public function setTelephone(string $telephone)
    {
        $this->_telephone = $telephone;
    }



    public function getEmail(): string
    {
        return $this->_email;
    }
    public function setEmail(string $email)
    {
        $this->_email = $email;
    }



    public function getAdressePostale(): string
    {
        return $this->_adressePostale;
    }
    public function setAdressePostale(string $_adressePostale): void
    {
        $this->_adressePostale = $_adressePostale;
    }



    private function CreerNouvelId()
    {
        $Database = new Database();
        $clients = $Database->getAllClients();
        // On crée un tableau dans lequel on stockera tous les ids existants.
        $IDs = [];
        foreach ($clients as $client) {
            $IDs[] = $client->getId();
        }
        // Ensuite, on regarde si un chiffre existe dans le tableau, et si non, on l'incrémente
        $i = 1;
        $unique = false;
        while ($unique === false) {
            if (in_array($i, $IDs)) {
                $i++;
            } else {
                $unique = true;
            }
        }
        return $i;
    }
    public function getObjectToArray(): array
    {
        return [
            "id" => $this->getId(),
            "nom" => $this->getNom(),
            "prenom" => $this->getPrenom(),
            "telephone" => $this->getTelephone(),
            "mail" => $this->getEmail(),
            "adresse postale" => $this->getAdressePostale()
        ];
    }
}
