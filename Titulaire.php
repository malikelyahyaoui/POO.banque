<?php

class Titulaire{
    
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private string $ville;
    private array $comptes;

    public function __construct(string $nom, string $prenom, string $dateNaissance, string $ville) {

        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this -> dateNaissance = new DateTime($dateNaissance);
        $this -> ville = $ville;
        $this -> comptes = [];

    }

    public function getNom() : string
    {
        return $this->nom;
    }

    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

   
    public function getPrenom() : string
    {
        return $this->prenom;
    }

 
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }


    public function getDateNaissance() : DateTime
    {
        return $this->dateNaissance;
    }
 
    public function setDateNaissance(DateTime $dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getVille() : string
    {
        return $this->ville;
    }

    public function setVille(string $ville)
    {
        $this->ville = $ville;

        return $this;
    }
 
    public function getComptes() : array
    {
        return $this->comptes;
    }
 
    public function setComptes(array $comptes)
    {
        $this->comptes = $comptes;

        return $this;
    }

    public function ajouterCompte(CompteBancaire $compte){
        $this -> comptes[]= $compte;
        }

    public function afficherInformations(): string {
            $age = (new DateTime())->diff($this->dateNaissance)->y;
            $infos = "Informations du titulaire :<br>";
            $infos .= "Nom : {$this->nom}<br>";
            $infos .= "Prénom : {$this->prenom}<br>";
            $infos .= "Date de naissance : {$this->dateNaissance->format('d/m/Y')} (âge : {$age} ans)<br>";
            $infos .= "Ville : {$this->ville}<br>";
            $infos .= "Comptes :<br>";
            foreach ($this->comptes as $compte) {
                $infos .= "- {$compte}<br>";
            }
            return $infos;
        }

 }
