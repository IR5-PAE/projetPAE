// CONTROLE DE L'AFFICHAGE DANS divContrat.inc.php

// Boutons radios pour le type de contrat
function TypeContrat(nb) {
    if (nb === 1) {
        document.getElementsByName("cdd")[0].checked = false;
        document.getElementById("divCdi").style.display = "block";
        document.getElementById("divCdd").style.display = "none";
        document.getElementsByName("dateDebutCDD")[0].removeAttribute("required");
        document.getElementsByName("dateFinCDD")[0].removeAttribute("required");
        document.getElementsByName("dateFinDernierCDD")[0].removeAttribute("required");
        document.getElementsByName("precSurcroit")[0].removeAttribute("required");
    } else if (nb === 2) {
        document.getElementsByName("cdi")[0].checked = false;
        document.getElementById("divCdi").style.display = "none";
        document.getElementById("divCdd").style.display = "block";
        document.getElementsByName("dateDebutCDD")[0].setAttribute("required", "");
        document.getElementsByName("dateFinCDD")[0].setAttribute("required", "");
        document.getElementsByName("dateFinDernierCDD")[0].setAttribute("required", "");
        document.getElementsByName("precSurcroit")[0].setAttribute("required", "");
    }
}

// Boutons radios pour la période d'essai
function PeriodeEssai(nb) {
    if (nb === 1) {
        document.getElementsByName("non")[0].checked = false;
    } else if (nb === 2) {
        document.getElementsByName("oui")[0].checked = false;
    }
}

// Action au changement de la sélection de la liste déroulante Motif
function Motif() {
    var optionSelected = document.getElementsByName("motif")[0].value;
    if (optionSelected === "1") {
        document.getElementById("divSurcroit").style.display = "block";
        document.getElementById("divTacheOcas").style.display = "none";
        document.getElementById("divRemplacement").style.display = "none";
        document.getElementsByName("precSurcroit")[0].setAttribute("required", "");
    } else {
        document.getElementsByName("precSurcroit")[0].removeAttribute("required");
        if (optionSelected === "2") {
            document.getElementById("divSurcroit").style.display = "none";
            document.getElementById("divTacheOcas").style.display = "block";
            document.getElementById("divRemplacement").style.display = "none";
            document.getElementsByName("precTacheOcas")[0].setAttribute("required", "");
        } else {
            document.getElementsByName("precTacheOcas")[0].removeAttribute("required");
            if (optionSelected === "3") {
                document.getElementById("divSurcroit").style.display = "none";
                document.getElementById("divTacheOcas").style.display = "none";
                document.getElementById("divRemplacement").style.display = "block";
                document.getElementsByName("nomSalarieRemplace")[0].setAttribute("required", "");
                document.getElementsByName("motifRemplacement")[0].setAttribute("required", "");
            } else {
                document.getElementsByName("nomSalarieRemplace")[0].removeAttribute("required");
                document.getElementsByName("motifRemplacement")[0].removeAttribute("required");
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
        document.getElementsByName("remplacementPartiel")[0].checked = false;
        document.getElementById("divRemplacementCascade").style.display = "block";
        document.getElementById("divRemplacementPartiel").style.display = "none";
        document.getElementsByName("salarieRemplacementCascade")[0].setAttribute("required", "");
    } else if (nb === 2) {
        document.getElementsByName("salarieRemplacementCascade")[0].removeAttribute("required");
        document.getElementsByName("remplacementCascade")[0].checked = false;
        document.getElementById("divRemplacementCascade").style.display = "none";
        document.getElementById("divRemplacementPartiel").style.display = "block";
    }
}

//Si il y a remplacement de salarié
function RemplacementPartiel(nb) {
    if (nb === 1) {
        document.getElementsByName("remplacementPartielOpt2")[0].checked = false;
    } else if (nb === 2) {
        document.getElementsByName("remplacementPartielOpt1")[0].checked = false;
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