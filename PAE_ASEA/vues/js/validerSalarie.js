/* 
 Controle des champs pour valider la partie salarie
 */

function validerSalarie() {
    var ok = 1;
    
//    if (document.getElementsByName("numSecu")[0].value.length !== 15)
//    {
//        alert("Le numéro de sécurité sociale doit contenir 15 caractères");
//        ok = 0;
//        document.getElementsByName("numSecu")[0].focus();
//        return false;
//    }
    
    if (ok === 1) {
        document.submit();
    }
}   