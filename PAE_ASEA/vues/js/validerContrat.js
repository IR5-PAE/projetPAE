/* 
 Controle des champs pour valider la partie contrat
 */

function validerContrat() {
    var ok = 1;
    
//    if (document.getElementsByName("emplois")[0].value === "Sélectionner un emploi")
//    {
//        alert("Veuillez sélectionner un emploi");
//        ok = 0;
//        document.getElementsByName("emplois")[0].focus();
//        return false;
//    }
//    
//    if (document.getElementsByName("qualifications")[0].value === "Sélectionner une qualification")
//    {
//        alert("Veuillez sélectionner une qualification");
//        ok = 0;
//        document.getElementsByName("qualifications")[0].focus();
//        return false;
//    }
//    
//    if (document.getElementsByName("cdi")[0].checked === false && document.getElementsByName("cdd")[0].checked === false)
//    {
//        alert("Veuillez préciser s'il sagit d'un cdi ou cdd");
//        ok = 0;
//        return false;
//    }
//    
//    if (document.getElementsByName("cdi")[0].checked)
//    {
//        if (document.getElementsByName("oui")[0].checked === false && document.getElementsByName("non")[0].checked === false)
//        {
//           alert("Veuillez préciser si il y a une période d'éssai");
//           ok = 0;
//           return false;
//        }
//    }
//    
//    if (document.getElementsByName("remplacementPartiel")[0].checked === false && document.getElementsByName("remplacementCascade")[0].checked === false)
//    {
//        alert("Veuillez préciser la nature du remplacement");
//        ok = 0;
//        return false;
//    }
//    
//    if (document.getElementsByName("remplacementPartiel")[0].checked)
//    {
//        if (document.getElementsByName("remplacementPartielOpt1")[0].checked === false && document.getElementsByName("remplacementPartielOpt2")[0].checked === false)
//        {
//           alert("Veuillez cocher la raison du remplacement partiel");
//           ok = 0;
//           return false;
//        }
//    }
    
    if (ok === 1) 
    {
        document.submit();
    }
}   