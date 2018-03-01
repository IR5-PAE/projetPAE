<form class="sectionMarge" method="post" action=".?controleur=demande&action=validerContratForm">
    <div class="formsDemandeContrat">
        <strong>Renseignement général :</strong>
        <br><hr><br>
        <label class="required">*</label><label>Date et heure d'embauche :</label>
        <input type="datetime-local" id="dateHeureEmbauche"/>
        <br><br>
        <label class="required">*</label><label>Emploi :</label>
        <input type="text" id="etablissement"/>
        <br><br>
        <label class="required">*</label><label>Qualification :</label>
        <select>
            <option disabled selected>Sélectionner une qualification</option>
            <option>A.M.P.  pour adultes</option>
            <option>Agent administratif principal</option>
            <option>Agent de service intérieur</option>
            <option>Agent d'entretien</option>
            <option>Agent technique</option>
            <option>Agent technique supérieur</option>
            <option>Aide médico-psychologique</option>
            <option>Animateur</option>
            <option>Animateur socio-éducatif</option>
            <option>Assistante sociale spécialisée enfance inadaptée</option>
            <option>Cadre classe 1 niveau 1</option>
            <option>Cadre classe 2 niveau 2</option>
            <option>Cadre classe 2 niveau 3</option>
            <option>Cadre Hors classe - Directeur général</option>
            <option>Cadre technicien de niveau 1</option>
            <option>Psychologue - Cadre technicien de niveau 3</option>
            <option>Candidat Educateur spécialisé</option>
            <option>Conseillère en économie familiale et sociale</option>
            <option>Cuisinier qualifié</option>
            <option>Educateur scolaire</option>
            <option>Educateur scolaire spécialisé</option>
            <option>Educateur spécialisé</option>
            <option>Educateur sportif niveau 4</option>
            <option>Educateur technique</option>
            <option>Educateur technique spécialisé</option>
            <option>Infirmier</option>
            <option>Instituteur</option>
            <option>Maître ou Maîtresse de maison</option>
            <option>Médecin généraliste</option>
            <option>Médecin pédiatre</option>
            <option>Moniteur adjoint d'animation et/ou d'activités</option>
            <option>Moniteur d'atelier de 2eme classe</option>
            <option>Moniteur éducateur</option>
            <option>Monitrice d'enseignement ménager</option>
            <option>Orthophoniste</option>
            <option>Ouvrier Qualifié</option>
            <option>Professeur d'éducation physique et sportive</option>
            <option>Professeur des écoles</option>
            <option>Psychiatre direction</option>
            <option>Psychiatre ou neuro-psychiatre</option>
            <option>Psychomotricien</option>
            <option>Secrétaire médicale</option>
            <option>Surveillant de nuit</option>
            <option>Surveillant de nuit qualifié</option>
            <option>Technicien qualifié</option>
            <option>Technicien supérieur</option>
        </select>
        <br><br>
        <label class="required">*</label><label>Lieu de travail :</label>
        <input type="text" id="lieuTravail"/>
        <br><br>
        <label class="nonRequired">*</label><label>Rémunération :</label>
        <input type="checkbox" class="inherit" id="logement" value="logement">Logement
        <input type="checkbox" class="inherit" id="vehicule" value="vehicule">Véhicule
        <input type="checkbox" class="inherit" id="repas" value="repas">Repas
        <br><br><label style="color: transparent">a</label>
        <input type="checkbox" class="inherit" id="avenant" value="avenant">Prime de caisse
        <input type="checkbox" class="inherit" id="astreinte" value="astreinte">Astreinte
        <br><br><label style="color: transparent">a</label>
        Autre prime ou indemnité à préciser <input style="width: inherit" type="text" id="autrePrime"/>
        <br><br>
        <label class="nonRequired">*</label><label>Autre avantages :</label>
        <input type="checkbox" class="inherit" id="telPortable" value="telPortable">Téléphone portable
        <input type="checkbox" class="inherit" id="OrdiPortable" value="OrdiPortable">Ordinateur portable
        <br><br><label style="color: transparent">a</label>
        Autre avantages à préciser  <input style="width: inherit" type="text" id="autrePrime"/>
        <br><br>
        <strong>Type de contrat :</strong>
        <br><hr><br>
        <input type="radio" class="inherit" id="cdi" value="cdi" onchange="TypeContrat(1)">CDI
        <input type="radio" class="inherit" id="cdd" value="cdd" onchange="TypeContrat(2)">CDD
        <br><br>
        <div id="divCdi" style="display: none">
            <label class="required">*</label><label>Période d'essai :</label>
            <input type="radio" class="inherit" id="oui" value="oui" onchange="PeriodeEssai(1)">Oui
            <input type="radio" class="inherit" id="non" value="non" onchange="PeriodeEssai(2)">Non
        </div>
        <div id="divCdd" style="display: none">
            <label class="required">*</label><label>Date du CDD :</label>
            Du : <input type="date" id="dateDebutCDD">
            <br><br><label style="color: transparent">a</label>
            Au : <input type="date" id="dateFinCDD">
            <br><br>
            <label class="required">*</label><label>Date de fin du dernier CDD :</label>
            <input type="date" id="dateFinDernierCDD">
            <br><br>
            <label class="required">*</label><label>Motif du CDD :</label>
            <select id="motif" onchange="Motif()">
                <option id="surcroit" value="surcroit">Surcroît de travail</option>
                <option id="tacheOcas" value="tacheOcas">Tâche ocasionnelle</option>
                <option id="remplacement" value="remplacement">Remplacement en attente du recrutement du titulaire</option>
                <option id="cddi" value="cddi">CDDI</option>
                <option id="cae" value="cae">CAE</option>
                <option id="contratApren" value="contratApren">Contrat d'apprentissage</option>
                <option id="contratPro" value="contratPro">Contrat de professionnalisation</option>
            </select>
            <br><br>
            <div id="divSurcroit">
                <label class="required">*</label><label>Préciser la nature du surcroît :</label>
                <input type="text" id="precSurcroit">
            </div>
            <div id="divTacheOcas" style="display: none">
                <label class="required">*</label><label>Préciser la tâche ocasionnelle :</label>
                <input type="text" id="precTacheOcas">
            </div>
            <div id="divRemplacement" style="display: none">
                <label class="required">*</label><label>NOM et prénom du salarié remplacé :</label>
                <input type="text" id="nom" />
                <br><br>
                <label class="required">*</label><label>Motif du remplacement :</label>
                <input type="text" id="motifRemplacement" />
                <br><br>
                <input type="radio" class="inherit" id="remplacementCascade" value="remplacementCascade" onchange="Remplacement(1)">Remplacement en cascade
                <br><br>
                <div id="divRemplacementCascade" style="display: none">
                    <label class="required">*</label>Précisez le nom du salarié sous CDI <br> qui remplace le salarié titulaire :
                    <input type="text" id="salarieRemplacementCascade" />
                    <br><br>
                </div>
                <input type="radio" class="inherit" id="remplacementPartiel" value="remplacementPartiel" onchange="Remplacement(2)">Remplacement partiel
                <div id="divRemplacementPartiel" style="display: none">
                    <br>
                    <input style="margin-left: 40px" type="radio" class="inherit" id="remplacementPartielOpt1" value="remplacementPartielOpt1" onchange="RemplacementPartiel(1)">CDD n'effectue pas toutes les missions du titulaire
                    <br>
                    <input style="margin-left: 40px" type="radio" class="inherit" id="remplacementPartielOpt2" value="remplacementPartielOpt2" onchange="RemplacementPartiel(2)">CDD a un temps de travail inférieur à celui du titulaire
                </div>
            </div>
        </div>
        <br><br>
        <div id="divBoutons">
            <button type="button" onclick="history.go(-1)">Retour</button>
            <button type="submit" onclick="validerContrat()">Suivant</button>
        </div>
    </div>
</form>