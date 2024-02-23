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


    function __construct(string $nom, string $prenom, string $email, int $places, bool $tarifReduit, string $pass1jour, string $choixJour1, string $choixJour2, string $choixJour3, string $choixJour12, string $choixJour23, string $pass2jours, string $pass3jours, string $emplacementVan, string $vanNuit1, string $vanNuit2, string $vanNuit3, string $van3Nuits, string $emplacementTente, string $tenteNuit1, string  $tenteNuit2, string $tenteNuit3, string $tente3Nuits, string $enfantsOui, string $enfantsNon,  int $nombreCasquesEnfants, int $nombreLugesEte, int $tarif, int|string $id = "à créer",)
    {
        $this->setId($id);
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setMail($email);
        $this->setNombreResa($places);
        $this->setTarifReduit($tarifReduit);
        $this->setPass1jour($pass1jour);
        $this->setChoixJour1($choixJour1);
        $this->setChoixJour2($choixJour2);
        $this->setChoixJour3($choixJour3);
        $this->setChoixJour12($choixJour12);
        $this->setChoixJour23($choixJour23);
        $this->setPass2jours($pass2jours);
        $this->setPass3jours($pass3jours);
        $this->setEmplacementTente($emplacementTente);
        $this->setTenteNuit1($tenteNuit1);
        $this->setTenteNuit2($tenteNuit2);
        $this->setTenteNuit3($tenteNuit3);
        $this->setTente3Nuits($tente3Nuits);
        $this->setEmplacementVan($emplacementVan);
        $this->setVanNuit1($vanNuit1);
        $this->setVanNuit2($vanNuit2);
        $this->setVanNuit3($vanNuit3);
        $this->setVan3Nuits($van3Nuits);
        $this->setEnfantOui($enfantsOui);
        $this->setEnfantNon($enfantsNon);
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

    public function getPass1jour(): string
    {
        return $this->_pass1jour;
    }
    public function setPass1jour(string $pass1jour)
    {
        $this->_pass1jour = $pass1jour;
    }

    public function getChoixJour1(): string
    {
        return $this->_choixJour1;
    }
    public function setChoixJour1(string $choixJour1)
    {
        $this->_choixJour1 = $choixJour1;
    }
    public function getChoixJour2(): string
    {
        return $this->_choixJour2;
    }
    public function setChoixJour2(string $choixJour2)
    {
        $this->_choixJour2 = $choixJour2;
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
    public function setChoixJour12(string $choixJour12)
    {
        $this->_choixJour12 = $choixJour12;
    }
    public function getChoixJour23(): string
    {
        return $this->_choixJour23;
    }
    public function setChoixJour23(string $choixJour23)
    {
        $this->_choixJour23 = $choixJour23;
    }
    public function getPass2jours(): string
    {
        return $this->_pass2jours;
    }
    public function setPass2jours(string $pass2jours)
    {
        $this->_pass2jours = $pass2jours;
    }
    public function getPass3jours(): string
    {
        return $this->_pass3jours;
    }
    public function setPass3jours(string $pass3jours)
    {
        $this->_pass3jours = $pass3jours;
    }







    public function getEmplacementTente(): string
    {
        return $this->_emplacementTente;
    }
    public function setEmplacementTente(string $emplacementTente)
    {
        $this->_emplacementTente = $emplacementTente;
    }
    public function getTenteNuit1(): string
    {
        return $this->_tenteNuit1;
    }
    public function setTenteNuit1(string $tenteNuit1)
    {
        $this->_tenteNuit1 = $tenteNuit1;
    }
    public function getTenteNuit2(): string
    {
        return $this->_tenteNuit2;
    }
    public function setTenteNuit2(string $tenteNuit2)
    {
        $this->_tenteNuit2 = $tenteNuit2;
    }
    public function getTenteNuit3(): string
    {
        return $this->_tenteNuit3;
    }
    public function setTenteNuit3(string $tenteNuit3)
    {
        $this->_tenteNuit3 = $tenteNuit3;
    }
    public function getTente3Nuits(): string
    {
        return $this->_tente3Nuits;
    }
    public function setTente3Nuits(string $tente3Nuits)
    {
        $this->_tente3Nuits = $tente3Nuits;
    }






    public function getEmplacementVan(): string
    {
        return $this->_emplacementVan;
    }
    public function setEmplacementVan(string $emplacementVan)
    {
        $this->_emplacementVan = $emplacementVan;
    }

    public function getVanNuit1(): string
    {
        return $this->_vanNuit1;
    }
    public function setVanNuit1(string $vanNuit1)
    {
        $this->_vanNuit1 = $vanNuit1;
    }
    public function getVanNuit2(): string
    {
        return $this->_vanNuit2;
    }
    public function setVanNuit2(string $vanNuit2)
    {
        $this->_vanNuit2 = $vanNuit2;
    }
    public function getVanNuit3(): string
    {
        return $this->_vanNuit3;
    }
    public function setVanNuit3(string $vanNuit3)
    {
        $this->_vanNuit3 = $vanNuit3;
    }
    public function getVan3Nuits(): string
    {
        return $this->_van3Nuits;
    }
    public function setVan3Nuits(string $van3Nuits)
    {
        $this->_van3Nuits = $van3Nuits;
    }







    public function getEnfantOui(): string
    {
        return $this->_enfantsOui;
    }
    public function setEnfantOui(string $enfantsOui)
    {
        $this->_enfantsOui = $enfantsOui;
    }
    public function getEnfantNon(): string
    {
        return $this->_enfantsNon;
    }
    public function setEnfantNon(string $enfantsNon)
    {
        $this->_enfantsNon = $enfantsNon;
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
