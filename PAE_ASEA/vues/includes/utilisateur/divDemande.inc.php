<form class="sectionMarge" method="post" action=".?controleur=demande&action=validerDemandeForm">
    <div class="formsDemandeContrat">
        <label class="required">*</label><label>Etablissement :</label>
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
        <label class="required">*</label><label>Offre d'emploi n° :</label>
        <input type="text" id="numOffreEmploi" name="numOffreEmploi" required/>
        <br><br><br>
        <div id="divBouton">
            <button type="submit" onclick="return validerDemande()">Suivant</button>
        </div>
    </div>
</form>