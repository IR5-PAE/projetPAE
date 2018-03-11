<!-- Formulaire demande -->
<!--<form class="sectionMarge" method="post" action=".?controleur=demande&action=validerDemandeForm" onsubmit="return validerDemande()">
    <div class="formsDemandeContrat">
        <span class="required">*</span><label>Etablissement :</label>
        <select name="listeEtablissements" required>
            <option value="daphe">DAPHE</option>
            <option value="siege">Siège</option>
            <option value="saemo">SAEMO</option>
            <option value="sie">SIE</option>
            <option value="preventionSpecialise">Prévention Spécialisée</option>
            <option value="cava">CAVA</option>
            <option value="imeLeCoteau">IME Le Coteau</option>
            <option value="itepLeColombier">ITEP Le Colombier</option>
            <option value="sessad">SESSAD</option>
            <option value="cmppEtCamps">Centre Françoise Dolto - CMPP et CAMPS</option>
        </select>
        <br><br>
        <span class="required">*</span><label>Offre d'emploi n° :</label>
        <input type="text" id="numOffreEmploi" name="numOffreEmploi" required/>
        <br><br><br>
        <div id="divBouton">
            <button type="submit">Suivant</button>
        </div>
    </div>
</form>-->

<form class="sectionMarge" method="post" action=".?controleur=demande&action=validerDemandeForm" onsubmit="return validerDemande()">
    <div class="formsDemandeContrat">
        <span class="required">*</span><label>Etablissement :</label>
        <select name="listeEtablissements" required>
            <option value="daphe">DAPHE</option>
            <option value="siege">Siège</option>
            <option value="saemo">SAEMO</option>
            <option value="sie">SIE</option>
            <option value="preventionSpecialise">Prévention Spécialisée</option>
            <option value="cava">CAVA</option>
            <option value="imeLeCoteau">IME Le Coteau</option>
            <option value="itepLeColombier">ITEP Le Colombier</option>
            <option value="sessad">SESSAD</option>
            <option value="cmppEtCamps">Centre Françoise Dolto - CMPP et CAMPS</option>
        </select>
        <br><br>
        <span class="required">*</span><label>Offre d'emploi n° :</label>
        <input type="text" id="numOffreEmploi" name="numOffreEmploi"/>
        <br><br><br>
        <div id="divBouton">
            <button type="submit">Suivant</button>
        </div>
    </div>
</form>