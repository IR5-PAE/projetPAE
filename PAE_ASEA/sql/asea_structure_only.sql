-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 13 Mars 2018 à 00:56
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `asea`
--
CREATE DATABASE IF NOT EXISTS `asea` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `asea`;

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `idDemande` int(11) NOT NULL,
  `etablissement` varchar(255) NOT NULL,
  `numOffreEmploi` varchar(25) NOT NULL,
  `dateHeureEmbauche` timestamp NOT NULL,
  `emploi` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `lieuTravail` varchar(255) NOT NULL,
  `remuneration` varchar(255) DEFAULT NULL,
  `avantage` varchar(255) DEFAULT NULL,
  `typeContrat` varchar(25) NOT NULL,
  `periodeEssaiCDI` tinyint(1) DEFAULT NULL,
  `dateDebutCDD` date DEFAULT NULL,
  `dateFinCDD` date DEFAULT NULL,
  `dateFinDernierCDD` date DEFAULT NULL,
  `motifCDD` varchar(255) DEFAULT NULL,
  `infoComplementaireMotif` varchar(255) DEFAULT NULL,
  `typeTempsTravail` varchar(25) NOT NULL,
  `volumeTempsPartiel` varchar(25) DEFAULT NULL,
  `typeRepartitionTempsPartiel` varchar(50) DEFAULT NULL,
  `repartitionTempsPartiel` varchar(300) DEFAULT NULL,
  `idPersonne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `emploi`
--

CREATE TABLE `emploi` (
  `idEmploi` int(11) NOT NULL,
  `libelleEmploi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etablissement`
--

CREATE TABLE `etablissement` (
  `idEtablissement` int(11) NOT NULL,
  `nomEtablissement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `idPersonne` int(11) NOT NULL,
  `nomPersonne` varchar(255) NOT NULL,
  `nomJeuneFillePersonne` varchar(255) DEFAULT NULL,
  `prenomPersonne` varchar(255) NOT NULL,
  `dateNaissance` date NOT NULL,
  `lieuNaissance` varchar(255) NOT NULL,
  `numSecuSoc` varchar(15) NOT NULL,
  `nationalite` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `complementAdresse` varchar(255) DEFAULT NULL,
  `codePostal` int(11) NOT NULL,
  `ville` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `qualification`
--

CREATE TABLE `qualification` (
  `idQualification` int(11) NOT NULL,
  `libelleQualification` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`idDemande`),
  ADD KEY `FK_Demande_idPersonne` (`idPersonne`);

--
-- Index pour la table `emploi`
--
ALTER TABLE `emploi`
  ADD PRIMARY KEY (`idEmploi`);

--
-- Index pour la table `etablissement`
--
ALTER TABLE `etablissement`
  ADD PRIMARY KEY (`idEtablissement`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`idPersonne`);

--
-- Index pour la table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`idQualification`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `idDemande` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `emploi`
--
ALTER TABLE `emploi`
  MODIFY `idEmploi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `etablissement`
--
ALTER TABLE `etablissement`
  MODIFY `idEtablissement` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `idPersonne` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `idQualification` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `demande`
--
ALTER TABLE `demande`
  ADD CONSTRAINT `FK_Demande_idPersonne` FOREIGN KEY (`idPersonne`) REFERENCES `personne` (`idPersonne`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
