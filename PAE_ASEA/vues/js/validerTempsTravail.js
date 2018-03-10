/* 
 Controle des champs pour valider la partie temps travail
 */

function validerTempsTravail() {
    var ok = 1;

    if (document.getElementsByName("tempsComplet")[0].checked === false && document.getElementsByName("tempsPartiel")[0].checked === false){
        alert("Veuillez préciser le type de temps de travail");
        ok = 0;
        return false;
    }

    if (document.getElementsByName("tempsPartiel")[0].checked) {
        if (document.getElementsByName("hebdomadaire")[0].checked === false 
                && document.getElementsByName("mensuel")[0].checked === false
                && document.getElementsByName("moyenneSur12Mois")[0].checked === false){
            alert("Veuillez préciser le type de volume");
            ok = 0;
            return false;
        }
    }
    
    if (document.getElementsByName("hebdomadaire")[0].checked) {
        if (document.getElementsByName("repartitionEnHeure")[0].checked === false 
                && document.getElementsByName("volumeJournalier")[0].checked === false){
            alert("Veuillez préciser le type de répartition");
            ok = 0;
            return false;
        }
    }
    
    //VERIFIER LES TABLEAUX "Répartition en heure" et "Volume journalier"
    
    if (document.getElementsByName("mensuel")[0].checked) {
        if (document.getElementsByName("moyenneHebdomadaire")[0].checked === false 
                && document.getElementsByName("moyenneHebdomadaireSur4Semaines")[0].checked === false){
            alert("Veuillez préciser le type de répartition");
            ok = 0;
            return false;
        }
    }
    
    
    
    if (document.getElementsByName("moyenneSur12Mois")[0].checked) {
        if (document.getElementsByName("moyenneHebdomadaireSur12Mois")[0].checked === false 
                && document.getElementsByName("moyenneMensuelleSur12Mois")[0].checked === false){
            alert("Veuillez préciser le type de répartition");
            ok = 0;
            return false;
        }
    }

    if (ok === 1) {
        document.submit();
    }
}   