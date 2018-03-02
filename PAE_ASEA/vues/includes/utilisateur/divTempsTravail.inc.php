<!-- Formulaire temps travail -->
<form class="sectionMarge" method="post" action=".?controleur=demande&action=validerTempsTravailForm">
    <div class="formsDemandeContrat">
        <strong>Temps de travail :</strong>
        <br><hr><br>
        <input type="radio" class="inherit" id="tempsComplet" value="tempsComplet" onchange="TypeTempsTravail(1)">Complet
        <input type="radio" class="inherit" id="tempsPartiel" value="tempsPartiel" onchange="TypeTempsTravail(2)">Temps partiel
        <br><br><br>

        <div id="divTempsPartiel" style="display: none">
            <span class="required">*</span><label>Volume :</label>
            <input type="radio" class="inherit" id="hebdomadaire" value="hebdomadaire" onchange="Volume(1)">Hebdomadaire
            <input type="radio" class="inherit" id="mensuel" value="mensuel" onchange="Volume(2)">Mensuel
            <input type="radio" class="inherit" id="moyenneSur12Mois" value="moyenneSur12Mois" onchange="Volume(3)">Moyenne sur 12 mois
            <br><span style="font-style: italic">(maximum 34,99 heures par semaine)</span>

            <br><br>

            <div id="divHebdomadaire" style="display: none">
                <label>Répartition :</label>
                <input type="radio" class="inherit" id="repartitionEnHeure" value="repartitionEnHeure" onchange="RepartitionHebdomadaire(1)">Répartition en heure
                <input type="radio" class="inherit" id="volumeJournalier" value="volumeJournalier" onchange="RepartitionHebdomadaire(2)">En volume journalier

                <br><br>

                <div id="divRepartitionEnHeure" style="display: none">
                    <table class="tabRepartitionEnHeure">
                        <tr>
                            <th class="titreTableau" colspan="7">Semaine</th>
                        </tr>
                        <tr>
                            <td class="titres" rowspan="2">Périodes</td>
                            <td class="titres" colspan="2">Matin</td>
                            <td class="titres" colspan="2">Après-midi</td>
                            <td class="titres" colspan="2">Nuit</td>
                        </tr>
                        <tr>
                            <td class="debutFin">Début</td>
                            <td class="debutFin">Fin</td>
                            <td class="debutFin">Début</td>
                            <td class="debutFin">Fin</td>
                            <td class="debutFin">Début</td>
                            <td class="debutFin">Fin</td>
                        </tr>
                        <tr>
                            <td class="titres">Lundi</td>
                            <td><input type="time" name="cell1" id="cell1" step="300"/></td>
                            <td><input type="time" name="cell2" id="cell2" step="300"/></td>
                            <td><input type="time" name="cell3" id="cell3" step="300"/></td>
                            <td><input type="time" name="cell4" id="cell4" step="300"/></td>
                            <td><input type="time" name="cell5" id="cell5" step="300"/></td>
                            <td><input type="time" name="cell6" id="cell6" step="300"/></td>
                        </tr>
                        <tr>
                            <td class="titres">Mardi</td>
                            <td><input type="time" name="cell7" id="cell7" step="300"/></td>
                            <td><input type="time" name="cell8" id="cell8" step="300"/></td>
                            <td><input type="time" name="cell9" id="cell9" step="300"/></td>
                            <td><input type="time" name="cell10" id="cell10" step="300"/></td>
                            <td><input type="time" name="cell11" id="cell11" step="300"/></td>
                            <td><input type="time" name="cell12" id="cell12" step="300"/></td>
                        </tr>
                        <tr>
                            <td class="titres">Mercredi</td>
                            <td><input type="time" name="cell13" id="cell13" step="300"/></td>
                            <td><input type="time" name="cell14" id="cell14" step="300"/></td>
                            <td><input type="time" name="cell15" id="cell15" step="300"/></td>
                            <td><input type="time" name="cell16" id="cell16" step="300"/></td>
                            <td><input type="time" name="cell17" id="cell17" step="300"/></td>
                            <td><input type="time" name="cell18" id="cell18" step="300"/></td>
                        </tr>
                        <tr>
                            <td class="titres">Jeudi</td>
                            <td><input type="time" name="cell19" id="cell19" step="300"/></td>
                            <td><input type="time" name="cell20" id="cell20" step="300"/></td>
                            <td><input type="time" name="cell21" id="cell21" step="300"/></td>
                            <td><input type="time" name="cell22" id="cell22" step="300"/></td>
                            <td><input type="time" name="cell23" id="cell23" step="300"/></td>
                            <td><input type="time" name="cell24" id="cell24" step="300"/></td>
                        </tr>
                        <tr>
                            <td class="titres">Vendredi</td>
                            <td><input type="time" name="cell25" id="cell25" step="300"/></td>
                            <td><input type="time" name="cell26" id="cell26" step="300"/></td>
                            <td><input type="time" name="cell27" id="cell27" step="300"/></td>
                            <td><input type="time" name="cell28" id="cell28" step="300"/></td>
                            <td><input type="time" name="cell29" id="cell29" step="300"/></td>
                            <td><input type="time" name="cell30" id="cell30" step="300"/></td>
                        </tr>
                        <tr>
                            <td class="titres">Samedi</td>
                            <td><input type="time" name="cell31" id="cell31" step="300"/></td>
                            <td><input type="time" name="cell32" id="cell32" step="300"/></td>
                            <td><input type="time" name="cell33" id="cell33" step="300"/></td>
                            <td><input type="time" name="cell34" id="cell34" step="300"/></td>
                            <td><input type="time" name="cell35" id="cell35" step="300"/></td>
                            <td><input type="time" name="cell36" id="cell36" step="300"/></td>
                        </tr>
                        <tr>
                            <td class="titres">Dimanche</td>
                            <td><input type="time" name="cell37" id="cell37" step="300"/></td>
                            <td><input type="time" name="cell38" id="cell38" step="300"/></td>
                            <td><input type="time" name="cell39" id="cell39" step="300"/></td>
                            <td><input type="time" name="cell40" id="cell40" step="300"/></td>
                            <td><input type="time" name="cell41" id="cell41" step="300"/></td>
                            <td><input type="time" name="cell42" id="cell42" step="300"/></td>
                        </tr>
                        <tr>
                            <td class="titres">TOTAL Semaine</td>
                            <td colspan="6"><input type="time" name="cell43" id="cell43" value="31:40" disabled="true"/></td>
                        </tr>
                    </table>
                </div>

                <div id="divVolumeJournalier" style="display: none">
                    <table class="tabVolumeJournalier">
                        <tr>
                            <th class="titreTableau" colspan="2">Semaine</th>
                        </tr>
                        <tr>
                            <td class="titres">Période</td>
                            <td class="titres">Durée</td>
                        </tr>
                        <tr>
                            <td class="titres">Lundi</td>
                            <td><input type="time" name="cell44" id="cell44" step="300"/></td>
                        </tr>
                        <tr>
                            <td class="titres">Mardi</td>
                            <td><input type="time" name="cell45" id="cell45" step="300"/></td>
                        </tr>
                        <tr>
                            <td class="titres">Mercredi</td>
                            <td><input type="time" name="cell46" id="cell46" step="300"/></td>
                        </tr>
                        <tr>
                            <td class="titres">Jeudi</td>
                            <td><input type="time" name="cell47" id="cell47" step="300"/></td>
                        </tr>
                        <tr>
                            <td class="titres">Vendredi</td>
                            <td><input type="time" name="cell48" id="cell48" step="300"/></td>
                        </tr>
                        <tr>
                            <td class="titres">Samedi</td>
                            <td><input type="time" name="cell49" id="cell49" step="300"/></td>
                        </tr>
                        <tr>
                            <td class="titres">Dimanche</td>
                            <td><input type="time" name="cell50" id="cell50" step="300"/></td>
                        </tr>
                        <tr>
                            <td class="titres">TOTAL</td>
                            <td><input type="time" name="cell51" id="cell51" value="31:40" disabled="true"/></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div id="divMensuel" style="display: none">
                <label>Répartition :</label>
                <br><br>
                <input type="radio" class="inherit" id="moyenneHebdomadaire" value="moyenneHebdomadaire" onchange="RepartitionMensuel(1)">Moyenne Hebdomadaire
                <div id="divMoyenneHebdomadaire" style="display: none">
                    <br><br>
                    <label>Nombre d'heures par semaine en moyenne :</label>
                    <input type="time" name="moyenneNbHeuresHebdomadaires" id="moyenneNbHeuresHebdomadaires" step="300"/>
                </div>
                <br><br>
                <input type="radio" class="inherit" id="moyenneHebdomadaireSur4Semaines" value="moyenneHebdomadaireSur4Semaines" onchange="RepartitionMensuel(2)">Moyenne Hebdomadaire sur 4 Semaines
                <div id="divMoyenneHebdomadaireSur4Semaines" style="display: none">
                    <br><br>
                    <label>Nombre d'heures Semaine 1 :</label>
                    <input type="time" name="nbHeuresSemaine1" id="nbHeuresSemaine1" step="300"/><br><br>
                    <label>Nombre d'heures Semaine 2 :</label>
                    <input type="time" name="nbHeuresSemaine2" id="nbHeuresSemaine2" step="300"/><br><br>
                    <label>Nombre d'heures Semaine 3 :</label>
                    <input type="time" name="nbHeuresSemaine3" id="nbHeuresSemaine3" step="300"/><br><br>
                    <label>Nombre d'heures Semaine 4 :</label>
                    <input type="time" name="nbHeuresSemaine4" id="nbHeuresSemaine4" step="300"/><br><br><br><br>
                    
                    <label><strong>Nombre d'heures Mensuelles en moyenne :</strong></label>
                    <input type="time" name="moyenneNbHeuresMensuelles" id="moyenneNbHeuresMensuelles" step="300" disabled="true"/>
                </div>
            </div>
            
            <div id="divMoyenne12Mois" style="display: none">
                <label>Répartition :</label>
                <br><br>
                <input type="radio" class="inherit" id="moyenneHebdomadaireSur12Mois" value="moyenneHebdomadaireSur12Mois" onchange="RepartitionMoyenne12Mois(1)">Moyenne d'heures par semaine sur la période de modulation
                <div id="divMoyenneHebdomadaireSur12Mois" style="display: none">
                    <br><br>
                    <label>Moyenne d'heures par semaine :</label>
                    <input type="time" name="moyenneNbHeuresHebdomadaires12Mois" id="moyenneNbHeuresHebdomadaires12Mois" step="300"/>
                </div>
                <br><br>
                <input type="radio" class="inherit" id="moyenneMensuelleSur12Mois" value="moyenneMensuelleSur12Mois" onchange="RepartitionMoyenne12Mois(2)">Moyenne d'heures par mois (sur 4 semaines) sur la période de modulation
                <div id="divMoyenneMensuelleSur12Mois" style="display: none">
                    <br><br>
                    <label>Moyenne d'heures par mois (4 semaines) :</label>
                    <input type="time" name="moyenneNbHeuresMensuelles12Mois" id="moyenneNbHeuresMensuelles12Mois" step="300"/>
                </div>
            </div>
        </div>
        <br><br><br>
        <div id="divBoutons">
            <button type="button" onclick="history.go(-1)">Retour</button>
            <button type="submit" onclick="return validerTempsTravail()">Suivant</button>
        </div>
    </div>
</form>