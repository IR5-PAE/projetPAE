<form class="sectionMarge" method="post" action=".?controleur=utilisateur&action=validerDemandeForm">
    <div class="formsDemandeContrat">
        <label class="required">*</label><label>Etablissement :</label>
        <input type="text" id="etablissement" name="etablissement"/>
        <br><br>
        <label class="required">*</label><label>Offre d'emploi n° :</label>
        <input type="text" id="numOffreEmploi" name="numOffreEmploi"/>
        <br><br><br>
        <div id="divBouton">
            <button type="submit" onclick="return validerDemande()">Suivant</button>
        </div>
    </div>
</form>