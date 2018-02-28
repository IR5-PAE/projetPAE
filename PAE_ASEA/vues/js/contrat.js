/*
 document.getElementById("BoutonSuivantDemande").onclick = function() {
 document.getElementById("divDemande").style.display = "none";
 document.getElementById("divSalarie").style.display = "block";
 document.getElementById("divContrat").style.display = "none";
 document.getElementById("divTempsTravail").style.display = "none";
 document.getElementById("boutonDemande").className="disabled";
 document.getElementById("boutonSalarie").className="";
 document.getElementById("boutonContrat").className="disabled";
 document.getElementById("boutonTempsTravail").className="disabled";
 };    
 */

/*
 document.getElementById("BoutonSuivantSalarie").onclick = function() {
 document.getElementById("divDemande").style.display = "none";
 document.getElementById("divSalarie").style.display = "none";
 document.getElementById("divContrat").style.display = "block";
 document.getElementById("divTempsTravail").style.display = "none";
 document.getElementById("boutonDemande").className="disabled";
 document.getElementById("boutonSalarie").className="disabled";
 document.getElementById("boutonContrat").className="";
 document.getElementById("boutonTempsTravail").className="disabled";
 };   
 */

/*
 document.getElementById("BoutonSuivantContrat").onclick = function() {
 document.getElementById("divDemande").style.display = "none";
 document.getElementById("divSalarie").style.display = "none";
 document.getElementById("divContrat").style.display = "none";
 document.getElementById("divTempsTravail").style.display = "block";
 document.getElementById("boutonDemande").className="disabled";
 document.getElementById("boutonSalarie").className="disabled";
 document.getElementById("boutonContrat").className="disabled";
 document.getElementById("boutonTempsTravail").className="";
 };    
 */

// CONTROLE DE L'AFFICHAGE DANS divContrat.inc.php

// Boutons radios pour le type de contrat
function TypeContrat(nb) {
    if (nb === 1) {
        document.getElementById("cdd").checked = false;
        document.getElementById("divCdi").style.display = "block";
        document.getElementById("divCdd").style.display = "none";
    } else if (nb === 2) {
        document.getElementById("cdi").checked = false;
        document.getElementById("divCdi").style.display = "none";
        document.getElementById("divCdd").style.display = "block";
    }
}

// Boutons radios pour la période d'essai
function PeriodeEssai(nb) {
    if (nb === 1) {
        document.getElementById("non").checked = false;
    } else if (nb === 2) {
        document.getElementById("oui").checked = false;
    }
}

// Action au changement de la sélection de la liste déroulante Motif
function Motif() {
    var optionSelected = document.getElementById("motif").value;
    if (optionSelected === "surcroit") {
        document.getElementById("divSurcroit").style.display = "block";
        document.getElementById("divTacheOcas").style.display = "none";
        document.getElementById("divRemplacement").style.display = "none";
    } else {
        if (optionSelected === "tacheOcas") {
            document.getElementById("divSurcroit").style.display = "none";
            document.getElementById("divTacheOcas").style.display = "block";
            document.getElementById("divRemplacement").style.display = "none";
        } else {
            if (optionSelected === "remplacement") {
                document.getElementById("divSurcroit").style.display = "none";
                document.getElementById("divTacheOcas").style.display = "none";
                document.getElementById("divRemplacement").style.display = "block";
            } else {
                document.getElementById("divSurcroit").style.display = "none";
                document.getElementById("divTacheOcas").style.display = "none";
                document.getElementById("divRemplacement").style.display = "none";
            }
        }
    }
}

//Si il y a remplacement de salarié
function Remplacement(nb) {
    if (nb === 1) {
        document.getElementById("remplacementPartiel").checked = false;
        document.getElementById("divRemplacementCascade").style.display = "block";
        document.getElementById("divRemplacementPartiel").style.display = "none";
    } else if (nb === 2) {
        document.getElementById("remplacementCascade").checked = false;
        document.getElementById("divRemplacementCascade").style.display = "none";
        document.getElementById("divRemplacementPartiel").style.display = "block";
    }
}

