<!-- Formulaire contrat -->

<form class="sectionMarge" method="post" action=".?controleur=demande&action=validerContratForm" onsubmit="return validerContrat()">
    <div class="formsDemandeContrat">
        <strong>Renseignement général :</strong>
        <br><hr><br>
        <span class="required">*</span><label for="dateHeureEmbauche">Date et heure d'embauche :</label>
        <input type="datetime-local" name="dateHeureEmbauche" id="dateHeureEmbauche" min="2000-01-01T00:00:00" max="2038-01-19T03:14:07" required/>
        <br><br>
        <span class="required">*</span><label for="emplois">Emploi :</label>
        <select name="emplois" id="emplois" required>
            <option value="">Sélectionner une option</option>
            <?php
            // remplissage du "SELECT" qui contient les emplois
            foreach ($this->lireDonnee('lesEmplois') as $emploi) {
                echo'<option value="' . $emploi->getLibelleEmploi() . '">' . $emploi->getLibelleEmploi() . '</option>';
            }
            ?>
        </select>
        <br><br>
        <span class="required">*</span><label for="qualifications">Qualification :</label>
        <select name="qualifications" id="qualifications" required>
            <option value="">Sélectionner une option</option>
            <?php
            // remplissage du "SELECT" qui contient les qualifications
            foreach ($this->lireDonnee('lesQualifications') as $qualification) {
                echo'<option value="' . $qualification->getLibelleQualification() . '">' . $qualification->getLibelleQualification() . '</option>';
            }
            ?>
        </select>
        <br><br>
        <span class="required">*</span><label for="lieuTravail">Lieu de travail :</label>
        <input type="text" name="lieuTravail" id="lieuTravail" required/>
        <br><br>
        <span class="nonRequired">*</span><label>Rémunération :</label>
        <label class="inherit"><input type="checkbox" class="inherit" name="rem[]" value="1">Logement</label>
        <label class="inherit"><input type="checkbox" class="inherit" name="rem[]" value="2">Véhicule</label>
        <label class="inherit"><input type="checkbox" class="inherit" name="rem[]" value="3">Repas</label>
        <br><br><label style="visibility: hidden">a</label>
        <label class="inherit"><input type="checkbox" class="inherit" name="rem[]" value="4">Prime de caisse</label>
        <label class="inherit"><input type="checkbox" class="inherit" name="rem[]" value="5">Astreinte</label>
        <br><br><label style="visibility: hidden">a</label>
        <label class="inherit" for="autrePrime">Autre prime ou indemnité à préciser</label>
        <input style="width: inherit" type="text" name="autrePrime" id="autrePrime"/>
        <br><br>
        <span class="nonRequired">*</span><label>Autre avantages :</label>
        <label class="inherit"><input type="checkbox" class="inherit" name="avantage[]" value="1">Téléphone portable</label>
        <label class="inherit"><input type="checkbox" class="inherit" name="avantage[]" value="2">Ordinateur portable</label>
        <br><br><label style="visibility: hidden">a</label>
        <label class="inherit" for="autreAvantage">Autre avantages à préciser</label>  
        <input style="width: inherit" type="text" name="autreAvantage" id="autreAvantage"/>
        <br><br>
        <strong>Type de contrat :</strong>
        <br><hr><br>
        <label class="inherit"><input type="radio" class="inherit" name="cdi" value="cdi" onchange="TypeContrat(1)">CDI</label>  
        <label class="inherit"><input type="radio" class="inherit" name="cdd" value="cdd" onchange="TypeContrat(2)">CDD</label>  
        <br><br>
        <div id="divCdi" style="display: none">
            <span class="required">*</span><label>Période d'essai :</label>
            <label class="inherit"><input type="radio" class="inherit" name="oui" value="1" onchange="PeriodeEssai(1)">Oui</label>  
            <label class="inherit"><input type="radio" class="inherit" name="non" value="0" onchange="PeriodeEssai(2)">Non</label>  
        </div>
        <div id="divCdd" style="display: none">
            <span class="required">*</span><label>Date du CDD :</label>
            <label class="inherit">Du : <input type="date" name="dateDebutCDD" min="0001-01-01" max="9999-12-31"></label>
            <br><br><label style="visibility: hidden">a</label>
            <label class="inherit">Au : <input type="date" name="dateFinCDD" min="0001-01-01" max="9999-12-31"></label>
            <br><br>
            <span class="required">*</span><label for="dateFinDernierCDD">Date de fin du dernier CDD :</label>
            <input type="date" name="dateFinDernierCDD" id="dateFinDernierCDD" min="0001-01-01" max="9999-12-31">
            <br><br>
            <span class="required">*</span><label for="motif">Motif du CDD :</label>
            <select id="motif" name="motif" onchange="Motif()">
                <option value="">Sélectionner un motif</option>
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
                <span class="required">*</span><label for="precSurcroit">Préciser la nature du surcroît :</label>
                <input type="text" name="precSurcroit" id="precSurcroit">
            </div>
            <div id="divTacheOccas" style="display: none">
                <span class="required">*</span><label for="precTacheOccas">Préciser la tâche occasionnelle :</label>
                <input type="text" name="precTacheOccas" id="precTacheOccas">
            </div>
            <div id="divRemplacement" style="display: none">
                <span class="required">*</span><label for="nomSalarieRemplace">NOM et prénom du salarié remplacé :</label>
                <input type="text" name="nomSalarieRemplace" id="nomSalarieRemplace"/>
                <br><br>
                <span class="required">*</span><label for="motifRemplacement">Motif du remplacement :</label>
                <input type="text" name="motifRemplacement" id="motifRemplacement"/>
                <br><br>
                <label class="inherit"><input type="radio" class="inherit" name="remplacementCascade" value="remplacementCascade" onchange="Remplacement(1)">Remplacement en cascade</label>
                <label class="inherit"><input type="radio" class="inherit" name="remplacementPartiel" value="remplacementPartiel" onchange="Remplacement(2)">Remplacement partiel</label>
                <br><br>
                <div id="divRemplacementCascade" style="display: none">
                    <span class="required">*</span><label for="salarieRemplacementCascade">Précisez le nom du salarié sous CDI qui remplace le salarié titulaire :</label>
                    <input type="text" name="salarieRemplacementCascade" id="salarieRemplacementCascade"/>
                    <br><br>
                </div>
                <div id="divRemplacementPartiel" style="display: none">
                    <label class="inherit"><input style="margin-left: 40px" type="radio" class="inherit" name="remplacementPartielOpt1" value="remplacementPartielOpt1" onchange="RemplacementPartiel(1)">CDD n'effectue pas toutes les missions du titulaire</label>
                    <br>
                    <label class="inherit"><input style="margin-left: 40px" type="radio" class="inherit" name="remplacementPartielOpt2" value="remplacementPartielOpt2" onchange="RemplacementPartiel(2)">CDD a un temps de travail inférieur à celui du titulaire</label>
                    <br><br>
                </div>
            </div>
        </div>
        <br><br>
        <div id="divBouton">
            <button type="submit">Suivant</button>
        </div>
    </div>
</form>