<form class="sectionMarge" method="post" action="">
    <div class="formsDemandeContrat">
        <strong>Renseignement général :</strong>
        <br><hr><br>
        <label>Date et heure d'embauche :</label>
        <input type="datetime-local" id="dateHeureEmbauche"/>
        <br><br>
        <label>Emploi :</label>
        <input type="text" id="etablissement"/>
        <br><br>
        <label>Qualification :</label>
        <select>
            <option></option>
        </select>
        <br><br>
        <label>Lieu de travail :</label>
        <input type="text" id="lieuTravail"/>
        <br><br>
        <label>Rémunération :</label>
        <input type="checkbox" class="inherit" id="logement" value="logement">Logement
        <input type="checkbox" class="inherit" id="vehicule" value="vehicule">Véhicule
        <input type="checkbox" class="inherit" id="repas" value="repas">Repas
        <br><br><label style="color: transparent">a</label>
        <input type="checkbox" class="inherit" id="avenant" value="avenant">Prime de caisse
        <input type="checkbox" class="inherit" id="astreinte" value="astreinte">Astreinte
        <br><br><label style="color: transparent">a</label>
        Autre prime ou indemnité à préciser <input style="width: inherit" type="text" id="autrePrime"/>
        <br><br>
        <label>Autre avantages :</label>
        <input type="checkbox" class="inherit" id="telPortable" value="telPortable">Téléphone portable
        <input type="checkbox" class="inherit" id="OrdiPortable" value="OrdiPortable">Ordinateur portable
        <br><br><label style="color: transparent">a</label>
        Autre avantages à préciser  <input style="width: inherit" type="text" id="autrePrime"/>
        <br><br>
        <strong>Type de contrat :</strong>
        <br><hr><br>
        <input type="radio" class="inherit" id="cdi" value="cdi">CDI
        <input type="radio" class="inherit" id="cdd" value="cdd">CDD
        <br><br>
        <div id="divCdi" style="display: none">
            <label>Période d'essai :</label>
            <input type="radio" class="inherit" id="oui" value="oui">Oui
            <input type="radio" class="inherit" id="non" value="non">Non
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
            <select id="motif" onchange="listLink()">
                <option id="surcroit" value="surcroit">surcroît de travail</option>
                <option id="tacheOcas" value="tacheOcas">tâche ocasionnelle</option>
                <option id="remplacement" value="remplacement">remplacement en attente du recrutement du titulaire</option>
                <option id="cddi" value="cddi">CDDI</option>
                <option id="cae" value="cae">CAE</option>
                <option id="contratApren" value="contratApren">contrat d'apprentissage</option>
                <option id="contratPro" value="contratPro">contrat de professionnalisation</option>
            </select>
            <br><br>
            <div id="divSurcroit">
                <label>Préciser la nature du surcroît :</label>
                <input type="text" id="precSurcroit">
            </div>
            <div id="divTacheOcas" style="display: none">
                <label>Préciser la tâche ocasionnelle :</label>
                <input type="text" id="precTacheOcas">
            </div>
            <div id="divRemplacement" style="display: none">
                jkfdskj
            </div>
        </div>
        <br><br>
        <button id="BoutonSuivantContrat" type="submit">Suivant</button>
    </div>
</form>