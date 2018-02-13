<form class="sectionMarge" method="post" action=".?controleur=connexion&action=authentifier">
    <div class="formsDemandeContrat">
        <strong>Renseignement général :</strong>
        <br><hr><br>
        <label>Date et heure d'embauche :</label>
        <input type="datetime-local" id="dateHeureEmbauche" required/>
        <br><br>
        <label>Etablissement :</label>
        <input type="text" id="etablissement" required/>
        <br><br>
        <label>Qualification :</label>
        <select>
            <option></option>
        </select>
        <br><br>
        <label>Emploi :</label>
        <input type="text" id="emploi" required/>
        <br><br>
        <label>Lieu de travail :</label>
        <input type="text" id="lieuTravail" required/>
        <br><br>
        <label>Rémunération :</label>
        <input type="checkbox" class="inherit" id="logement" value="logement">Logement
        <input type="checkbox" class="inherit" id="vehicule" value="vehicule">Véhicule
        <input type="checkbox" class="inherit" id="repas" value="repas">Repas
        <br><br><label style="color: transparent">a</label>
        <input type="checkbox" class="inherit" id="avenant" value="avenant">Prime de caisse
        <input type="checkbox" class="inherit" id="astreinte" value="astreinte">Astreinte
        <br><br><label style="color: transparent">a</label>
        Autre prime/Indemnité   <input style="width: inherit" type="text" id="autrePrime"/>
        <br><br>
        <label>Autre avantages :</label>
        <input type="checkbox" class="inherit" id="telPortable" value="telPortable">Téléphone portable
        <input type="checkbox" class="inherit" id="OrdiPortable" value="OrdiPortable">Ordinateur portable
        <br><br>
        <strong>Type de contrat :</strong>
        <br><hr><br>
        <input type="radio" class="inherit" id="cdi" value="cdi">CDI
        <input type="radio" class="inherit" id="cdd" value="cdd">CDD
        <input type="radio" class="inherit" id="idAvenant" value="avenant">Avenant
        <br><br>
        <div id="divCdi" style="display: none">
            <label>Période d'essai :</label>
            <input type="radio" class="inherit" id="oui" value="oui">Oui
            <input type="radio" class="inherit" id="non" value="non">Non
            <br><br>
            <label>Durée de la période d'essai :</label>
            <br><br>
            <strong>Temps de travail :</strong>
            <br><hr><br>
            <input type="radio" class="inherit" id="complet" value="complet">Complet
            <input type="radio" class="inherit" id="tempsPartiel" value="tempsPartiel">Temps partiel
        </div>
        <div id="divCdd" style="display: none">
            <label>Date du CDD :</label>
            Du : <input type="date" id="dateDebutCDD">
            <br><br><label style="color: transparent">a</label>
            Au : <input type="date" id="dateFinCDD">
            <br><br>
            <label>Date de fin du dernier CDD :</label>
            <input type="date" id="dateFinDernierCDD">
            <br><br>
            <label>Motif du CDD :</label>
            <select>
                <option></option>
            </select>
            <br><br>
            <strong>Temps de travail :</strong>
            <br><hr><br>
            <input type="radio" class="inherit" id="complet" value="complet">Complet
            <input type="radio" class="inherit" id="tempsPartiel" value="tempsPartiel">Temps partiel
        </div>
        <div id="divAvenant" style="display: none"></div>
        <br><br><br>
        <button id="BoutonSuivantContrat" type="submit">Suivant</button>
    </div>
</form>

<script>
    document.querySelector("#cdi").onclick = function() {
        document.querySelector("#cdd").checked = false;
        document.querySelector("#idAvenant").checked = false;
        document.querySelector("#divCdi").style.display = "block";
        document.querySelector("#divCdd").style.display = "none";
        document.querySelector("#divAvenant").style.display = "none";
    };    
    document.querySelector("#cdd").onclick = function() {
        document.querySelector("#cdi").checked = false;
        document.querySelector("#idAvenant").checked = false;
        document.querySelector("#divCdi").style.display = "none";
        document.querySelector("#divCdd").style.display = "block";
        document.querySelector("#divAvenant").style.display = "none";
    };  
    document.querySelector("#idAvenant").onclick = function() {
        document.querySelector("#cdi").checked = false;
        document.querySelector("#cdd").checked = false;
        document.querySelector("#divCdi").style.display = "none";
        document.querySelector("#divCdd").style.display = "none";
        document.querySelector("#divAvenant").style.display = "block";
    };  
    
    document.querySelector("#complet").onclick = function() {
        document.querySelector("#tempsPartiel").checked = false;
    };  
    document.querySelector("#tempsPartiel").onclick = function() {
        document.querySelector("#complet").checked = false;
    };  
    
    document.querySelector("#BoutonSuivantContrat").onclick = function() {
        document.querySelector("#divDemande").style.display = "none";
        document.querySelector("#divSalarie").style.display = "none";
        document.querySelector("#divContrat").style.display = "none";
        document.querySelector("#divTempsTravail").style.display = "block";
        document.querySelector("#boutonDemande").className="disabled";
        document.querySelector("#boutonSalarie").className="disabled";
        document.querySelector("#boutonContrat").className="disabled";
        document.querySelector("#boutonTempsTravail").className="";
    };    
</script>