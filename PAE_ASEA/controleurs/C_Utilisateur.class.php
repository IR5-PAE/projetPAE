<?php

class C_Utilisateur extends C_ControleurGenerique {

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
        //$this->vue->ecrireDonnee('loginAuthentification',MaSession::get('login'));
        $this->vue->afficher();
    }
    
}
