<?php

/**
 * Description of M_DaoUser
 *
 * @author arichard
 */
class M_DaoDemande extends M_DaoGenerique {

    function __construct() {
        $this->nomTable = "demandecontrat";
        $this->nomClefPrimaire = "idDemande";
    }

    /**
     * Redéfinition de la méthode abstraite de M_DaoGenerique
     * Permet d'instancier un objet d'après les valeurs d'un enregistrement lu dans la base de données
     * @param tableau-associatif $unEnregistrement liste des valeurs des champs d'un enregistrement
     * @return objet :  instance de la classe métier, initialisée d'après les valeurs de l'enregistrement 
     */
    public function enregistrementVersObjet($enreg) {
        // on instancie l'objet Salarié
        $leSalarie = null;
        $daoPersonne = new M_DaoPersonne();
        $daoPersonne->setPdo($this->pdo);
        $leSalarie = $daoPersonne->getOneById($enreg['idPersonne']);

        // on construit l'objet Demande 
        $retour = new M_Demande(
                $enreg['idDemande'],
                $enreg['etablissement'],
                $enreg['numOffreEmploi'],
                $enreg['emploi'],
                $enreg['qualification'],
                $enreg['lieuTravail'],
                $enreg['remuneration'],
                $enreg['avantage'],
                $enreg['typeContrat'],
                $enreg['dateDebutCDD'],
                $enreg['dateFinCDD'],
                $enreg['motifCDD'],
                $enreg['infoComplementaireMotif'],
                $enreg['dateDebutCDI'],
                $enreg['periodeEssaiCDI'],
                $enreg['dureePeriodeEssaiCDI'],
                $enreg['dureeAvenant'],
                $enreg['dateDebutAvenant'],
                $enreg['dateFinAvenant'],
                $enreg['emploiAvenant'],
                $enreg['qualificationAvenant'],
                $enreg['remunerationAvenant'],
                $enreg['lieuTravailAvenant'],
                $enreg['avantageAvenant'],
                $enreg['autreModificationAvenant'],
                $enreg['tempsTravail'],
                $enreg['volumeTempsPartiel'],
                $enreg['repartitionTempsPartiel'],
                $leSalarie
                );
        return $retour;
    }

    /**
     * Prépare une liste de paramètres pour une requête SQL UPDATE ou INSERT
     * @param Object $objetMetier
     * @return array : tableau ordonné de valeurs
     */
    public function objetVersEnregistrement($objetMetier) {
        // construire un tableau des paramètres d'insertion ou de modification
        // l'ordre des valeurs est important : il correspond à celui des paramètres de la requête SQL
        // le rôle sera mis à jour séparément
        if (!is_null($objetMetier->getPersonne())) {
            $idPersonne = $objetMetier->getPersonne()->getIdPersonne();
        } else {
            $idPersonne = 0; // "Autre" (simple visiteur)
        }
        $retour = array(
            ':etablissement' => $objetMetier->getEtablissement(),
            ':numOffreEmploi' => $objetMetier->getNumOffreEmploi(),
            ':emploi' => $objetMetier->getEmploi(),
            ':qualification' => $objetMetier->getQualification(),
            ':lieuTravail' => $objetMetier->getLieuTravail(),
            ':remuneration' => $objetMetier->getRemuneration(),
            ':avantage' => $objetMetier->getAvantage(),
            ':typeContrat' => $objetMetier->getTypeContrat(),
            ':dateDebutCDD' => $objetMetier->getDateDebutCDD(),
            ':dateFinCDD' => $objetMetier->getDateFinCDD(),
            ':motifCDD' => $objetMetier->getMotifCDD(),
            ':infoComplementaireMotif' => $objetMetier->getInfoComplementaireMotif(),
            ':dateDebutCDI' => $objetMetier->getDateDebutCDI(),
            ':periodeEssaiCDI' => $objetMetier->getPeriodeEssaiCDI(),
            ':dureePeriodeEssaiCDI' => $objetMetier->getDureePeriodeEssaiCDI(),
            ':dureeAvenant' => $objetMetier->getDureeAvenant(),
            ':dateDebutAvenant' => $objetMetier->getDateDebutAvenant(),
            ':dateFinAvenant' => $objetMetier->getDateFinAvenant(),
            ':emploiAvenant' => $objetMetier->getEmploiAvenant(),
            ':qualificationAvenant' => $objetMetier->getQualificationAvenant(),
            ':remunerationAvenant' => $objetMetier->getRemunerationAvenant(),
            ':lieuTravailAvenant' => $objetMetier->getLieuTravailAvenant(),
            ':avantageAvenant' => $objetMetier->getAvantageAvenant(),
            ':autreModificationAvenant' => $objetMetier->getAutreModificationAvenant(),
            ':tempsTravail' => $objetMetier->getTempsTravail(),
            ':volumeTempsPartiel' => $objetMetier->getVolumeTempsPartiel(),
            ':repartitionTempsPartiel' => $objetMetier->getRepartitionTempsPartiel(),
            ':idPersonne' => $idPersonne
        );
        return $retour;
    }

