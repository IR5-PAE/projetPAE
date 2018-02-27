<?php

class C_Utilisateur extends C_ControleurGenerique {
    
    //private $demande = new M_Demande;

    /**
     * controleur= utilisateur & action= newDemande
     * Afficher la page demande de contrat
     */
    function newDemande() {
        // les fichiers
        $this->vue = new V_Vue("../vues/templates/template.inc.php");
        $this->vue->ecrireDonnee('centre', "../vues/includes/utilisateur/centreFomulaireNewDemande.inc.php");
        // les données
        $this->vue->ecrireDonnee('titreVue',"demande contrat");
        $this->vue->afficher();
    }
    
    /**
     * controleur= utilisateur & action= validerDemandeForm
     * Afficher la page demande de contrat
     */
    function validerDemandeForm() {
        $etablissement = $_POST['etablissement']; 
        $numOffreEmploi = $_POST['numOffreEmploi']; 
        print($etablissement." et ".$numOffreEmploi); 
        
        //$demande->setEtablissement($etablissement);
        //$demande->setNumOffreEmploi($numOffreEmploi);
        
        $this->vue = new V_Vue("../vues/templates/template.inc.php");
        $this->vue->ecrireDonnee('centre', "../vues/includes/utilisateur/centreFomulaireNewDemande.inc.php");
        // les données
        $this->vue->ecrireDonnee('titreVue',"demande contrat");
        $this->vue->ecrireDonnee('etape',"okDemande");
        //$this->vue->ecrireDonnee('demande', $demande);
        $this->vue->afficher();
    }
    
    /**
     * controleur= utilisateur & action= validerDemandeForm
     * Afficher la page demande de contrat
     */
    function validerSalarieForm() {
        
    }
}
