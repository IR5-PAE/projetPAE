<?php

/**
 * Description of C_Admin
 * CRUD Personnes
 * @author benjamin sabaron
 */
class C_Admin extends C_ControleurGenerique {

    /**
     * controleur= admin & action= seConnecter
     * Afficher le formulaire d'authentification au centre
     */
    function seConnecter() {
        $this->vue = new V_Vue("../vues/templates/template.inc.php");
        $this->vue->ecrireDonnee("titreVue","Connexion");
        // Centre : formulaire de connexion
        $this->vue->ecrireDonnee('centre',"../vues/includes/connexion/centreSeConnecterFormulaire.inc.php");
        $this->vue->afficher();
    }

}
