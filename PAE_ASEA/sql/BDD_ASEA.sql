#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Personne
#------------------------------------------------------------

CREATE TABLE Personne(
        idPersonne            int (11) Auto_increment  NOT NULL ,
        nomPersonne           Varchar (255) NOT NULL ,
        nomJeuneFillePersonne Varchar (255) ,
        prenomPersonne        Varchar (255) NOT NULL ,
        dateNaissance         Date NOT NULL ,
        lieuNaissance         Varchar (255) NOT NULL ,
        numSecuSoc            Int NOT NULL ,
        nationalite           Varchar (255) NOT NULL ,
        adresse               Varchar (255) NOT NULL ,
        complementAdresse     Varchar (255) ,
        codePostal            Int NOT NULL ,
        ville                 Varchar (255) NOT NULL ,
        PRIMARY KEY (idPersonne )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: DemandeContrat
#------------------------------------------------------------

CREATE TABLE DemandeContrat(
        idDemande                int (11) Auto_increment  NOT NULL ,
        etablissement            Varchar (255) NOT NULL ,
        numOffreEmploi           Int NOT NULL ,
        emploi                   Varchar (255) NOT NULL ,
        qualification            Varchar (255) NOT NULL ,
        lieuTravail              Varchar (255) NOT NULL ,
        remuneration             Varchar (255) NOT NULL ,
        avantage                 Varchar (255) NOT NULL ,
        typeContrat              Varchar (25) NOT NULL ,
        dateDebutCDD             Date ,
        dateFinCDD               Date ,
        motifCDD                 Varchar (255) ,
        infoComplementaireMotif  Varchar (255) ,
        dateDebutCDI             Date ,
        periodeEssaiCDI          Bool ,
        dureePeriodeEssaiCDI     Varchar (25) ,
        dureeAvenant             Varchar (25) ,
        dateDebutAvenant         Date ,
        dateFinAvenant           Date ,
        emploiAvenant            Varchar (255) ,
        qualificationAvenant     Varchar (255) ,
        remunerationAvenant      Varchar (255) ,
        lieuTravailAvenant       Varchar (255) NOT NULL ,
        avantageAvenant          Varchar (255) NOT NULL ,
        autreModificationAvenant Varchar (255) NOT NULL ,
        tempsTravail             Varchar (25) NOT NULL ,
        volumeTempsPartiel       Varchar (25) NOT NULL ,
        repartitionTempsPartiel  Varchar (50) NOT NULL ,
        idPersonne               Int NOT NULL ,
        PRIMARY KEY (idDemande )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Etablissement
#------------------------------------------------------------

CREATE TABLE Etablissement(
        idEtablissement  int (11) Auto_increment  NOT NULL ,
        nomEtablissement Varchar (25) NOT NULL ,
        PRIMARY KEY (idEtablissement )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Qualification
#------------------------------------------------------------

CREATE TABLE Qualification(
        idQualification      int (11) Auto_increment  NOT NULL ,
        libelleQualification Varchar (255) NOT NULL ,
        PRIMARY KEY (idQualification )
)ENGINE=InnoDB;

ALTER TABLE DemandeContrat ADD CONSTRAINT FK_DemandeContrat_idPersonne FOREIGN KEY (idPersonne) REFERENCES Personne(idPersonne);
