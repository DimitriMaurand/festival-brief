<?php

class Reservation
{
    private $_id;
    private $_nom;
    private $_prenom;
    private $_mail;
    private $_nombreResa;
    private $_tarifReduit;
    // private $_pass1jour;
    // private $_choixJour1;
    // private $_choixJour2;
    // private $_choixJour3;
    // private $_choixJour12;
    // private $_choixJour23;
    // private $_pass2jours;
    // private $_pass3jours;
    private $_typePass;
    // private $_tenteNuit1;
    // private $_tenteNuit2;
    // private $_tenteNuit3;
    // private $_tente3Nuits;
    private $_tente;
    // private $_emplacementVan;
    // private $_vanNuit1;
    // private $_vanNuit2;
    // private $_vanNuit3;
    // private $_van3Nuits;
    private $_van;
    // private $_enfantsOui;
    // private $_enfantsNon;
    private $_enfants;
    private $_casqueAntiBruit;
    private $_luge;
    private $_tarif;


    function __construct(string $nom, string $prenom, string $email, int $places, bool $tarifReduit, string $typePass, string $van, string $tente, string $enfants, int $nombreCasquesEnfants, int $nombreLugesEte, int $tarif, int|string $id = "à créer",)
    {
        $this->setId($id);
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setMail($email);
        $this->setNombreResa($places);
        $this->setTarifReduit($tarifReduit);
        // $this->setPass1jour($pass1jour);
        // $this->setChoixJour1($choixJour1);
        // $this->setChoixJour2($choixJour2);
        // $this->setChoixJour3($choixJour3);
        // $this->setChoixJour12($choixJour12);
        // $this->setChoixJour23($choixJour23);
        // $this->setPass2jours($pass2jours);
        // $this->setPass3jours($pass3jours);
        $this->setTypePass($typePass);
        // $this->setEmplacementTente($emplacementTente);
        // $this->setTenteNuit1($tenteNuit1);
        // $this->setTenteNuit2($tenteNuit2);
        // $this->setTenteNuit3($tenteNuit3);
        // $this->setTente3Nuits($tente3Nuits);
        $this->setTente($tente);
        // $this->setEmplacementVan($emplacementVan);
        // $this->setVanNuit1($vanNuit1);
        // $this->setVanNuit2($vanNuit2);
        // $this->setVanNuit3($vanNuit3);
        // $this->setVan3Nuits($van3Nuits);
        $this->setVan($van);
        // $this->setEnfantOui($enfantsOui);
        // $this->setEnfantNon($enfantsNon);
        $this->setEnfant($enfants);
        $this->setCasqueAntiBruit($nombreCasquesEnfants);
        $this->setLuge($nombreLugesEte);
        $this->setTarif($tarif);
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
    public function getMail(): string
    {
        return $this->_mail;
    }
    public function setMail(string $email)
    {
        $this->_mail = $email;
    }
    public function getNombreResa(): int
    {
        return $this->_nombreResa;
    }
    public function setNombreResa(int $places)
    {
        $this->_nombreResa = $places;
    }

    public function getTarifReduit(): bool
    {
        return $this->_tarifReduit;
    }
    public function setTarifReduit(bool $tarifReduit)
    {
        $this->_tarifReduit = $tarifReduit;
    }

    







    






    







    
    




    public function getCasqueAntiBruit(): string
    {
        return $this->_casqueAntiBruit;
    }
    public function setCasqueAntiBruit(string $nombreCasquesEnfants)
    {
        $this->_casqueAntiBruit = $nombreCasquesEnfants;
    }

    public function getLuge(): string
    {
        return $this->_luge;
    }
    public function setLuge(string $nombreLugesEte)
    {
        $this->_luge = $nombreLugesEte;
    }

    public function getTarif(): string
    {
        return $this->_tarif;
    }
    public function setTarif(string $tarif)
    {
        $this->_tarif = $tarif;
    }

    private function CreerNouvelId()
    {
        $Database = new Database();
        $clients = $Database->getAllClients();


        $ids = [];

        foreach ($clients as $client) {
            $ids[] = $client->getId();
        }


        $i = 1;
        $unique = false;
        while ($unique === false) {
            if (in_array($i, $ids)) {
                $i++;
            } else {
                $unique = true;
            }
        }
        return $i;
    }



    public function getObjectToReservation(): array
    {
        return [
            "id" => $this->getId(),
            "nom" => $this->getNom(),
            "prenom" => $this->getPrenom(),
            "mail" => $this->getMail(),
            "nombreResa" => $this->getNombreResa(),
            "tarifReduit" => $this->getTarifReduit(),
            "pass1jour" => $this->getPass1jour(),
            "choixJour1" => $this->getChoixJour1(),
            "choixJour2" => $this->getChoixJour2(),
            "choixJour3" => $this->getChoixJour3(),
            "choixJour12" => $this->getChoixJour12(),
            "choixJour23" => $this->getChoixJour23(),
            "pass2jours" => $this->getPass2jours(),
            "pass3jours" => $this->getPass3jours(),
            "emplacementTente" => $this->getEmplacementTente(),
            "tenteNuit1" => $this->getTenteNuit1(),
            "tenteNuit2" => $this->getTenteNuit2(),
            "tenteNuit3" => $this->getTenteNuit3(),
            "tente3Nuits" => $this->getTente3Nuits(),
            "emplacementVan" => $this->getEmplacementVan(),
            "vanNuit1" => $this->getVanNuit1(),
            "vanNuit2" => $this->getVanNuit2(),
            "vanNuit3" => $this->getVanNuit3(),
            "van3Nuits" => $this->getVan3Nuits(),
            "enfantOui" => $this->getEnfantOui(),
            "enfantNon" => $this->getEnfantNon(),
            "casqueAntiBruit" => $this->getCasqueAntiBruit(),
            "luge" => $this->getLuge(),
            "tarif" => $this->getTarif()
        ];
    }
}
