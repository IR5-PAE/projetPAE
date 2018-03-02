/* 
 Controle des champs pour valider la partie contrat
 */

function validerContrat() {
    var ok = 1;
    
    if (document.getElementsByName("qualifications")[0].value === "Sélectionner une qualification")
    {
        alert("Veuillez sélectionner une qualification");
        ok = 0;
        document.getElementsByName("qualifications")[0].focus();
        return false;
    }
    
    if (document.getElementsByName("cdi")[0].checked)
    {
        if (document.getElementsByName("oui")[0].checked === false && document.getElementsByName("non")[0].checked === false)
        {
           alert("Veuillez préciser si il y a une période d'éssai");
           ok = 0;
        }
    }
    
    if (document.getElementsByName("cdd")[0].checked)
    {
        if (document.getElementsByName("oui")[0].checked === false && document.getElementsByName("non")[0].checked === false)
        {
           alert("Veuillez préciser si il y a une période d'éssai");
           ok = 0;
        }
    }
    
    if (ok === 1) {
        document.submit();
    }
}   