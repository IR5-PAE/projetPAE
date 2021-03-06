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
        document.getElementById("motif").removeAttribute("required");
        document.getElementById("motif").options[0].selected = "Sélectionner un motif";
        document.getElementById("divSurcroit").style.display = "none";
        document.getElementById("divTacheOccas").style.display = "none";
        document.getElementById("divRemplacement").style.display = "none";
        document.getElementsByName("precSurcroit")[0].removeAttribute("required");
        document.getElementsByName("precTacheOccas")[0].removeAttribute("required");
        document.getElementsByName("nomSalarieRemplace")[0].removeAttribute("required");
        document.getElementsByName("motifRemplacement")[0].removeAttribute("required");
        document.getElementsByName("salarieRemplacementCascade")[0].removeAttribute("required");

    } else if (nb === 2) {
        document.getElementsByName("cdi")[0].checked = false;
        document.getElementById("divCdi").style.display = "none";
        document.getElementById("divCdd").style.display = "block";
        document.getElementById("motif").setAttribute("required", "");
        document.getElementsByName("dateDebutCDD")[0].setAttribute("required", "");
        document.getElementsByName("dateFinCDD")[0].setAttribute("required", "");
        document.getElementsByName("dateFinDernierCDD")[0].setAttribute("required", "");
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
        document.getElementById("divTacheOccas").style.display = "none";
        document.getElementById("divRemplacement").style.display = "none";
        document.getElementsByName("precSurcroit")[0].setAttribute("required", "");
        document.getElementsByName("precTacheOccas")[0].removeAttribute("required");
        document.getElementsByName("nomSalarieRemplace")[0].removeAttribute("required");
        document.getElementsByName("motifRemplacement")[0].removeAttribute("required");
        document.getElementsByName("salarieRemplacementCascade")[0].removeAttribute("required");
    } else {
        if (optionSelected === "2") {
            document.getElementById("divSurcroit").style.display = "none";
            document.getElementById("divTacheOccas").style.display = "block";
            document.getElementById("divRemplacement").style.display = "none";
            document.getElementsByName("precSurcroit")[0].removeAttribute("required");
            document.getElementsByName("precTacheOccas")[0].setAttribute("required", "");
            document.getElementsByName("nomSalarieRemplace")[0].removeAttribute("required");
            document.getElementsByName("motifRemplacement")[0].removeAttribute("required");
            document.getElementsByName("salarieRemplacementCascade")[0].removeAttribute("required");
        } else {
            if (optionSelected === "3") {
                document.getElementById("divSurcroit").style.display = "none";
                document.getElementById("divTacheOccas").style.display = "none";
                document.getElementById("divRemplacement").style.display = "block";
                document.getElementsByName("precSurcroit")[0].removeAttribute("required");
                document.getElementsByName("precTacheOccas")[0].removeAttribute("required");
                document.getElementsByName("nomSalarieRemplace")[0].setAttribute("required", "");
                document.getElementsByName("motifRemplacement")[0].setAttribute("required", "");
                document.getElementsByName("remplacementCascade")[0].checked = false;
                document.getElementById("divRemplacementCascade").style.display = "none";
                document.getElementsByName("remplacementPartiel")[0].checked = false;
                document.getElementById("divRemplacementPartiel").style.display = "none";
                document.getElementsByName("remplacementPartielOpt1")[0].checked = false;
                document.getElementsByName("remplacementPartielOpt2")[0].checked = false;
            } else {
                document.getElementById("divSurcroit").style.display = "none";
                document.getElementById("divTacheOccas").style.display = "none";
                document.getElementById("divRemplacement").style.display = "none";
                document.getElementsByName("precSurcroit")[0].removeAttribute("required");
                document.getElementsByName("precTacheOccas")[0].removeAttribute("required");
                document.getElementsByName("nomSalarieRemplace")[0].removeAttribute("required");
                document.getElementsByName("motifRemplacement")[0].removeAttribute("required");
                document.getElementsByName("salarieRemplacementCascade")[0].removeAttribute("required");
            }
        }
    }
}

//Le type du remplacement de salarié
function Remplacement(nb) {
    if (nb === 1) {
        document.getElementsByName("remplacementPartiel")[0].checked = false;
        document.getElementById("divRemplacementCascade").style.display = "block";
        document.getElementById("divRemplacementPartiel").style.display = "none";
        document.getElementsByName("salarieRemplacementCascade")[0].setAttribute("required", "");
    } else if (nb === 2) {
        document.getElementsByName("remplacementCascade")[0].checked = false;
        document.getElementById("divRemplacementCascade").style.display = "none";
        document.getElementById("divRemplacementPartiel").style.display = "block";
        document.getElementsByName("salarieRemplacementCascade")[0].removeAttribute("required");
        document.getElementsByName("remplacementPartielOpt1")[0].checked = false;
        document.getElementsByName("remplacementPartielOpt2")[0].checked = false;
    }
}

