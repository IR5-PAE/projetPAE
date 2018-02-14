<?php

/**
 * Description of M_DaoUser
 *
 * @author arichard
 */
class M_DaoPersonne extends M_DaoGenerique {

    function __construct() {
        $this->nomTable = "personne";
        $this->nomClefPrimaire = "idPersonne";
    }

    /**
     * Redéfinition de la méthode abstraite de M_DaoGenerique
     * Permet d'instancier un objet d'après les valeurs d'un enregistrement lu dans la base de données
     * @param tableau-associatif $unEnregistrement liste des valeurs des champs d'un enregistrement
     * @return objet :  instance de la classe métier, initialisée d'après les valeurs de l'enregistrement 
     */
    public function enregistrementVersObjet($enreg) {
        // on construit l'objet Personne 
        $retour = new M_Personne(
                $enreg['idPersonne'],
                $enreg['nomPersonne'],
                $enreg['nomJeuneFillePersonne'],
                $enreg['prenomPersonne'],
                $enreg['dateNaissance'],
                $enreg['lieuNaissance'],
                $enreg['numSecuSoc'],
                $enreg['nationalite'],
                $enreg['adresse'],
                $enreg['complementAdresse'],
                $enreg['codePostal'],
                $enreg['ville']
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
        $retour = array(
            ':nomPersonne' => $objetMetier->getNomPersonne(),
            ':nomJeuneFillePersonne' => $objetMetier->getNomJeuneFillePersonne(),
            ':prenomPersonne' => $objetMetier->getPrenomPersonne(),
            ':dateNaissance' => $objetMetier->getDateNaissance(),
            ':lieuNaissance' => $objetMetier->getLieuNaissance(),
            ':numSecuSoc' => $objetMetier->getNumSecuSoc(),
            ':nationalite' => $objetMetier->getNationalite(),
            ':adresse' => $objetMetier->getAdresse(),
            ':complementAdresse' => $objetMetier->getComplementAdresse(),
            ':codePostal' => $objetMetier->getCodePostal(),
            ':ville' => $objetMetier->getVille()
        );
        return $retour;
    }

    // Lire un enregistrement d'une table par son id mis en paramètre
    function getOneById($id) {
        $retour = null;
        try {
            // Requête textuelle
            $sql = "SELECT * FROM $this->nomTable P ";
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

    // Lire un enregistrement d'une table par son login mis en paramètre
    function getOneByLogin($valeurLogin) {
        $retour = null;
        try {
            // Requête textuelle
            $sql = "SELECT * FROM $this->nomTable P ";
            $sql .= "WHERE P.LOGIN = ?";
            // préparer la requête PDO
            $queryPrepare = $this->pdo->prepare($sql);
            // exécuter la requête avec les valeurs des paramètres (il n'y en a qu'un ici) dans un tableau
            if ($queryPrepare->execute(array($valeurLogin))) {
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
     * verifierLogin
     * @param string $login
     * @param string $mdp
     * @return boolean 
     */
    function verifierLogin($login, $mdp) {
        $retour = null;
        try {
            $sql = "SELECT * FROM $this->nomTable INNER JOIN role r ON $this->nomTable.idRole=r.idRole WHERE LOGIN = :login AND MDP = :mdp";
            $stmt = $this->pdo->prepare($sql);
            if ($stmt->execute(array(':login' => $login, ':mdp' => sha1($mdp)))) {
                $retour = $stmt->fetch(PDO::FETCH_ASSOC);
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
            $sql .= "nomPersonne, nomJeuneFillePersonne, prenomPersonne, dateNaissance, lieuNaissance, numSecuSoc, nationalite, adresse, complementAdresse, codePostal, ville) ";
            $sql .= "VALUES (";
            $sql .= ":nomPersonne, :nomJeuneFillePersonne, :prenomPersonne, :dateNaissance, :lieuNaissance, :numSecuSoc, :nationalite, :adresse, :complementAdresse, :codePostal, :ville)";
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
            $sql .= "nomPersonne = :nomPersonne, ";
            $sql .= "nomJeuneFillePersonne = :nomJeuneFillePersonne, ";
            $sql .= "prenomPersonne = :prenomPersonne, ";
            $sql .= "dateNaissance = :dateNaissance, ";
            $sql .= "lieuNaissance = :lieuNaissance, ";
            $sql .= "numSecuSoc = :numSecuSoc, ";
            $sql .= "nationalite = :nationalite, ";
            $sql .= "adresse = :adresse, ";
            $sql .= "complementAdresse = :complementAdresse, ";
            $sql .= "codePostal = :codePostal, ";
            $sql .= "ville = :ville ";
            $sql .= "WHERE idPersonne = :idPersonne";
            //var_dump($sql);
            // préparer la requête PDO
            $queryPrepare = $this->pdo->prepare($sql);
            // préparer la  liste des paramètres la valeur de l'identifiant
            //  à prendre en compte est celle qui a été passée en paramètre à la méthode
            $parametres = $this->objetVersEnregistrement($objetMetier);
            $parametres[':idPersonne'] = $idMetier;
            // exécuter la requête avec les valeurs des paramètres dans un tableau
            $retour = $queryPrepare->execute($parametres);
            //debug_query($sql, $parametres);
        } catch (PDOException $e) {
            echo get_class($this) . ' - ' . __METHOD__ . ' : ' . $e->getMessage();
        }
        return $retour;
    }
    
}
