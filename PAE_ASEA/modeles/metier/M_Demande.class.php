<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class M_Demande {

    private $idDemande;                    //int(11) NOT NULL,
    private $etablissement;                //varchar(255) NOT NULL,
    private $numOffreEmploi;               //int(11) NOT NULL,
    private $dateHeureEmbauche;            //timestamp NOT NULL,
    private $emploi;                       //varchar(255) NOT NULL,
    private $qualification;                //varchar(255) NOT NULL,
    private $lieuTravail;                  //varchar(255) NOT NULL,
    private $remuneration;                 //varchar(255) DEFAULT NULL,
    private $avantage;                     //varchar(255) DEFAULT NULL,
    private $typeContrat;                  //varchar(25) NOT NULL,
    private $periodeEssaiCDI;              //tinyint(1) DEFAULT NULL,
    private $dateDebutCDD;                 //date DEFAULT NULL,
    private $dateFinCDD;                   //date DEFAULT NULL,
    private $dateFinDernierCDD;            //date DEFAULT NULL,
    private $motifCDD;                     //varchar(255) DEFAULT NULL,
    private $infoComplementaireMotif;      //varchar(255) DEFAULT NULL,
    private $typeTempsTravail;             //varchar(25) NOT NULL,
    private $volumeTempsPartiel;           //varchar(25) NOT NULL,
    private $typeRepartitionTempsPartiel;  //varchar(50) NOT NULL,
    private $repartitionTempsPartiel;      //varchar(500) NOT NULL,
    private $personne;                   //objet Personne

    function __construct($idDemande, $etablissement, $numOffreEmploi, $dateHeureEmbauche, $emploi, $qualification, $lieuTravail, $remuneration, $avantage, $typeContrat, $periodeEssaiCDI, $dateDebutCDD, $dateFinCDD, $dateFinDernierCDD, $motifCDD, $infoComplementaireMotif, $typeTempsTravail, $volumeTempsPartiel, $typeRepartitionTempsPartiel, $repartitionTempsPartiel, $personne) {
        $this->idDemande = $idDemande;
        $this->etablissement = $etablissement;
        $this->numOffreEmploi = $numOffreEmploi;
        $this->dateHeureEmbauche = $dateHeureEmbauche;
        $this->emploi = $emploi;
        $this->qualification = $qualification;
        $this->lieuTravail = $lieuTravail;
        $this->remuneration = $remuneration;
        $this->avantage = $avantage;
        $this->typeContrat = $typeContrat;
        $this->periodeEssaiCDI = $periodeEssaiCDI;
        $this->dateDebutCDD = $dateDebutCDD;
        $this->dateFinCDD = $dateFinCDD;
        $this->dateFinDernierCDD = $dateFinDernierCDD;
        $this->motifCDD = $motifCDD;
        $this->infoComplementaireMotif = $infoComplementaireMotif;
        $this->typeTempsTravail = $typeTempsTravail;
        $this->volumeTempsPartiel = $volumeTempsPartiel;
        $this->typeRepartitionTempsPartiel = $typeRepartitionTempsPartiel;
        $this->repartitionTempsPartiel = $repartitionTempsPartiel;
        $this->personne = $personne;
    }

    function getIdDemande() {
        return $this->idDemande;
    }

    function getEtablissement() {
        return $this->etablissement;
    }

    function getNumOffreEmploi() {
        return $this->numOffreEmploi;
    }

    function getDateHeureEmbauche() {
        return $this->dateHeureEmbauche;
    }

    function getEmploi() {
        return $this->emploi;
    }

    function getQualification() {
        return $this->qualification;
    }

    function getLieuTravail() {
        return $this->lieuTravail;
    }

    function getRemuneration() {
        return $this->remuneration;
    }

    function getAvantage() {
        return $this->avantage;
    }

    function getTypeContrat() {
        return $this->typeContrat;
    }

    function getPeriodeEssaiCDI() {
        return $this->periodeEssaiCDI;
    }

    function getDateDebutCDD() {
        return $this->dateDebutCDD;
    }

    function getDateFinCDD() {
        return $this->dateFinCDD;
    }

    function getDateFinDernierCDD() {
        return $this->dateFinDernierCDD;
    }

    function getMotifCDD() {
        return $this->motifCDD;
    }

    function getInfoComplementaireMotif() {
        return $this->infoComplementaireMotif;
    }

    function getTypeTempsTravail() {
        return $this->typeTempsTravail;
    }

    function getVolumeTempsPartiel() {
        return $this->volumeTempsPartiel;
    }

    function getTypeRepartitionTempsPartiel() {
        return $this->typeRepartitionTempsPartiel;
    }

    function getRepartitionTempsPartiel() {
        return $this->repartitionTempsPartiel;
    }

    function getPersonne() {
        return $this->personne;
    }

    function setIdDemande($idDemande) {
        $this->idDemande = $idDemande;
    }

    function setEtablissement($etablissement) {
        $this->etablissement = $etablissement;
    }

    function setNumOffreEmploi($numOffreEmploi) {
        $this->numOffreEmploi = $numOffreEmploi;
    }

    function setDateHeureEmbauche($dateHeureEmbauche) {
        $this->dateHeureEmbauche = $dateHeureEmbauche;
    }

    function setEmploi($emploi) {
        $this->emploi = $emploi;
    }

    function setQualification($qualification) {
        $this->qualification = $qualification;
    }

    function setLieuTravail($lieuTravail) {
        $this->lieuTravail = $lieuTravail;
    }

    function setRemuneration($remuneration) {
        $this->remuneration = $remuneration;
    }

    function setAvantage($avantage) {
        $this->avantage = $avantage;
    }

    function setTypeContrat($typeContrat) {
        $this->typeContrat = $typeContrat;
    }

    function setPeriodeEssaiCDI($periodeEssaiCDI) {
        $this->periodeEssaiCDI = $periodeEssaiCDI;
    }

    function setDateDebutCDD($dateDebutCDD) {
        $this->dateDebutCDD = $dateDebutCDD;
    }

    function setDateFinCDD($dateFinCDD) {
        $this->dateFinCDD = $dateFinCDD;
    }

    function setDateFinDernierCDD($dateFinDernierCDD) {
        $this->dateFinDernierCDD = $dateFinDernierCDD;
    }

    function setMotifCDD($motifCDD) {
        $this->motifCDD = $motifCDD;
    }

    function setInfoComplementaireMotif($infoComplementaireMotif) {
        $this->infoComplementaireMotif = $infoComplementaireMotif;
    }

    function setTypeTempsTravail($typeTempsTravail) {
        $this->typeTempsTravail = $typeTempsTravail;
    }

    function setVolumeTempsPartiel($volumeTempsPartiel) {
        $this->volumeTempsPartiel = $volumeTempsPartiel;
    }

    function setTypeRepartitionTempsPartiel($typeRepartitionTempsPartiel) {
        $this->typeRepartitionTempsPartiel = $typeRepartitionTempsPartiel;
    }

    function setRepartitionTempsPartiel($repartitionTempsPartiel) {
        $this->repartitionTempsPartiel = $repartitionTempsPartiel;
    }

    function setPersonne($personne) {
        $this->Personne = $personne;
    }

}