    /**
     * Lire tous les enregistrements d'une table
     * @return tableau-associatif d'objets : un tableau d'instances de la classe métier
     */
    function getAll() {
        echo "--- getAll redéfini ---<br/>";
        $retour = null;
        // Requête textuelle
        $sql = "SELECT * FROM $this->nomTable P ";
        $sql .= "LEFT OUTER JOIN personne R ON R.idPersonne = P.idPersonne ";
        try {
            // préparer la requête PDO
            $queryPrepare = $this->pdo->prepare($sql);
            // exécuter la requête PDO
            if ($queryPrepare->execute()) {
                // si la requête réussit :
                // initialiser le tableau d'objets à retourner
                $retour = array();
                // pour chaque enregistrement retourné par la requête
                while ($enregistrement = $queryPrepare->fetch(PDO::FETCH_ASSOC)) {
                    // construir un objet métier correspondant
                    $unObjetMetier = $this->enregistrementVersObjet($enregistrement);
                    // ajouter l'objet au tableau
                    $retour[] = $unObjetMetier;
                }
            }
        } catch (PDOException $e) {
            echo get_class($this) . ' - ' . __METHOD__ . ' : ' . $e->getMessage();
        }
        return $retour;
    }

    /**
     * Lire tous les enregistrements de table par le role insérer en paramètre
     * @return tableau-associatif d'objets : un tableau d'instances de la classe métier
     */
    function getAllByPersonne($idPersonne) {
        $retour = null;
        try {
            // Requête textuelle
            $sql = "SELECT * FROM $this->nomTable P ";
            $sql .= "LEFT OUTER JOIN personne R ON R.idPersonne = P.idPersonne ";
            $sql .= "WHERE P.idPersonne = :idPersonne";
            // préparer la requête PDO
            $queryPrepare = $this->pdo->prepare($sql);
            // exécuter la requête avec les valeurs des paramètres (il n'y en a qu'un ici) dans un tableau
            if ($queryPrepare->execute(array(':idPersonne' => $idPersonne))) {
                // si la requête réussit :
                // extraire l'enregistrement retourné par la requête
                // construire l'objet métier correspondant
                while ($enregistrement = $queryPrepare->fetch(PDO::FETCH_ASSOC)) {
                    // construir un objet métier correspondant
                    $unObjetMetier = $this->enregistrementVersObjet($enregistrement);
                    // ajouter l'objet au tableau
                    $retour[] = $unObjetMetier;
                }
            }
        } catch (PDOException $e) {
            echo get_class($this) . ' - ' . __METHOD__ . ' : ' . $e->getMessage();
        }
        return $retour;
    }

    // Lire un enregistrement d'une table par son id mis en paramètre
    function getOneById($id) {
        echo "--- getOneById redéfini ---<br/>";
        $retour = null;
        try {
            // Requête textuelle
            $sql = "SELECT * FROM $this->nomTable P ";
            $sql .= "LEFT OUTER JOIN personne R ON R.idPersonne = P.idPersonne ";
            $sql .= "WHERE $this->nomClefPrimaire = :id";
            // préparer la requête PDO
            $queryPrepare = $this->pdo->prepare($sql);
            // exécuter la requête avec les valeurs des paramètres (il n'y en a qu'un ici) dans un tableau
            if ($queryPrepare->execute(array(':id' => $id))) {
                // si la requête réussit :
                // extraire l'enregistrement retourné par la requête
                $enregistrement = $queryPrepare->fetch(PDO::FETCH_ASSOC);
                // construire l'objet métier correspondant
                $retour = $this->enregistrementVersObjet($enregistrement);
            }
        } catch (PDOException $e) {
            echo get_class($this) . ' - ' . __METHOD__ . ' : ' . $e->getMessage();
        }
        return $retour;
    }

