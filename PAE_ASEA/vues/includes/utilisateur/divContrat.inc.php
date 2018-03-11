<!-- Formulaire contrat -->

<form class="sectionMarge" method="post" action=".?controleur=demande&action=validerContratForm" onsubmit="return validerContrat()">
    <div class="formsDemandeContrat">
        <strong>Renseignement général :</strong>
        <br><hr><br>
        <span class="required">*</span><label>Date et heure d'embauche :</label>
        <input type="datetime-local" name="dateHeureEmbauche" />
        <br><br>
        <span class="required">*</span><label>Emploi :</label>
        <select name="emplois" >
            <option disabled selected value="Sélectionner un emploi">Sélectionner un emploi</option>
            <option value="1">A.M.P.  pour adultes</option>
            <option value="2">Agent administratif principal</option>
            <option value="3">Agent de service intérieur</option>
            <option value="4">Agent d'entretien</option>
            <option value="5">Agent technique</option>
            <option value="6">Agent technique supérieur</option>
            <option value="7">Aide médico-psychologique</option>
            <option value="8">Animateur</option>
            <option value="9">Animateur socio-éducatif</option>
            <option value="10">Assistante sociale spécialisée enfance inadaptée</option>
            <option value="11">Cadre classe 1 niveau 1</option>
            <option value="12">Cadre classe 2 niveau 2</option>
            <option value="13">Cadre classe 2 niveau 3</option>
            <option value="14">Cadre Hors classe - Directeur général</option>
            <option value="15">Cadre technicien de niveau 1</option>
            <option value="16">Psychologue - Cadre technicien de niveau 3</option>
            <option value="17">Candidat Educateur spécialisé</option>
            <option value="18">Conseillère en économie familiale et sociale</option>
            <option value="19">Cuisinier qualifié</option>
            <option value="20">Educateur scolaire</option>
            <option value="21">Educateur scolaire spécialisé</option>
            <option value="22">Educateur spécialisé</option>
            <option value="23">Educateur sportif niveau 4</option>
            <option value="24">Educateur technique</option>
            <option value="25">Educateur technique spécialisé</option>
            <option value="26">Infirmier</option>
            <option value="27">Instituteur</option>
            <option value="28">Maître ou Maîtresse de maison</option>
            <option value="29">Médecin généraliste</option>
            <option value="30">Médecin pédiatre</option>
            <option value="31">Moniteur adjoint d'animation et/ou d'activités</option>
            <option value="32">Moniteur d'atelier de 2eme classe</option>
            <option value="33">Moniteur éducateur</option>
            <option value="34">Monitrice d'enseignement ménager</option>
            <option value="35">Orthophoniste</option>
            <option value="36">Ouvrier Qualifié</option>
            <option value="37">Professeur d'éducation physique et sportive</option>
            <option value="38">Professeur des écoles</option>
            <option value="39">Psychiatre direction</option>
            <option value="40">Psychiatre ou neuro-psychiatre</option>
            <option value="41">Psychomotricien</option>
            <option value="42">Secrétaire médicale</option>
            <option value="43">Surveillant de nuit</option>
            <option value="44">Surveillant de nuit qualifié</option>
            <option value="45">Technicien qualifié</option>
            <option value="46">Technicien supérieur</option>
        </select>
        <br><br>
        <span class="required">*</span><label>Qualification :</label>
        <select name="qualifications" >
            <option disabled selected value="Sélectionner une qualification">Sélectionner une qualification</option>
            <option value="1">A.M.P.  pour adultes</option>
            <option value="2">Agent administratif principal</option>
            <option value="3">Agent de service intérieur</option>
            <option value="4">Agent d'entretien</option>
            <option value="5">Agent technique</option>
            <option value="6">Agent technique supérieur</option>
            <option value="7">Aide médico-psychologique</option>
            <option value="8">Animateur</option>
            <option value="9">Animateur socio-éducatif</option>
            <option value="10">Assistante sociale spécialisée enfance inadaptée</option>
            <option value="11">Cadre classe 1 niveau 1</option>
            <option value="12">Cadre classe 2 niveau 2</option>
            <option value="13">Cadre classe 2 niveau 3</option>
            <option value="14">Cadre Hors classe - Directeur général</option>
            <option value="15">Cadre technicien de niveau 1</option>
            <option value="16">Psychologue - Cadre technicien de niveau 3</option>
            <option value="17">Candidat Educateur spécialisé</option>
            <option value="18">Conseillère en économie familiale et sociale</option>
            <option value="19">Cuisinier qualifié</option>
            <option value="20">Educateur scolaire</option>
            <option value="21">Educateur scolaire spécialisé</option>
            <option value="22">Educateur spécialisé</option>
            <option value="23">Educateur sportif niveau 4</option>
            <option value="24">Educateur technique</option>
            <option value="25">Educateur technique spécialisé</option>
            <option value="26">Infirmier</option>
            <option value="27">Instituteur</option>
            <option value="28">Maître ou Maîtresse de maison</option>
            <option value="29">Médecin généraliste</option>
            <option value="30">Médecin pédiatre</option>
            <option value="31">Moniteur adjoint d'animation et/ou d'activités</option>
            <option value="32">Moniteur d'atelier de 2eme classe</option>
            <option value="33">Moniteur éducateur</option>
            <option value="34">Monitrice d'enseignement ménager</option>
            <option value="35">Orthophoniste</option>
            <option value="36">Ouvrier Qualifié</option>
            <option value="37">Professeur d'éducation physique et sportive</option>
            <option value="38">Professeur des écoles</option>
            <option value="39">Psychiatre direction</option>
            <option value="40">Psychiatre ou neuro-psychiatre</option>
            <option value="41">Psychomotricien</option>
            <option value="42">Secrétaire médicale</option>
            <option value="43">Surveillant de nuit</option>
            <option value="44">Surveillant de nuit qualifié</option>
            <option value="45">Technicien qualifié</option>
            <option value="46">Technicien supérieur</option>
        </select>
        <br><br>
        <span class="required">*</span><label>Lieu de travail :</label>
        <input type="text" name="lieuTravail" />
        <br><br>
        <label class="nonRequired">*</label><label>Rémunération :</label>
        <input type="checkbox" class="inherit" name="rem[]" value="1">Logement
        <input type="checkbox" class="inherit" name="rem[]" value="2">Véhicule
        <input type="checkbox" class="inherit" name="rem[]" value="3">Repas
        <br><br><label style="visibility: hidden">a</label>
        <input type="checkbox" class="inherit" name="rem[]" value="4">Prime de caisse
        <input type="checkbox" class="inherit" name="rem[]" value="5">Astreinte
        <br><br><label style="visibility: hidden">a</label>
        Autre prime ou indemnité à préciser 
        <input style="width: inherit" type="text" name="autrePrime"/>
        <br><br>
        <label class="nonRequired">*</label><label>Autre avantages :</label>
        <input type="checkbox" class="inherit" name="avantage[]" value="1">Téléphone portable
        <input type="checkbox" class="inherit" name="avantage[]" value="2">Ordinateur portable
        <br><br><label style="visibility: hidden">a</label>
        Autre avantages à préciser  
        <input style="width: inherit" type="text" name="autreAvantage"/>
        <br><br>
        <strong>Type de contrat :</strong>
        <br><hr><br>
        <input type="radio" class="inherit" name="cdi" value="cdi" onchange="TypeContrat(1)">CDI
        <input type="radio" class="inherit" name="cdd" value="cdd" onchange="TypeContrat(2)">CDD
        <br><br>
        <div id="divCdi" style="display: none">
            <span class="required">*</span><label>Période d'essai :</label>
            <input type="radio" class="inherit" name="oui" value="oui" onchange="PeriodeEssai(1)">Oui
            <input type="radio" class="inherit" name="non" value="non" onchange="PeriodeEssai(2)">Non
        </div>
        <div id="divCdd" style="display: none">
            <span class="required">*</span><label>Date du CDD :</label>
            Du : <input type="date" name="dateDebutCDD">
            <br><br><label style="visibility: hidden">a</label>
            Au : <input type="date" name="dateFinCDD">
            <br><br>
            <span class="required">*</span><label>Date de fin du dernier CDD :</label>
            <input type="date" name="dateFinDernierCDD">
            <br><br>
            <span class="required">*</span><label>Motif du CDD :</label>
            <select id="motif" name="motif" onchange="Motif()">
                <option disabled selected value="Sélectionner un motif">Sélectionner un motif</option>
                <option value="1">Surcroît de travail</option>
                <option value="2">Tâche occasionnelle</option>
                <option value="3">Remplacement en attente du recrutement du titulaire</option>
                <option value="4">CDDI</option>
                <option value="5">CAE</option>
                <option value="6">Contrat d'apprentissage</option>
                <option value="7">Contrat de professionnalisation</option>
            </select>
            <br><br>
            <div id="divSurcroit" style="display: none">
                <span class="required">*</span><label>Préciser la nature du surcroît :</label>
                <input type="text" name="precSurcroit">
            </div>
            <div id="divTacheOcas" style="display: none">
                <span class="required">*</span><label>Préciser la tâche ocasionnelle :</label>
                <input type="text" name="precTacheOcas">
            </div>
            <div id="divRemplacement" style="display: none">
                <span class="required">*</span><label>NOM et prénom du salarié remplacé :</label>
                <input type="text" name="nomSalarieRemplace"/>
                <br><br>
                <span class="required">*</span><label>Motif du remplacement :</label>
                <input type="text" name="motifRemplacement"/>
                <br><br>
                <input type="radio" class="inherit" name="remplacementCascade" value="remplacementCascade" onchange="Remplacement(1)">Remplacement en cascade
                <br><br>
                <div id="divRemplacementCascade" style="display: none">
                    <span class="required">*</span>Précisez le nom du salarié sous CDI <br> qui remplace le salarié titulaire :
                    <input type="text" name="salarieRemplacementCascade"/>
                    <br><br>
                </div>
                <input type="radio" class="inherit" name="remplacementPartiel" value="remplacementPartiel" onchange="Remplacement(2)">Remplacement partiel
                <div id="divRemplacementPartiel" style="display: none">
                    <br>
                    <input style="margin-left: 40px" type="radio" class="inherit" name="remplacementPartielOpt1" value="remplacementPartielOpt1" onchange="RemplacementPartiel(1)">CDD n'effectue pas toutes les missions du titulaire
                    <br>
                    <input style="margin-left: 40px" type="radio" class="inherit" name="remplacementPartielOpt2" value="remplacementPartielOpt2" onchange="RemplacementPartiel(2)">CDD a un temps de travail inférieur à celui du titulaire
                </div>
            </div>
        </div>
        <br><br>
        <div id="divBouton">
            <button type="submit">Suivant</button>
        </div>
    </div>
</form>