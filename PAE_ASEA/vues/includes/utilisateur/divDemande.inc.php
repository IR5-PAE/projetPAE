<!-- Formulaire demande -->

<form class="sectionMarge" method="post" action=".?controleur=demande&action=validerDemandeForm" onsubmit="return validerDemande()">
    <div class="formsDemandeContrat">
        <span class="required">*</span><label for="listeEtablissements">Etablissement :</label>
        <select name="listeEtablissements" id="listeEtablissements" required>
            <option value="">Sélectionnez une option</option>
            <?php
            // remplissage du "SELECT" qui contient les établissements
            foreach ($this->lireDonnee('lesEtablissements') as $etablissement) {
                echo'<option value="' . $etablissement->getNomEtablissement() . '">' . $etablissement->getNomEtablissement() . '</option>';
            }
            ?>
        </select>
        <br><br>
        <span class="required">*</span><label for="numOffreEmploi">Offre d'emploi n° :</label>
        <input type="text" id="numOffreEmploi" name="numOffreEmploi" required/>
        <br><br><br>
        <div id="divBouton">
            <button type="submit">Suivant</button>
        </div>
    </div>
</form>