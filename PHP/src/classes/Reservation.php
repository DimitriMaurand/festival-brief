<?php

class Reservation
{
    private $_id;
    private $_nom;
    private $_prenom;
    private $_mail;
    private $_nombreResa;
    private $_tarifReduit;
    private $_pass1jour;
    private $_choixJour1;
    private $_choixJour2;
    private $_choixJour3;
    private $_choixJour12;
    private $_choixJour23;
    private $_pass2jours;
    private $_pass3jours;
    private $_emplacementTente;
    private $_tenteNuit1;
    private $_tenteNuit2;
    private $_tenteNuit3;
    private $_tente3Nuits;
    private $_emplacementVan;
    private $_vanNuit1;
    private $_vanNuit2;
    private $_vanNuit3;
    private $_van3Nuits;
    private $_enfantsOui;
    private $_enfantsNon;
    private $_casqueAntiBruit;
    private $_luge;
    private $_tarif;


    function __construct(string $recupNom, string $recupPrenom, string $recupEmail, int|string $recupId = "à créer", int $recupNombrePlaces, bool $recupTarifReduit, string $recupPass1jour, string $recupChoixJour1, string $recupChoixJour2, string $recupChoixJour3, string $recupChoixJour12, string $recupChoixJour23, string $recupPass2jours, string $recupPass3jours, string $recupEmplacementVan, string $recupVanNuit1, string $recupVanNuit2, string $recupVanNuit3, string $recupVan3Nuits, string $recupEmplacementTente, string $recupTenteNuit1, string  $recupTenteNuit2, string $recupTenteNuit3, string $recupTente3Nuits, string $recupEnfantsOui, string $recupEnfantsNon,  int $recupNombreCasquesEnfants, int $recupNombreLugesEte, int $recupTarif)
    {
        $this->setId($recupId);
        $this->setNom($recupNom);
        $this->setPrenom($recupPrenom);
        $this->setMail($recupEmail);
        $this->setNombreResa($recupNombrePlaces);
        $this->setTarifReduit($recupTarifReduit);
        $this->setPass1jour($recupPass1jour);
        $this->setChoixJour1($recupChoixJour1);
        $this->setChoixJour2($recupChoixJour2);
        $this->setChoixJour3($recupChoixJour3);
        $this->setChoixJour12($recupChoixJour12);
        $this->setChoixJour23($recupChoixJour23);
        $this->setPass2jours($recupPass2jours);
        $this->setPass3jours($recupPass3jours);
        $this->setEmplacementTente($recupEmplacementTente);
        $this->setTenteNuit1($recupTenteNuit1);
        $this->setTenteNuit2($recupTenteNuit2);
        $this->setTenteNuit3($recupTenteNuit3);
        $this->setTente3Nuits($recupTente3Nuits);
        $this->setEmplacementVan($recupEmplacementVan);
        $this->setVanNuit1($recupVanNuit1);
        $this->setVanNuit2($recupVanNuit2);
        $this->setVanNuit3($recupVanNuit3);
        $this->setVan3Nuits($recupVan3Nuits);
        $this->setEnfantOui($recupEnfantsOui);
        $this->setEnfantNon($recupEnfantsNon);
        $this->setCasqueAntiBruit($recupNombreCasquesEnfants);
        $this->setLuge($recupNombreLugesEte);
        $this->setTarif($recupTarif);
    }

    public function getId(): int
    {
        return $this->_id;
    }
    public function setId(int|string $recupId)
    {
        if (is_string($recupId) && $recupId === "à créer") {
            $this->_id = $this->CreerNouvelId();
        } else {
            $this->_id = $recupId;
        }
    }
    public function getNom(): string
    {
        return $this->_nom;
    }
    public function setNom(string $recupNom)
    {
        $this->_nom = $recupNom;
    }
    public function getPrenom(): string
    {
        return $this->_prenom;
    }
    public function setPrenom(string $recupPrenom)
    {
        $this->_prenom = $recupPrenom;
    }
    public function getMail(): string
    {
        return $this->_mail;
    }
    public function setMail(string $recupEmail)
    {
        $this->_mail = $recupEmail;
    }
    public function getNombreResa(): int
    {
        return $this->_nombreResa;
    }
    public function setNombreResa(int $recupNombrePlaces)
    {
        $this->_nombreResa = $recupNombrePlaces;
    }

    public function getTarifReduit(): bool
    {
        return $this->_tarifReduit;
    }
    public function setTarifReduit(bool $recupTarifReduit)
    {
        $this->_tarifReduit = $recupTarifReduit;
    }

    public function getPass1jour(): string
    {
        return $this->_pass1jour;
    }
    public function setPass1jour(string $recupPass1jour)
    {
        $this->_pass1jour = $recupPass1jour;
    }

