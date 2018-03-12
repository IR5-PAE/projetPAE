<?php

class C_Demande extends C_ControleurGenerique {

    /**
     * controleur= utilisateur & action= newDemande
     * Afficher la page demande de contrat
     */
    function newDemande() {
        // initialisation des variables session
        include_once("../modeles/metier/M_Demande.class.php");
        include_once("../modeles/metier/M_Personne.class.php");
        session_start();
        $demande = new M_Demande(null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        $salarie = new M_Personne(null, null, null, null, null, null, null, null, null, null, null, null);
        $_SESSION['demande'] = $demande;
        $_SESSION['salarie'] = $salarie;
        // les fichiers
        $this->vue = new V_Vue("../vues/templates/template.inc.php");
        $this->vue->ecrireDonnee('centre', "../vues/includes/utilisateur/centreFormulaireNewDemande.inc.php");
        // les données
        // Mémoriser la liste des établissements
        $daoEtablissement = new M_DaoEtablissement();
        $daoEtablissement->connecter();
        $this->vue->ecrireDonnee('lesEtablissements', $daoEtablissement->getAll());
        $daoEtablissement->deconnecter();
        $this->vue->ecrireDonnee('titreVue', "Demande");
        $this->vue->ecrireDonnee('etape', "newDemande");
        $this->vue->afficher();
    }

    /**
     * controleur= utilisateur & action= modifDemande
     * Afficher la page de modification de contrat
     */
    function modifDemande() {
        //affichage de la vue
            $this->vue = new V_Vue("../vues/templates/template.inc.php");
            $this->vue->ecrireDonnee('centre', "../vues/includes/utilisateur/centreModificationContrat.inc.php");
            // les données
            $this->vue->ecrireDonnee('titreVue', "Modifier une demande");
            $this->vue->ecrireDonnee('message', "Non fonctionnelle");
            $this->vue->afficher();
    }

    /**
     * controleur= utilisateur & action= rechercherDemande
     * Afficher la page de modification de contrat
     */
    function rechercherDemande() {
        //affichage de la vue
            $this->vue = new V_Vue("../vues/templates/template.inc.php");
            $this->vue->ecrireDonnee('centre', "../vues/includes/utilisateur/centreRechercherDemande.inc.php");
            // les données
            $this->vue->ecrireDonnee('titreVue', "Rechercher une demande");
            $this->vue->ecrireDonnee('message', "Non fonctionnelle");
            $this->vue->afficher();
    }

    /**
     * controleur= utilisateur & action= validerDemandeForm
     * valide l'onglet demande et passe à l'onglet salarie
     */
    function validerDemandeForm() {
        // récupération des champs du formulaire demande
        $etablissement = $_POST['listeEtablissements'];
        $numOffreEmploi = $_POST['numOffreEmploi'];

        // récupération de la variable session contenant l'objet demande
        include_once("../modeles/metier/M_Demande.class.php");
        session_start();
        $demande = $_SESSION['demande'];
        $demande->setEtablissement($etablissement);
        $demande->setNumOffreEmploi($numOffreEmploi);

        //affichage de la vue
        $this->vue = new V_Vue("../vues/templates/template.inc.php");
        $this->vue->ecrireDonnee('centre', "../vues/includes/utilisateur/centreFormulaireNewDemande.inc.php");
        $this->vue->ecrireDonnee('titreVue', "Salarié");
        $this->vue->ecrireDonnee('etape', "okDemande");
        $this->vue->ecrireDonnee('demande', $demande);
        $this->vue->afficher();
    }

    /**
     * controleur= utilisateur & action= validerSalarieForm
     * valide l'onglet salarie et passe à l'onglet contrat
     */
    function validerSalarieForm() {
        // récupération des champs du formulaire salarie
        $nomPersonne = $_POST['nom'];
        $nomJeuneFillePersonne = $_POST['nomJeuneFille'];
        $prenomPersonne = $_POST['prenom'];
        $dateNaissance = $_POST['dateNaissance'];
        $lieuNaissance = $_POST['lieuNaissance'];
        $numSecuSoc = $_POST['numSecu'];
        $nationalite = $_POST['pays'];
        $adresse = $_POST['adresse'];
        $complementAdresse = $_POST['complementAdresse'];
        $codePostal = $_POST['cp'];
        $ville = $_POST['ville'];

        // récupération des variables session demande et salarie
        include_once("../modeles/metier/M_Demande.class.php");
        session_start();
        $demande = $_SESSION['demande'];
        $salarie = $_SESSION['salarie'];
        $salarie->setNom($nomPersonne);
        if ($nomJeuneFillePersonne != "") {
            $salarie->setNomJeuneFille($nomJeuneFillePersonne);
        }
        $salarie->setPrenom($prenomPersonne);
        $salarie->setDateNaissance($dateNaissance);
        $salarie->setLieuNaissance($lieuNaissance);
        $salarie->setNumSecuSoc($numSecuSoc);
        $salarie->setNationalite($nationalite);
        $salarie->setAdresse($adresse);
        if ($complementAdresse != "") {
            $salarie->setComplementAdresse($complementAdresse);
        }
        $salarie->setCodePostal($codePostal);
        $salarie->setVille($ville);

        //affichage de la vue
        $this->vue = new V_Vue("../vues/templates/template.inc.php");
        $this->vue->ecrireDonnee('centre', "../vues/includes/utilisateur/centreFormulaireNewDemande.inc.php");
        // les données
        // Mémoriser la liste des établissements
        $daoQualification = new M_DaoQualification();
        $daoQualification->connecter();
        $this->vue->ecrireDonnee('lesQualifications', $daoQualification->getAll());
        $daoQualification->deconnecter();
        $this->vue->ecrireDonnee('titreVue', "Contrat");
        $this->vue->ecrireDonnee('etape', "okSalarie");
        $this->vue->ecrireDonnee('demande', $demande);
        $this->vue->afficher();
    }

    /**
     * controleur= utilisateur & action= validerContratForm
     * valide l'onglet contrat et passe à l'onglet temps travail
     */
    function validerContratForm() {
        // récupération de la variable session  demande
        include_once("../modeles/metier/M_Demande.class.php");
        session_start();
        $demande = $_SESSION['demande'];

        // récupération des champs du formulaire contrat
        $dateHeureEmbauche = $_POST['dateHeureEmbauche'];
        $demande->setDateHeureEmbauche($dateHeureEmbauche);
        $emploi = $_POST['emplois'];
        $demande->setEmploi($emploi);
        $qualification = $_POST['qualifications'];
        $demande->setQualification($qualification);
        $lieuTravail = $_POST['lieuTravail'];
        $demande->setLieuTravail($lieuTravail);
        // Concaténation des rémunérations
        $remuneration = null;
        if (isset($_POST['rem'])) {
            foreach ($_POST['rem'] as $rem) {
                $remuneration .= "$rem|";
            }
        }
        $autrePrime = null;
        if ($autrePrime != "") {
            $remuneration .= $_POST['autrePrime'];
        }
        if ($remuneration !== "") {
            $demande->setRemuneration($remuneration);
        }
        // Concaténation des avantages
        $avantage = null;
        if (isset($_POST['avantage'])) {
            foreach ($_POST['avantage'] as $av) {
                $avantage .= "$av|";
            }
        }
        $autreAvantage = null;
        if ($autreAvantage != "") {
            $avantage .= $_POST['autreAvantage'];
        }
        if ($avantage !== "") {
            $demande->setAvantage($avantage);
        }
        // Si la case cdi est cochée
        if (isset($_POST['cdi'])) {
            $typeContrat = $_POST['cdi'];
            $demande->setTypeContrat($typeContrat);
            if (isset($_POST['oui'])) {
                $periodeEssaiCDI = $_POST['oui'];
                $demande->setPeriodeEssaiCDI($periodeEssaiCDI);
            }
            if (isset($_POST['non'])) {
                $periodeEssaiCDI = $_POST['non'];
                $demande->setPeriodeEssaiCDI($periodeEssaiCDI);
            }
        } else {
            if (isset($_POST['cdd'])) {
                $typeContrat = $_POST['cdd'];
                $demande->setTypeContrat($typeContrat);
                $dateDebutCDD = $_POST['dateDebutCDD'];
                $demande->setDateDebutCDD($dateDebutCDD);
                $dateFinCDD = $_POST['dateFinCDD'];
                $demande->setDateFinCDD($dateFinCDD);
                $dateFinDernierCDD = $_POST['dateFinDernierCDD'];
                $demande->setDateFinDernierCDD($dateFinDernierCDD);
                $motifCDD = $_POST['motif'];
                $demande->setMotifCDD($motifCDD);
                $infoComplementaireMotif = null;
                if ($motifCDD === "1") {
                    $infoComplementaireMotif = $_POST['precSurcroit'];
                } elseif ($motifCDD === "2") {
                    $infoComplementaireMotif = $_POST['precTacheOcas'];
                } elseif ($motifCDD === "3") {
                    $infoComplementaireMotif = $_POST['nomSalarieRemplace'] . "|";
                    $infoComplementaireMotif .= $_POST['motifRemplacement'] . "|";
                    if (isset($_POST['remplacementCascade'])) {
                        $infoComplementaireMotif .= $_POST['salarieRemplacementCascade'];
                    } elseif (isset($_POST['remplacementPartiel'])) {
                        if (isset($_POST['remplacementPartielOpt1'])) {
                            $infoComplementaireMotif .= $_POST['remplacementPartielOpt1'];
                        } elseif (isset($_POST['remplacementPartielOpt2'])) {
                            $infoComplementaireMotif .= $_POST['remplacementPartielOpt2'];
                        }
                    }
                }
                $demande->setInfoComplementaireMotif($infoComplementaireMotif);
            }
        }

        //affichage de la vue
        $this->vue = new V_Vue("../vues/templates/template.inc.php");
        $this->vue->ecrireDonnee('centre', "../vues/includes/utilisateur/centreFormulaireNewDemande.inc.php");
        // les données
        $this->vue->ecrireDonnee('titreVue', "Temps Travail");
        $this->vue->ecrireDonnee('etape', "okContrat");
        $this->vue->ecrireDonnee('demande', $demande);
        $this->vue->afficher();
    }

    /**
     * controleur= utilisateur & action= validerTempsTravailForm
     * Valide l'onglet temps travail et enregistre la demande en base
     */
    function validerTempsTravailForm() {
        // récupération des variables session demande et salarie
        include_once("../modeles/metier/M_Demande.class.php");
        include_once("../modeles/metier/M_Personne.class.php");
        session_start();
        $demande = $_SESSION['demande'];
        $salarie = $_SESSION['salarie'];

        // récupération des champs du formulaire temps travail
        $typeTempsTravail = null;
        $volumeTempsPartiel = null;
        $typeRepartitionTempsPartiel = null;
        $repartitionTempsPartiel = null;
        // 
        // Si la case tempsComplet est cochée
        if (isset($_POST['tempsComplet'])) {
            $typeTempsTravail = $_POST['tempsComplet'];
        } else {
            // Si la case tempsPartiel est cochée
            if (isset($_POST['tempsPartiel'])) {
                $typeTempsTravail = $_POST['tempsPartiel'];
                // Si la case hebdomadaire est cochée
                if (isset($_POST['hebdomadaire'])) {
                    $volumeTempsPartiel = $_POST['hebdomadaire'];
                    // Si la case repartitionEnHeure est cochée
                    if (isset($_POST['repartitionEnHeure'])) {
                        $typeRepartitionTempsPartiel = $_POST['repartitionEnHeure'];
                        for ($index = 1; $index <= 42; $index++) {
                            $repartitionTempsPartiel .= $_POST["cell{$index}"] . "|";
                        }
                    } else {
                        // Si la case volumeJournalier est cochée
                        if (isset($_POST['volumeJournalier'])) {
                            $typeRepartitionTempsPartiel = $_POST['volumeJournalier'];
                            for ($index = 44; $index <= 50; $index++) {
                                $repartitionTempsPartiel .= $_POST["cell{$index}"] . "|";
                            }
                        }
                    }
                } else {
                    // Si la case mensuel est cochée
                    if (isset($_POST['mensuel'])) {
                        $volumeTempsPartiel = $_POST['hebdomadaire'];
                        // Si la case moyenneHebdomadaire est cochée
                        if (isset($_POST['moyenneHebdomadaire'])) {
                            $typeRepartitionTempsPartiel = $_POST['moyenneHebdomadaire'];
                            $repartitionTempsPartiel = $_POST['moyenneNbHeuresHebdomadaires'];
                        }
                        // Si la case moyenneHebdomadaireSur4Semaines est cochée
                        if (isset($_POST['moyenneHebdomadaireSur4Semaines'])) {
                            $typeRepartitionTempsPartiel = $_POST['moyenneHebdomadaireSur4Semaines'];
                            $repartitionTempsPartiel = $_POST['nbHeuresSemaine1'] . "|";
                            $repartitionTempsPartiel .= $_POST['nbHeuresSemaine2'] . "|";
                            $repartitionTempsPartiel .= $_POST['nbHeuresSemaine3'] . "|";
                            $repartitionTempsPartiel .= $_POST['nbHeuresSemaine4'];
                        }
                    } else {
                        // Si la case moyenneSur12Mois est cochée
                        if (isset($_POST['moyenneSur12Mois'])) {
                            $volumeTempsPartiel = $_POST['hebdomadaire'];
                            // Si la case moyenneHebdomadaireSur12Mois est cochée
                            if (isset($_POST['moyenneHebdomadaireSur12Mois'])) {
                                $typeRepartitionTempsPartiel = $_POST['moyenneHebdomadaireSur12Mois'];
                                $repartitionTempsPartiel = $_POST['moyenneNbHeuresHebdomadaires12Mois'];
                            }
                            // Si la case moyenneMensuelleSur12Mois est cochée
                            if (isset($_POST['moyenneMensuelleSur12Mois'])) {
                                $typeRepartitionTempsPartiel = $_POST['moyenneMensuelleSur12Mois'];
                                $repartitionTempsPartiel = $_POST['moyenneNbHeuresMensuelles12Mois'];
                            }
                        }
                    }
                }
            }
            $demande->setTypeTempsTravail($typeTempsTravail);
            $demande->setVolumeTempsPartiel($volumeTempsPartiel);
            $demande->setTypeRepartitionTempsPartiel($typeRepartitionTempsPartiel);
            $demande->setRepartitionTempsPartiel($repartitionTempsPartiel);

            //insertion de la personne dans la base
            $daoPersonne = new M_DaoPersonne();
            $daoPersonne->connecter();
            $daoPersonne->insert($salarie);
            $salarieEnr = $daoPersonne->getOneByNumSecSoc($salarie->getNumSecuSoc());
            $daoPersonne->deconnecter();

            //insertion de la demande dans la base
            $daoDemande = new M_DaoDemande();
            $daoDemande->connecter();
//            $demande->setPersonne($salarieEnr); // PROVOQUE ERREUR CONTRAINTE SQL POUR L'IDPERSONNE
//            $daoDemande->insert($demande);

            $demandeVersBDD = new M_Demande(
                    null, $demande->getEtablissement(), $demande->getNumOffreEmploi(), $demande->getDateHeureEmbauche(), $demande->getEmploi(), $demande->getQualification(), $demande->getLieuTravail(), $demande->getRemuneration(), $demande->getAvantage(), $demande->getTypeContrat(), $demande->getPeriodeEssaiCDI(), $demande->getDateDebutCDD(), $demande->getDateFinCDD(), $demande->getDateFinDernierCDD(), $demande->getMotifCDD(), $demande->getInfoComplementaireMotif(), $demande->getTypeTempsTravail(), $demande->getVolumeTempsPartiel(), $demande->getTypeRepartitionTempsPartiel(), $demande->getRepartitionTempsPartiel(), $salarieEnr);
            $daoDemande->insert($demandeVersBDD);
            $daoDemande->deconnecter();

            //affichage de la vue
            $this->vue = new V_Vue("../vues/templates/template.inc.php");
            $this->vue->ecrireDonnee('centre', "../vues/includes/utilisateur/centreValiderDemande.inc.php");
            // les données
            $this->vue->ecrireDonnee('titreVue', "Demande Enregistrée");
            $this->vue->ecrireDonnee('message', "La demande a été enregistrée");
            $this->vue->ecrireDonnee('demande', $demande);
            $this->vue->afficher();
        }
    }

}
