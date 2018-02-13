<?php

/**
 * Description of M_Personne
 *
 * @author arichard
 */
class M_Personne {

    private $idPersonne; //type : int
    private $nomPersonne; //type : String
    private $nomJeuneFillePersonne; //type : String
    private $prenomPersonne; //type : String
    private $dateNaissance;
    private $lieuNaissance;
    private $numSecuSoc;
    private $nationalite;
    private $adresse;
    private $complementAdresse;
    private $codePostal;
    private $ville;

    function __construct($idPersonne, $nomPersonne, $nomJeuneFillePersonne, $prenomPersonne, $dateNaissance, $lieuNaissance, $numSecuSoc, $nationalite, $adresse, $complementAdresse, $codePostal, $ville) {
        $this->idPersonne = $idPersonne;
        $this->nomPersonne = $nomPersonne;
        $this->nomJeuneFillePersonne = $nomJeuneFillePersonne;
        $this->prenomPersonne = $prenomPersonne;
        $this->dateNaissance = $dateNaissance;
        $this->lieuNaissance = $lieuNaissance;
        $this->numSecuSoc = $numSecuSoc;
        $this->nationalite = $nationalite;
        $this->adresse = $adresse;
        $this->complementAdresse = $complementAdresse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
    }

    function getIdPersonne() {
        return $this->idPersonne;
    }

    function getNomPersonne() {
        return $this->nomPersonne;
    }

    function getNomJeuneFillePersonne() {
        return $this->nomJeuneFillePersonne;
    }

    function getPrenomPersonne() {
        return $this->prenomPersonne;
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

    function setIdPersonne($idPersonne) {
        $this->idPersonne = $idPersonne;
    }

    function setNomPersonne($nomPersonne) {
        $this->nomPersonne = $nomPersonne;
    }

    function setNomJeuneFillePersonne($nomJeuneFillePersonne) {
        $this->nomJeuneFillePersonne = $nomJeuneFillePersonne;
    }

    function setPrenomPersonne($prenomPersonne) {
        $this->prenomPersonne = $prenomPersonne;
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