    public function getChoixJour1(): string
    {
        return $this->_choixJour1;
    }
    public function setChoixJour1(string $recupChoixJour1)
    {
        $this->_choixJour1 = $recupChoixJour1;
    }
    public function getChoixJour2(): string
    {
        return $this->_choixJour2;
    }
    public function setChoixJour2(string $recupChoixJour2)
    {
        $this->_choixJour2 = $recupChoixJour2;
    }
    public function getChoixJour3(): string
    {
        return $this->_choixJour3;
    }
    public function setChoixJour3(string $recupChoixJour3)
    {
        $this->_choixJour3 = $recupChoixJour3;
    }
    public function getChoixJour12(): string
    {
        return $this->_choixJour12;
    }
    public function setChoixJour12(string $recupChoixJour12)
    {
        $this->_choixJour12 = $recupChoixJour12;
    }
    public function getChoixJour23(): string
    {
        return $this->_choixJour23;
    }
    public function setChoixJour23(string $recupChoixJour23)
    {
        $this->_choixJour23 = $recupChoixJour23;
    }
    public function getPass2jours(): string
    {
        return $this->_pass2jours;
    }
    public function setPass2jours(string $recupPass2jours)
    {
        $this->_pass2jours = $recupPass2jours;
    }
    public function getPass3jours(): string
    {
        return $this->_pass3jours;
    }
    public function setPass3jours(string $recupPass3jours)
    {
        $this->_pass3jours = $recupPass3jours;
    }







    public function getEmplacementTente(): string
    {
        return $this->_emplacementTente;
    }
    public function setEmplacementTente(string $recupEmplacementTente)
    {
        $this->_emplacementTente = $recupEmplacementTente;
    }
    public function getTenteNuit1(): string
    {
        return $this->_tenteNuit1;
    }
    public function setTenteNuit1(string $recupTenteNuit1)
    {
        $this->_tenteNuit1 = $recupTenteNuit1;
    }
    public function getTenteNuit2(): string
    {
        return $this->_tenteNuit2;
    }
    public function setTenteNuit2(string $recupTenteNuit2)
    {
        $this->_tenteNuit2 = $recupTenteNuit2;
    }
    public function getTenteNuit3(): string
    {
        return $this->_tenteNuit3;
    }
    public function setTenteNuit3(string $recupTenteNuit3)
    {
        $this->_tenteNuit3 = $recupTenteNuit3;
    }
    public function getTente3Nuits(): string
    {
        return $this->_tente3Nuits;
    }
    public function setTente3Nuits(string $recupTente3Nuits)
    {
        $this->_tente3Nuits = $recupTente3Nuits;
    }






    public function getEmplacementVan(): string
    {
        return $this->_emplacementVan;
    }
    public function setEmplacementVan(string $recupEmplacementVan)
    {
        $this->_emplacementVan = $recupEmplacementVan;
    }

    public function getVanNuit1(): string
    {
        return $this->_vanNuit1;
    }
    public function setVanNuit1(string $recupVanNuit1)
    {
        $this->_vanNuit1 = $recupVanNuit1;
    }
    public function getVanNuit2(): string
    {
        return $this->_vanNuit2;
    }
    public function setVanNuit2(string $recupVanNuit2)
    {
        $this->_vanNuit2 = $recupVanNuit2;
    }
    public function getVanNuit3(): string
    {
        return $this->_vanNuit3;
    }
    public function setVanNuit3(string $recupVanNuit3)
    {
        $this->_vanNuit3 = $recupVanNuit3;
    }
    public function getVan3Nuits(): string
    {
        return $this->_van3Nuits;
    }
    public function setVan3Nuits(string $recupVan3Nuits)
    {
        $this->_van3Nuits = $recupVan3Nuits;
    }







    public function getEnfantOui(): string
    {
        return $this->_enfantsOui;
    }
    public function setEnfantOui(string $recupEnfantsOui)
    {
        $this->_enfantsOui = $recupEnfantsOui;
    }
    public function getEnfantNon(): string
    {
        return $this->_enfantsNon;
    }
    public function setEnfantNon(string $recupEnfantsNon)
    {
        $this->_enfantsNon = $recupEnfantsNon;
    }




    public function getCasqueAntiBruit(): string
    {
        return $this->_casqueAntiBruit;
    }
    public function setCasqueAntiBruit(string $recupNombreCasquesEnfants)
    {
        $this->_casqueAntiBruit = $recupNombreCasquesEnfants;
    }

    public function getLuge(): string
    {
        return $this->_luge;
    }
    public function setLuge(string $recupNombreLugesEte)
    {
        $this->_luge = $recupNombreLugesEte;
    }

    public function getTarif(): string
    {
        return $this->_tarif;
    }
    public function setTarif(string $recupTarif)
    {
        $this->_tarif = $recupTarif;
    }

    private function CreerNouvelId()
    {
        $Database = new Database();
        $clients = $Database->getAllClients();


        $recupIds = [];

        foreach ($clients as $client) {
            $recupIds[] = $client->getId();
        }


        $i = 1;
        $unique = false;
        while ($unique === false) {
            if (in_array($i, $recupIds)) {
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
