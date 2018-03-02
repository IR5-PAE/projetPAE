<?php

class C_Demande extends C_ControleurGenerique {
    
     /**
     * controleur= utilisateur & action= newDemande
     * Afficher la page demande de contrat
     */
    function newDemande() {
        // les fichiers
        $this->vue = new V_Vue("../vues/templates/template.inc.php");
        $this->vue->ecrireDonnee('centre', "../vues/includes/utilisateur/centreFormulaireNewDemande.inc.php");
        // session temporaire qui contiendra les informations de la demande de contrat
        //MaSession::nouvelle(array('login' => $login, 'role' => $unUser['idRole']));
        // les données
        $this->vue->ecrireDonnee('etape',"newDemande");
        $this->vue->afficher();
    }
    
    /**
     * controleur= utilisateur & action= validerDemandeForm
     * valide l'onglet demande et passe à l'onglet salarie
     */
    function validerDemandeForm() {
        $etablissement = $_POST['listeEtablissements']; 
        $numOffreEmploi = $_POST['numOffreEmploi']; 
        print($etablissement." et ".$numOffreEmploi); 
        
        $demande = new M_Demande(null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null);
        $demande->setEtablissement($etablissement);
        $demande->setNumOffreEmploi($numOffreEmploi);
        
        $this->vue = new V_Vue("../vues/templates/template.inc.php");
        $this->vue->ecrireDonnee('centre', "../vues/includes/utilisateur/centreFormulaireNewDemande.inc.php");
        $this->vue->ecrireDonnee('etape',"okDemande");
        $this->vue->ecrireDonnee('demande', $demande);
        $this->vue->afficher();
    }
    
    /**
     * controleur= utilisateur & action= validerSalarieForm
     * valide l'onglet salarie et passe à l'onglet contrat
     */
    function validerSalarieForm() {
        $nomPersonne = $_POST['nom']; 
        $nomJeuneFillePersonne = $_POST['nomJeuneFille']; 
        $prenomPersonne = $_POST['prenom']; 
        $dateNaissance = $_POST['dateNaissance']; 
        $lieuNaissance = $_POST['lieuNaissance']; 
        $numSecuSoc = $_POST['numSecu']; 
        $nationalite = $_POST['pays']; 
        $adresse = $_POST['adresse']; 
        $complementAdresse = null;
        $codePostal = null;
        $ville = null;
        print($nomPersonne." et ".$nomJeuneFillePersonne); 
        
        $salarie = new M_Personne(null, $nomPersonne, $nomJeuneFillePersonne, $prenomPersonne, $dateNaissance, $lieuNaissance, $numSecuSoc, $nationalite, $adresse, $complementAdresse, $codePostal, $ville);
//        $personne->setNom($nom);
//        $personne->setNomJeuneFille($nomJeuneFille);
//        $personne->setPrenom($prenom);
//        $personne->setDateNaissance($dateNaissance);
//        $personne->setLieuNaissance($lieuNaissance);
//        $personne->setNumSecu($numSecu);
//        $personne->setPays($pays);
//        $personne->setAdresse($adresse);
        
        $this->vue = new V_Vue("../vues/templates/template.inc.php");
        $this->vue->ecrireDonnee('centre', "../vues/includes/utilisateur/centreFormulaireNewDemande.inc.php");
        // les données
        $this->vue->ecrireDonnee('etape',"okSalarie");
        $this->vue->ecrireDonnee('salarie', $salarie);
        $this->vue->afficher();
    }
    
    /**
     * controleur= utilisateur & action= validerContratForm
     * valide l'onglet contrat et passe à l'onglet temps travail
     */
    function validerContratForm() {
        //$etablissement = $_POST['etablissement']; 
        //$numOffreEmploi = $_POST['numOffreEmploi']; 
        //print($etablissement." et ".$numOffreEmploi); 
        
        $demande = $_POST['demande']; 
        //$demande->setEtablissement($etablissement);
        //$demande->setNumOffreEmploi($numOffreEmploi);
        
        $this->vue = new V_Vue("../vues/templates/template.inc.php");
        $this->vue->ecrireDonnee('centre', "../vues/includes/utilisateur/centreFormulaireNewDemande.inc.php");
        // les données
        $this->vue->ecrireDonnee('etape',"okContrat");
        $this->vue->ecrireDonnee('demande', $demande);
        $this->vue->afficher();
    }
    
    /**
     * controleur= utilisateur & action= validerTempsTravailForm
     * Valide l'onglet temps travail et enregistre la demande en base
     */
    function validerTempsTravailForm() {
        //$etablissement = $_POST['etablissement']; 
        //$numOffreEmploi = $_POST['numOffreEmploi']; 
        //print($etablissement." et ".$numOffreEmploi); 
        
        $demande = $_POST['demande']; 
        //$demande->setEtablissement($etablissement);
        //$demande->setNumOffreEmploi($numOffreEmploi);
        
        $this->vue = new V_Vue("../vues/templates/template.inc.php");
        $this->vue->ecrireDonnee('centre', "../vues/includes/utilisateur/centreFormulaireNewDemande.inc.php");
        // les données
        $this->vue->ecrireDonnee('etape',"okTempsTravail");
        $this->vue->ecrireDonnee('demande', $demande);
        $this->vue->afficher();
    }
}
