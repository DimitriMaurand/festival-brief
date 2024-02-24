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


    function __construct(string $Nom, string $Prenom, string $Email,  int $NombrePlaces, bool $TarifReduit, string $Pass1jour, string $ChoixJour1, string $ChoixJour2, string $ChoixJour3, string $ChoixJour12, string $ChoixJour23, string $Pass2jours, string $Pass3jours, string $EmplacementVan, string $VanNuit1, string $VanNuit2, string $VanNuit3, string $Van3Nuits, string $EmplacementTente, string $TenteNuit1, string  $TenteNuit2, string $TenteNuit3, string $Tente3Nuits, string $EnfantsOui, string $EnfantsNon,  int $NombreCasquesEnfants, int $NombreLugesEte, int $Tarif, int|string $Id = "à créer",)
    {
        $this->setId($Id);
        $this->setNom($Nom);
        $this->setPrenom($Prenom);
        $this->setMail($Email);
        $this->setNombreResa($NombrePlaces);
        $this->setTarifReduit($TarifReduit);
        $this->setPass1jour($Pass1jour);
        $this->setChoixJour1($ChoixJour1);
        $this->setChoixJour2($ChoixJour2);
        $this->setChoixJour3($ChoixJour3);
        $this->setChoixJour12($ChoixJour12);
        $this->setChoixJour23($ChoixJour23);
        $this->setPass2jours($Pass2jours);
        $this->setPass3jours($Pass3jours);
        $this->setEmplacementTente($EmplacementTente);
        $this->setTenteNuit1($TenteNuit1);
        $this->setTenteNuit2($TenteNuit2);
        $this->setTenteNuit3($TenteNuit3);
        $this->setTente3Nuits($Tente3Nuits);
        $this->setEmplacementVan($EmplacementVan);
        $this->setVanNuit1($VanNuit1);
        $this->setVanNuit2($VanNuit2);
        $this->setVanNuit3($VanNuit3);
        $this->setVan3Nuits($Van3Nuits);
        $this->setEnfantOui($EnfantsOui);
        $this->setEnfantNon($EnfantsNon);
        $this->setCasqueAntiBruit($NombreCasquesEnfants);
        $this->setLuge($NombreLugesEte);
        $this->setTarif($Tarif);
    }

    public function getId(): int
    {
        return $this->_id;
    }
    public function setId(int|string $Id)
    {
        if (is_string($Id) && $Id === "à créer") {
            $this->_id = $this->CreerNouvelId();
        } else {
            $this->_id = $Id;
        }
    }
    public function getNom(): string
    {
        return $this->_nom;
    }
    public function setNom(string $Nom)
    {
        $this->_nom = $Nom;
    }
    public function getPrenom(): string
    {
        return $this->_prenom;
    }
    public function setPrenom(string $Prenom)
    {
        $this->_prenom = $Prenom;
    }
    public function getMail(): string
    {
        return $this->_mail;
    }
    public function setMail(string $Email)
    {
        $this->_mail = $Email;
    }
    public function getNombreResa(): int
    {
        return $this->_nombreResa;
    }
    public function setNombreResa(int $NombrePlaces)
    {
        $this->_nombreResa = $NombrePlaces;
    }

    public function getTarifReduit(): bool
    {
        return $this->_tarifReduit;
    }
    public function setTarifReduit(bool $TarifReduit)
    {
        $this->_tarifReduit = $TarifReduit;
    }

    public function getPass1jour(): string
    {
        return $this->_pass1jour;
    }
    public function setPass1jour(string $Pass1jour)
    {
        $this->_pass1jour = $Pass1jour;
    }

    public function getChoixJour1(): string
    {
        return $this->_choixJour1;
    }
    public function setChoixJour1(string $ChoixJour1)
    {
        $this->_choixJour1 = $ChoixJour1;
    }
    public function getChoixJour2(): string
    {
        return $this->_choixJour2;
    }
    public function setChoixJour2(string $ChoixJour2)
    {
        $this->_choixJour2 = $ChoixJour2;
    }
    public function getChoixJour3(): string
    {
        return $this->_choixJour3;
    }
    public function setChoixJour3(string $ChoixJour3)
    {
        $this->_choixJour3 = $ChoixJour3;
    }
    public function getChoixJour12(): string
    {
        return $this->_choixJour12;
    }
    public function setChoixJour12(string $ChoixJour12)
    {
        $this->_choixJour12 = $ChoixJour12;
    }
    public function getChoixJour23(): string
    {
        return $this->_choixJour23;
    }
    public function setChoixJour23(string $ChoixJour23)
    {
        $this->_choixJour23 = $ChoixJour23;
    }
    public function getPass2jours(): string
    {
        return $this->_pass2jours;
    }
    public function setPass2jours(string $Pass2jours)
    {
        $this->_pass2jours = $Pass2jours;
    }
    public function getPass3jours(): string
    {
        return $this->_pass3jours;
    }
    public function setPass3jours(string $Pass3jours)
    {
        $this->_pass3jours = $Pass3jours;
    }







    public function getEmplacementTente(): string
    {
        return $this->_emplacementTente;
    }
    public function setEmplacementTente(string $EmplacementTente)
    {
        $this->_emplacementTente = $EmplacementTente;
    }
    public function getTenteNuit1(): string
    {
        return $this->_tenteNuit1;
    }
    public function setTenteNuit1(string $TenteNuit1)
    {
        $this->_tenteNuit1 = $TenteNuit1;
    }
    public function getTenteNuit2(): string
    {
        return $this->_tenteNuit2;
    }
    public function setTenteNuit2(string $TenteNuit2)
    {
        $this->_tenteNuit2 = $TenteNuit2;
    }
    public function getTenteNuit3(): string
    {
        return $this->_tenteNuit3;
    }
    public function setTenteNuit3(string $TenteNuit3)
    {
        $this->_tenteNuit3 = $TenteNuit3;
    }
    public function getTente3Nuits(): string
    {
        return $this->_tente3Nuits;
    }
    public function setTente3Nuits(string $Tente3Nuits)
    {
        $this->_tente3Nuits = $Tente3Nuits;
    }






    public function getEmplacementVan(): string
    {
        return $this->_emplacementVan;
    }
    public function setEmplacementVan(string $EmplacementVan)
    {
        $this->_emplacementVan = $EmplacementVan;
    }

    public function getVanNuit1(): string
    {
        return $this->_vanNuit1;
    }
    public function setVanNuit1(string $VanNuit1)
    {
        $this->_vanNuit1 = $VanNuit1;
    }
    public function getVanNuit2(): string
    {
        return $this->_vanNuit2;
    }
    public function setVanNuit2(string $VanNuit2)
    {
        $this->_vanNuit2 = $VanNuit2;
    }
    public function getVanNuit3(): string
    {
        return $this->_vanNuit3;
    }
    public function setVanNuit3(string $VanNuit3)
    {
        $this->_vanNuit3 = $VanNuit3;
    }
    public function getVan3Nuits(): string
    {
        return $this->_van3Nuits;
    }
    public function setVan3Nuits(string $Van3Nuits)
    {
        $this->_van3Nuits = $Van3Nuits;
    }







    public function getEnfantOui(): string
    {
        return $this->_enfantsOui;
    }
    public function setEnfantOui(string $EnfantsOui)
    {
        $this->_enfantsOui = $EnfantsOui;
    }
    public function getEnfantNon(): string
    {
        return $this->_enfantsNon;
    }
    public function setEnfantNon(string $EnfantsNon)
    {
        $this->_enfantsNon = $EnfantsNon;
    }




    public function getCasqueAntiBruit(): string
    {
        return $this->_casqueAntiBruit;
    }
    public function setCasqueAntiBruit(string $NombreCasquesEnfants)
    {
        $this->_casqueAntiBruit = $NombreCasquesEnfants;
    }

    public function getLuge(): string
    {
        return $this->_luge;
    }
    public function setLuge(string $NombreLugesEte)
    {
        $this->_luge = $NombreLugesEte;
    }

    public function getTarif(): string
    {
        return $this->_tarif;
    }
    public function setTarif(string $Tarif)
    {
        $this->_tarif = $Tarif;
    }

    private function CreerNouvelId()
    {
        $Database = new Database();
        $clients = $Database->getAllClients();


        $Ids = [];

        foreach ($clients as $client) {
            $Ids[] = $client->getId();
        }


        $i = 1;
        $unique = false;
        while ($unique === false) {
            if (in_array($i, $Ids)) {
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
