/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function validerSalarie() {
    var ok = 1;

    if (document.getElementById("etablissement").value === "")
    {
        alert("Veuillez indiquer un établissement.");
        ok = 0;
        document.getElementById("etablissement").focus();
        return false;
    }
    
    if (document.getElementById("numOffreEmploi").value === "")
    {
        alert("Veuillez indiquer le numéro de l'offre d'emploi.");
        ok = 0;
        document.getElementById("numOffreEmploi").focus();
        return false;
    }
    
    if (ok === 1) {
        submitSalarie();
    }
}

function submitSalarie() {
    document.getElementById("divSalarie").style.display = "none";
    document.getElementById("divContrat").style.display = "block";
    document.getElementById("boutonSalarie").className="disabled";
    document.getElementById("boutonContrat").className="";
}      