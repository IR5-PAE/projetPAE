<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class M_Demande {

    private $idDemande;                //int (11) Auto_increment  NOT NULL ,
    private $etablissement;            //Varchar (255) NOT NULL ,
    private $numOffreEmploi;           //Int NOT NULL ,
    private $emploi;                   //Varchar (255) NOT NULL ,
    private $qualification;            //Varchar (255) NOT NULL ,
    private $lieuTravail;              //Varchar (255) NOT NULL ,
    private $remuneration;             //Varchar (255) NOT NULL ,
    private $avantage;                 //Varchar (255) NOT NULL ,
    private $typeContrat;              //Varchar (25) NOT NULL ,
    private $dateDebutCDD;             //Date ,
    private $dateFinCDD;               //Date ,
    private $motifCDD;                 //Varchar (255) ,
    private $infoComplementaireMotif;  //Varchar (255) ,
    private $dateDebutCDI;             //Date ,
    private $periodeEssaiCDI;          //Bool ,
    private $dureePeriodeEssaiCDI;     //Varchar (25) ,
    private $dureeAvenant;             //Varchar (25) ,
    private $dateDebutAvenant;         //Date ,
    private $dateFinAvenant;           //Date ,
    private $emploiAvenant;            //Varchar (255) ,
    private $qualificationAvenant;     //Varchar (255) ,
    private $remunerationAvenant;      //Varchar (255) ,
    private $lieuTravailAvenant;       //Varchar (255) NOT NULL ,
    private $avantageAvenant;          //Varchar (255) NOT NULL ,
    private $autreModificationAvenant; //Varchar (255) NOT NULL ,
    private $tempsTravail;             //Varchar (25) NOT NULL ,
    private $volumeTempsPartiel;       //Varchar (25) NOT NULL ,
    private $repartitionTempsPartiel;  //Varchar (50) NOT NULL ,
    private $personne;                 //Int NOT NULL ,
    
            
    function __construct($idDemande, $etablissement, $numOffreEmploi, $emploi, $qualification, $lieuTravail, $remuneration, $avantage, $typeContrat, $dateDebutCDD, $dateFinCDD, $motifCDD, $infoComplementaireMotif, $dateDebutCDI, $periodeEssaiCDI, $dureePeriodeEssaiCDI, $dureeAvenant, $dateDebutAvenant, $dateFinAvenant, $emploiAvenant, $qualificationAvenant, $remunerationAvenant, $lieuTravailAvenant, $avantageAvenant, $autreModificationAvenant, $tempsTravail, $volumeTempsPartiel, $repartitionTempsPartiel, $personne) {
        $this->idDemande = $idDemande;
        $this->etablissement = $etablissement;
        $this->numOffreEmploi = $numOffreEmploi;
        $this->emploi = $emploi;
        $this->qualification = $qualification;
        $this->lieuTravail = $lieuTravail;
        $this->remuneration = $remuneration;
        $this->avantage = $avantage;
        $this->typeContrat = $typeContrat;
        $this->dateDebutCDD = $dateDebutCDD;
        $this->dateFinCDD = $dateFinCDD;
        $this->motifCDD = $motifCDD;
        $this->infoComplementaireMotif = $infoComplementaireMotif;
        $this->dateDebutCDI = $dateDebutCDI;
        $this->periodeEssaiCDI = $periodeEssaiCDI;
        $this->dureePeriodeEssaiCDI = $dureePeriodeEssaiCDI;
        $this->dureeAvenant = $dureeAvenant;
        $this->dateDebutAvenant = $dateDebutAvenant;
        $this->dateFinAvenant = $dateFinAvenant;
        $this->emploiAvenant = $emploiAvenant;
        $this->qualificationAvenant = $qualificationAvenant;
        $this->remunerationAvenant = $remunerationAvenant;
        $this->lieuTravailAvenant = $lieuTravailAvenant;
        $this->avantageAvenant = $avantageAvenant;
        $this->autreModificationAvenant = $autreModificationAvenant;
        $this->tempsTravail = $tempsTravail;
        $this->volumeTempsPartiel = $volumeTempsPartiel;
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

    function getDateDebutCDD() {
        return $this->dateDebutCDD;
    }

    function getDateFinCDD() {
        return $this->dateFinCDD;
    }

    function getMotifCDD() {
        return $this->motifCDD;
    }

    function getInfoComplementaireMotif() {
        return $this->infoComplementaireMotif;
    }

    function getDateDebutCDI() {
        return $this->dateDebutCDI;
    }

    function getPeriodeEssaiCDI() {
        return $this->periodeEssaiCDI;
    }

    function getDureePeriodeEssaiCDI() {
        return $this->dureePeriodeEssaiCDI;
    }

    function getDureeAvenant() {
        return $this->dureeAvenant;
    }

    function getDateDebutAvenant() {
        return $this->dateDebutAvenant;
    }

    function getDateFinAvenant() {
        return $this->dateFinAvenant;
    }

    function getEmploiAvenant() {
        return $this->emploiAvenant;
    }

    function getQualificationAvenant() {
        return $this->qualificationAvenant;
    }

    function getRemunerationAvenant() {
        return $this->remunerationAvenant;
    }

    function getLieuTravailAvenant() {
        return $this->lieuTravailAvenant;
    }

    function getAvantageAvenant() {
        return $this->avantageAvenant;
    }

    function getAutreModificationAvenant() {
        return $this->autreModificationAvenant;
    }

    function getTempsTravail() {
        return $this->tempsTravail;
    }

    function getVolumeTempsPartiel() {
        return $this->volumeTempsPartiel;
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

    function setDateDebutCDD($dateDebutCDD) {
        $this->dateDebutCDD = $dateDebutCDD;
    }

    function setDateFinCDD($dateFinCDD) {
        $this->dateFinCDD = $dateFinCDD;
    }

    function setMotifCDD($motifCDD) {
        $this->motifCDD = $motifCDD;
    }

    function setInfoComplementaireMotif($infoComplementaireMotif) {
        $this->infoComplementaireMotif = $infoComplementaireMotif;
    }

    function setDateDebutCDI($dateDebutCDI) {
        $this->dateDebutCDI = $dateDebutCDI;
    }

    function setPeriodeEssaiCDI($periodeEssaiCDI) {
        $this->periodeEssaiCDI = $periodeEssaiCDI;
    }

    function setDureePeriodeEssaiCDI($dureePeriodeEssaiCDI) {
        $this->dureePeriodeEssaiCDI = $dureePeriodeEssaiCDI;
    }

    function setDureeAvenant($dureeAvenant) {
        $this->dureeAvenant = $dureeAvenant;
    }

    function setDateDebutAvenant($dateDebutAvenant) {
        $this->dateDebutAvenant = $dateDebutAvenant;
    }

    function setDateFinAvenant($dateFinAvenant) {
        $this->dateFinAvenant = $dateFinAvenant;
    }

    function setEmploiAvenant($emploiAvenant) {
        $this->emploiAvenant = $emploiAvenant;
    }

    function setQualificationAvenant($qualificationAvenant) {
        $this->qualificationAvenant = $qualificationAvenant;
    }

    function setRemunerationAvenant($remunerationAvenant) {
        $this->remunerationAvenant = $remunerationAvenant;
    }

    function setLieuTravailAvenant($lieuTravailAvenant) {
        $this->lieuTravailAvenant = $lieuTravailAvenant;
    }

    function setAvantageAvenant($avantageAvenant) {
        $this->avantageAvenant = $avantageAvenant;
    }

    function setAutreModificationAvenant($autreModificationAvenant) {
        $this->autreModificationAvenant = $autreModificationAvenant;
    }

    function setTempsTravail($tempsTravail) {
        $this->tempsTravail = $tempsTravail;
    }

    function setVolumeTempsPartiel($volumeTempsPartiel) {
        $this->volumeTempsPartiel = $volumeTempsPartiel;
    }

    function setRepartitionTempsPartiel($repartitionTempsPartiel) {
        $this->repartitionTempsPartiel = $repartitionTempsPartiel;
    }

    function setPersonne($personne) {
        $this->personne = $personne;
    }


}