//Le type de remplacement PARTIEL de salarié
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
        document.getElementsByName("tempsPartiel")[0].checked = false;
        document.getElementById("divTempsPartiel").style.display = "none";
        document.getElementsByName("hebdomadaire")[0].checked = false;
        document.getElementsByName("mensuel")[0].checked = false;
        document.getElementsByName("moyenneSur12Mois")[0].checked = false;
        document.getElementById("divHebdomadaire").style.display = "none";
        document.getElementById("divMensuel").style.display = "none";
        document.getElementById("divMoyenne12Mois").style.display = "none";
        for (var i = 1; i <= 42; i++) {
            document.getElementsByName("cell" + i)[0].removeAttribute("required");
        }
        for (var i = 44; i <= 50; i++) {
            document.getElementsByName("cell" + i)[0].removeAttribute("required");
        }
        document.getElementsByName("moyenneNbHeuresHebdomadaires")[0].removeAttribute("required");
        document.getElementsByName("nbHeuresSemaine1")[0].removeAttribute("required");
        document.getElementsByName("nbHeuresSemaine2")[0].removeAttribute("required");
        document.getElementsByName("nbHeuresSemaine3")[0].removeAttribute("required");
        document.getElementsByName("nbHeuresSemaine4")[0].removeAttribute("required");
        document.getElementsByName("moyenneNbHeuresHebdomadaires12Mois")[0].removeAttribute("required");
        document.getElementsByName("moyenneNbHeuresMensuelles12Mois")[0].removeAttribute("required");
    } else if (nb === 2) {
        document.getElementsByName("tempsComplet")[0].checked = false;
        document.getElementById("divTempsPartiel").style.display = "block";
    }
}

// Boutons radios pour le volume
function Volume(nb) {
    if (nb === 1) {
        document.getElementsByName("mensuel")[0].checked = false;
        document.getElementsByName("moyenneSur12Mois")[0].checked = false;
        document.getElementById("divHebdomadaire").style.display = "block";
        document.getElementById("divMensuel").style.display = "none";
        document.getElementById("divMoyenne12Mois").style.display = "none";
        document.getElementsByName("repartitionEnHeure")[0].checked = false;
        document.getElementsByName("volumeJournalier")[0].checked = false;
        document.getElementById("divRepartitionEnHeure").style.display = "none";
        document.getElementById("divVolumeJournalier").style.display = "none";
        document.getElementsByName("moyenneNbHeuresHebdomadaires")[0].removeAttribute("required");
        document.getElementsByName("nbHeuresSemaine1")[0].removeAttribute("required");
        document.getElementsByName("nbHeuresSemaine2")[0].removeAttribute("required");
        document.getElementsByName("nbHeuresSemaine3")[0].removeAttribute("required");
        document.getElementsByName("nbHeuresSemaine4")[0].removeAttribute("required");
        document.getElementsByName("moyenneNbHeuresHebdomadaires12Mois")[0].removeAttribute("required");
        document.getElementsByName("moyenneNbHeuresMensuelles12Mois")[0].removeAttribute("required");
    } else if (nb === 2) {
        document.getElementsByName("hebdomadaire")[0].checked = false;
        document.getElementsByName("moyenneSur12Mois")[0].checked = false;
        document.getElementById("divHebdomadaire").style.display = "none";
        document.getElementById("divMensuel").style.display = "block";
        document.getElementById("divMoyenne12Mois").style.display = "none";
        document.getElementsByName("moyenneHebdomadaire")[0].checked = false;
        document.getElementsByName("moyenneHebdomadaireSur4Semaines")[0].checked = false;
        document.getElementById("divMoyenneHebdomadaire").style.display = "none";
        document.getElementById("divMoyenneHebdomadaireSur4Semaines").style.display = "none";
        for (var i = 1; i <= 42; i++) {
            document.getElementsByName("cell" + i)[0].removeAttribute("required");
        }
        for (var i = 44; i <= 50; i++) {
            document.getElementsByName("cell" + i)[0].removeAttribute("required");
        }
        document.getElementsByName("moyenneNbHeuresHebdomadaires12Mois")[0].removeAttribute("required");
        document.getElementsByName("moyenneNbHeuresMensuelles12Mois")[0].removeAttribute("required");
    } else if (nb === 3) {
        document.getElementsByName("hebdomadaire")[0].checked = false;
        document.getElementsByName("mensuel")[0].checked = false;
        document.getElementById("divHebdomadaire").style.display = "none";
        document.getElementById("divMensuel").style.display = "none";
        document.getElementById("divMoyenne12Mois").style.display = "block";
        document.getElementsByName("moyenneHebdomadaireSur12Mois")[0].checked = false;
        document.getElementsByName("moyenneMensuelleSur12Mois")[0].checked = false;
        document.getElementById("divMoyenneHebdomadaireSur12Mois").style.display = "none";
        document.getElementById("divMoyenneMensuelleSur12Mois").style.display = "none";
        for (var i = 1; i <= 42; i++) {
            document.getElementsByName("cell" + i)[0].removeAttribute("required");
        }
        for (var i = 44; i <= 50; i++) {
            document.getElementsByName("cell" + i)[0].removeAttribute("required");
        }
        document.getElementsByName("moyenneNbHeuresHebdomadaires")[0].removeAttribute("required");
        document.getElementsByName("nbHeuresSemaine1")[0].removeAttribute("required");
        document.getElementsByName("nbHeuresSemaine2")[0].removeAttribute("required");
        document.getElementsByName("nbHeuresSemaine3")[0].removeAttribute("required");
        document.getElementsByName("nbHeuresSemaine4")[0].removeAttribute("required");
    }
}