    /**
     * insertion
     * @param type $objetMetier
     * @return boolean Cette fonction retourne TRUE en cas de succès ou FALSE si une erreur survient.
     */
    function insert($objetMetier) {
        $retour = FALSE;
        try {
            // Requête textuelle paramétrée (paramètres nommés)
            $sql = "INSERT INTO $this->nomTable (";
            $sql .=   "etablissement,"
                    . "numOffreEmploi,"
                    . "emploi,"
                    . "qualification,"
                    . "lieuTravail,"
                    . "remuneration,"
                    . "avantage,"
                    . "typeContrat,"
                    . "dateDebutCDD,"
                    . "dateFinCDD,"
                    . "motifCDD,"
                    . "infoComplementaireMotif,"
                    . "dateDebutCDI,"
                    . "periodeEssaiCDI,"
                    . "dureePeriodeEssaiCDI,"
                    . "dureeAvenant,"
                    . "dateDebutAvenant,"
                    . "dateFinAvenant,"
                    . "emploiAvenant,"
                    . "qualificationAvenant,"
                    . "remunerationAvenant,"
                    . "lieuTravailAvenant,"
                    . "avantageAvenant,"
                    . "autreModificationAvenant,"
                    . "tempsTravail,"
                    . "volumeTempsPartiel,"
                    . "repartitionTempsPartiel,"
                    . "idPersonne) ";
            $sql .= "VALUES (";
            $sql .= ":etablissement,"
                    . ":numOffreEmploi,"
                    . ":emploi,"
                    . ":qualification,"
                    . ":lieuTravail,"
                    . ":remuneration,"
                    . ":avantage,"
                    . ":typeContrat,"
                    . ":dateDebutCDD,"
                    . ":dateFinCDD,"
                    . ":motifCDD,"
                    . ":infoComplementaireMotif,"
                    . ":dateDebutCDI,"
                    . ":periodeEssaiCDI,"
                    . ":dureePeriodeEssaiCDI,"
                    . ":dureeAvenant,"
                    . ":dateDebutAvenant,"
                    . ":dateFinAvenant,"
                    . ":emploiAvenant,"
                    . ":qualificationAvenant,"
                    . ":remunerationAvenant,"
                    . ":lieuTravailAvenant,"
                    . ":avantageAvenant,"
                    . ":autreModificationAvenant,"
                    . ":tempsTravail,"
                    . ":volumeTempsPartiel,"
                    . ":repartitionTempsPartiel,"
                    . ":idPersonne)";
            //var_dump($sql);
            // préparer la requête PDO
            $queryPrepare = $this->pdo->prepare($sql);
            // préparer la  liste des paramètres, avec l'identifiant en dernier
            $parametres = $this->objetVersEnregistrement($objetMetier);
            // exécuter la requête avec les valeurs des paramètres dans un tableau
            $retour = $queryPrepare->execute($parametres);
            //debug_query($sql, $parametres);
        } catch (PDOException $e) {
            echo get_class($this) . ' - ' . __METHOD__ . ' : ' . $e->getMessage();
        }
        return $retour;
    }

    function update($idMetier, $objetMetier) {
        $retour = FALSE;
        try {
            // Requête textuelle paramétrée (paramètres nommés)
            $sql = "UPDATE $this->nomTable SET ";
            $sql .= "etablissement = :etablissement, ";
            $sql .= "numOffreEmploi = :numOffreEmploi, ";
            $sql .= "emploi = :emploi, ";
            $sql .= "qualification = :qualification, ";
            $sql .= "lieuTravail = :lieuTravail, ";
            $sql .= "remuneration = :remuneration, ";
            $sql .= "avantage = :avantage, ";
            $sql .= "typeContrat = :typeContrat, ";
            $sql .= "dateDebutCDD = :dateDebutCDD, ";
            $sql .= "dateFinCDD = :dateFinCDD, ";
            $sql .= "motifCDD = :motifCDD, ";
            $sql .= "infoComplementaireMotif = :infoComplementaireMotif, ";
            $sql .= "dateDebutCDI = :dateDebutCDI, ";
            $sql .= "periodeEssaiCDI = :periodeEssaiCDI, ";
            $sql .= "dureePeriodeEssaiCDI = :dureePeriodeEssaiCDI, ";
            $sql .= "dureeAvenant = :dureeAvenant, ";
            $sql .= "dateDebutAvenant = :dateDebutAvenant, ";
            $sql .= "dateFinAvenant = :dateFinAvenant, ";
            $sql .= "emploiAvenant = :emploiAvenant, ";
            $sql .= "qualificationAvenant = :qualificationAvenant, ";
            $sql .= "remunerationAvenant = :remunerationAvenant, ";
            $sql .= "lieuTravailAvenant = :lieuTravailAvenant, ";
            $sql .= "avantageAvenant = :avantageAvenant, ";
            $sql .= "autreModificationAvenant = :autreModificationAvenant, ";
            $sql .= "tempsTravail = :tempsTravail, ";
            $sql .= "volumeTempsPartiel = :volumeTempsPartiel, ";
            $sql .= "repartitionTempsPartiel = :repartitionTempsPartiel, ";
            $sql .= "idPersonne = :idPersonne ";
            $sql .= "WHERE idDemande = :id";
            //var_dump($sql);
            // préparer la requête PDO
            $queryPrepare = $this->pdo->prepare($sql);
            // préparer la  liste des paramètres la valeur de l'identifiant
            //  à prendre en compte est celle qui a été passée en paramètre à la méthode
            $parametres = $this->objetVersEnregistrement($objetMetier);
            $parametres[':id'] = $idMetier;
            // exécuter la requête avec les valeurs des paramètres dans un tableau
            $retour = $queryPrepare->execute($parametres);
            //debug_query($sql, $parametres);
        } catch (PDOException $e) {
            echo get_class($this) . ' - ' . __METHOD__ . ' : ' . $e->getMessage();
        }
        return $retour;
    }

}
