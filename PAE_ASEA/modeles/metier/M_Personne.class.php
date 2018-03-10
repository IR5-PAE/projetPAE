<?php

/**
 * Description of M_Personne
 *
 * @author arichard
 */
class M_Personne {

    private $id; //type : int
    private $nom; //type : String
    private $nomJeuneFille; //type : String
    private $prenom; //type : String
    private $dateNaissance;
    private $lieuNaissance;
    private $numSecuSoc;
    private $nationalite;
    private $adresse;
    private $complementAdresse;
    private $codePostal;
    private $ville;

    function __construct($id, $nom, $nomJeuneFille, $prenom, $dateNaissance, $lieuNaissance, $numSecuSoc, $nationalite, $adresse, $complementAdresse, $codePostal, $ville) {
        $this->id = $id;
        $this->nom = $nom;
        $this->nomJeuneFille = $nomJeuneFille;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->lieuNaissance = $lieuNaissance;
        $this->numSecuSoc = $numSecuSoc;
        $this->nationalite = $nationalite;
        $this->adresse = $adresse;
        $this->complementAdresse = $complementAdresse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
    }
    
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getNomJeuneFille() {
        return $this->nomJeuneFille;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getDateNaissance() {
        return $this->dateNaissance;
    }

    function getLieuNaissance() {
        return $this->lieuNaissance;
    }

    function getNumSecuSoc() {
        return $this->numSecuSoc;
    }

    function getNationalite() {
        return $this->nationalite;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getComplementAdresse() {
        return $this->complementAdresse;
    }

    function getCodePostal() {
        return $this->codePostal;
    }

    function getVille() {
        return $this->ville;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setNomJeuneFille($nomJeuneFille) {
        $this->nomJeuneFille = $nomJeuneFille;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;
    }

    function setLieuNaissance($lieuNaissance) {
        $this->lieuNaissance = $lieuNaissance;
    }

    function setNumSecuSoc($numSecuSoc) {
        $this->numSecuSoc = $numSecuSoc;
    }

    function setNationalite($nationalite) {
        $this->nationalite = $nationalite;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setComplementAdresse($complementAdresse) {
        $this->complementAdresse = $complementAdresse;
    }

    function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
    }

    function setVille($ville) {
        $this->ville = $ville;
    }
} 
    