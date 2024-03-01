<?php
class Client
{
    private $_id;
    private $_nom;
    private $_prenom;
    private $_email;
    private $_telephone;
    private $_adressePostale;
    private $_nombreResa;
    private $_typePass;
    private $_tente;
    private $_Van;
    private $_casque;

    private $_luge;
    /**
     * Création d'un nouvel utilisateur
     * @param string $nom      Le nom de l'utilisateur
     * @param string $prenom   Le prénom de l'utilisateur
     * @param string $mail     Le mail de l'utilisateur
     * * @param int $telephone       Le numero lode telephone de l'utilisateur
     * @param string $adressePostale L'adresse postale de l'utilisateur
     * @param int $id       L'id de l'utilisateur si on le connait, sinon rien.
     */

    function __construct(
        string $nom,
        string $prenom,
        string $telephone,
        string $email,
        string $_adressePostale,
        int $nombreResa,
        string $typePass,
        string $tente,
        string $Van,
        ?int  $casque,
        ?int $luge,
        int|string $id = "à créer"
    ) {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setTelephone($telephone);
        $this->setEmail($email);
        $this->setAdressePostale($_adressePostale);
        $this->setId($id);

        $this->setNombreResa($nombreResa);
        $this->setTypePass($typePass);
        $this->setTente($tente);
        $this->setVan($Van);
        $this->setCasque($casque);
        $this->setLuge($luge);
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

    //** */
    public function getNombreResa(): int
    {
        return $this->_nombreResa;
    }
    public function setNombreResa(int $nombreResa): void
    {
        $this->_nombreResa = $nombreResa;
    }
    //** */
    public function getTypePass(): string
    {
        return $this->_typePass;
    }
    public function setTypePass(string $_typePass): void
    {
        $this->_typePass = $_typePass;
    }

    //** */
    public function getTente()
    {

        if (is_string($this->_tente) || is_int($this->_tente)) {
            return $this->_tente;
        }
    }
    public function setTente($tente): void
    {
        if (is_string($tente) || is_int($tente)) {
            $this->_tente = $tente;
        }
    }

    //** */

    public function getVan()
    {

        if (is_string($this->_Van) || is_int($this->_Van)) {
            return $this->_Van;
        }
    }
    public function setVan($Van): void
    {
        if (is_string($Van) || is_int($Van)) {
            $this->_Van = $Van;
        }
    }

    // public function getVan(): string
    // {
    //     return $this->_Van;
    // }
    // public function setVan(string $_Van): void
    // {
    //     $this->_Van = $_Van;
    // }
    //*/
    // public function getCasque()
    // {

    //     if (is_string($this->_casque) || is_int($this->_casque)) {
    //         return $this->_casque;
    //     }
    // }
    // public function setCasque($casque): void
    // {
    //     if (is_string($casque) || is_int($casque)) {
    //         $this->_casque = $casque;
    //     }
    // }


    public function getCasque(): ?int
    {
        return $this->_casque;
    }
    public function setCasque(?int $_casque): void
    {
        $this->_casque = $_casque;
    }
    //*/
    // public function getLuge()
    // {

    //     if (is_string($this->_luge) || is_int($this->_luge)) {
    //         return $this->_luge;
    //     }
    // }
    // public function setLuge($luge): void
    // {
    //     if (is_string($luge) || is_int($luge)) {
    //         $this->_luge = $luge;
    //     }
    // }

    public function getLuge(): ?int
    {
        return $this->_luge;
    }
    public function setLuge(?int $_luge): void
    {
        $this->_luge = $_luge;
    }

    //*/
    private function CreerNouvelId()
    {
        // $Database = new Database();
        // $clients = $Database->getAllClients();
        // On crée un tableau dans lequel on stockera tous les ids existants.
        // $IDs = [];
        // foreach ($clients as $client) {
        //     $IDs[] = $client->getId();
        // }
        // Ensuite, on regarde si un chiffre existe dans le tableau, et si non, on l'incrémente
        // $i = 1;
        // $unique = false;
        // while ($unique === false) {
        //     if (in_array($i, $IDs)) {
        //         $i++;
        //     } else {
        //         $unique = true;
        //     }
        // }
        $i = rand(1, 10000000);
        return $i;
    }
    public function getObjectToClient(): array
    {
        return [
            "id" => $this->getId(),
            "nom" => $this->getNom(),
            "prenom" => $this->getPrenom(),
            "telephone" => $this->getTelephone(),
            "mail" => $this->getEmail(),
            "adresse postale" => $this->getAdressePostale(),
            "nombreResa" => $this->getNombreResa(),
            "typePass" => $this->getTypePass(),
            "tente" => $this->getTente(),
            "van" => $this->getVan(),
            "casque" => $this->getCasque(),
            "luge" => $this->getLuge(),
        ];
    }
}