//Si il y a remplacement de salarié
function RemplacementPartiel(nb) {
    if (nb === 1) {
        document.getElementById("remplacementPartielOpt2").checked = false;
    } else if (nb === 2) {
        document.getElementById("remplacementPartielOpt1").checked = false;
    }
}

// CONTROLE DE L'AFFICHAGE DANS divTempsTravail.inc.php

// Boutons radios pour le type de temps de travail
function TypeTempsTravail(nb) {
    if (nb === 1) {
        document.getElementById("tempsPartiel").checked = false;
        document.getElementById("divTempsPartiel").style.display = "none";
    } else if (nb === 2) {
        document.getElementById("tempsComplet").checked = false;
        document.getElementById("divTempsPartiel").style.display = "block";
    }
}

// Boutons radios pour le volume
function Volume(nb) {
    if (nb === 1) {
        document.getElementById("mensuel").checked = false;
        document.getElementById("moyenneSur12Mois").checked = false;
        document.getElementById("divHebdomadaire").style.display = "block";
        document.getElementById("divMensuel").style.display = "none";
        document.getElementById("divMoyenne12Mois").style.display = "none";
    } else if (nb === 2) {
        document.getElementById("hebdomadaire").checked = false;
        document.getElementById("moyenneSur12Mois").checked = false;
        document.getElementById("divHebdomadaire").style.display = "none";
        document.getElementById("divMensuel").style.display = "block";
        document.getElementById("divMoyenne12Mois").style.display = "none";
    } else if (nb === 3) {
        document.getElementById("hebdomadaire").checked = false;
        document.getElementById("mensuel").checked = false;
        document.getElementById("divHebdomadaire").style.display = "none";
        document.getElementById("divMensuel").style.display = "none";
        document.getElementById("divMoyenne12Mois").style.display = "block";
    }
}

// Boutons radios pour la répartition dans la div Hebdomadaire
function RepartitionHebdomadaire(nb) {
    if (nb === 1) {
        document.getElementById("volumeJournalier").checked = false;
        document.getElementById("divRepartitionEnHeure").style.display = "block";
        document.getElementById("divVolumeJournalier").style.display = "none";
    } else if (nb === 2) {
        document.getElementById("repartitionEnHeure").checked = false;
        document.getElementById("divRepartitionEnHeure").style.display = "none";
        document.getElementById("divVolumeJournalier").style.display = "block";
    }
}

// Boutons radios pour la répartition dans la div Mensuel
function RepartitionMensuel(nb) {
    if (nb === 1) {
        document.getElementById("moyenneHebdomadaireSur4Semaines").checked = false;
        document.getElementById("divMoyenneHebdomadaire").style.display = "block";
        document.getElementById("divMoyenneHebdomadaireSur4Semaines").style.display = "none";
    } else if (nb === 2) {
        document.getElementById("moyenneHebdomadaire").checked = false;
        document.getElementById("divMoyenneHebdomadaire").style.display = "none";
        document.getElementById("divMoyenneHebdomadaireSur4Semaines").style.display = "block";
    }
}

// Boutons radios pour la répartition dans la div Moyenne sur 12 mois
function RepartitionMoyenne12Mois(nb) {
    if (nb === 1) {
        document.getElementById("moyenneMensuelleSur12Mois").checked = false;
        document.getElementById("divMoyenneHebdomadaireSur12Mois").style.display = "block";
        document.getElementById("divMoyenneMensuelleSur12Mois").style.display = "none";
    } else if (nb === 2) {
        document.getElementById("moyenneHebdomadaireSur12Mois").checked = false;
        document.getElementById("divMoyenneHebdomadaireSur12Mois").style.display = "none";
        document.getElementById("divMoyenneMensuelleSur12Mois").style.display = "block";
    }
}