// Boutons radios pour la répartition dans la div Hebdomadaire
function RepartitionHebdomadaire(nb) {
    if (nb === 1) {
        document.getElementsByName("volumeJournalier")[0].checked = false;
        document.getElementById("divRepartitionEnHeure").style.display = "block";
        document.getElementById("divVolumeJournalier").style.display = "none";
        for (var i = 1; i <= 42; i++) {
            document.getElementsByName("cell" + i)[0].setAttribute("required", "");
        }
        for (var i = 44; i <= 50; i++) {
            document.getElementsByName("cell" + i)[0].removeAttribute("required");
        }
    } else if (nb === 2) {
        document.getElementsByName("repartitionEnHeure")[0].checked = false;
        document.getElementById("divRepartitionEnHeure").style.display = "none";
        document.getElementById("divVolumeJournalier").style.display = "block";
        for (var i = 1; i <= 42; i++) {
            document.getElementsByName("cell" + i)[0].removeAttribute("required");
        }
        for (var i = 44; i <= 50; i++) {
            document.getElementsByName("cell" + i)[0].setAttribute("required", "");
        }
    }
}

// Boutons radios pour la répartition dans la div Mensuel
function RepartitionMensuel(nb) {
    if (nb === 1) {
        document.getElementsByName("moyenneHebdomadaireSur4Semaines")[0].checked = false;
        document.getElementById("divMoyenneHebdomadaire").style.display = "block";
        document.getElementById("divMoyenneHebdomadaireSur4Semaines").style.display = "none";
        document.getElementsByName("moyenneNbHeuresHebdomadaires")[0].setAttribute("required", "");
        document.getElementsByName("nbHeuresSemaine1")[0].removeAttribute("required");
        document.getElementsByName("nbHeuresSemaine2")[0].removeAttribute("required");
        document.getElementsByName("nbHeuresSemaine3")[0].removeAttribute("required");
        document.getElementsByName("nbHeuresSemaine4")[0].removeAttribute("required");
    } else if (nb === 2) {
        document.getElementsByName("moyenneHebdomadaire")[0].checked = false;
        document.getElementById("divMoyenneHebdomadaire").style.display = "none";
        document.getElementById("divMoyenneHebdomadaireSur4Semaines").style.display = "block";
        document.getElementsByName("moyenneNbHeuresHebdomadaires")[0].removeAttribute("required");
        document.getElementsByName("nbHeuresSemaine1")[0].setAttribute("required", "");
        document.getElementsByName("nbHeuresSemaine2")[0].setAttribute("required", "");
        document.getElementsByName("nbHeuresSemaine3")[0].setAttribute("required", "");
        document.getElementsByName("nbHeuresSemaine4")[0].setAttribute("required", "");
    }
}

// Boutons radios pour la répartition dans la div Moyenne sur 12 mois
function RepartitionMoyenne12Mois(nb) {
    if (nb === 1) {
        document.getElementsByName("moyenneMensuelleSur12Mois")[0].checked = false;
        document.getElementById("divMoyenneHebdomadaireSur12Mois").style.display = "block";
        document.getElementById("divMoyenneMensuelleSur12Mois").style.display = "none";
        document.getElementsByName("moyenneNbHeuresHebdomadaires12Mois")[0].setAttribute("required", "");
        document.getElementsByName("moyenneNbHeuresMensuelles12Mois")[0].removeAttribute("required");
    } else if (nb === 2) {
        document.getElementsByName("moyenneHebdomadaireSur12Mois")[0].checked = false;
        document.getElementById("divMoyenneHebdomadaireSur12Mois").style.display = "none";
        document.getElementById("divMoyenneMensuelleSur12Mois").style.display = "block";
        document.getElementsByName("moyenneNbHeuresHebdomadaires12Mois")[0].removeAttribute("required");
        document.getElementsByName("moyenneNbHeuresMensuelles12Mois")[0].setAttribute("required", "");
    }
}
