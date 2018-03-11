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
//    var key = document.getElementsByName("numSecu")[0].value.substring(13,15);
//    var Num = document.getElementsByName("numSecu")[0].value.substring(0,13);
//    var calculKey = 97 - Num % 97;
//    if(key !== calculKey.toString()){
//        alert("Le numéro de sécurité sociale est incorrect");
//        ok = 0;
//        document.getElementsByName("numSecu")[0].focus();
//        return false;
//    }


// CALCUL NUM SECU SOC 
// 2A ET 2B SONT LES DEPARTEMENT DE CORSE A CONVERTIR EN NOMBRE

//var num = document.getElementsByName("numSecu")[0].value.substring(0,13);
//    var key = document.getElementsByName("numSecu")[0].value.substring(13,15);
//    
//    if (num.value.substring(5,6) === "2A" || num.value.substring(5,6) === "2B") {
//        num.value.substring(5,6).replace("2A", "19").replace("2B", "18");
//    }
//    alert(num);
//
//    var calculKey = 97 - (num % 97);
//    if(key !== calculKey.toString()){
//        alert("Le numéro de sécurité sociale est incorrect");
//        ok = 0;
//        document.getElementsByName("numSecu")[0].focus();
//        return false;
//    }
    
    if (ok === 1) {
        document.submit();
    }
}   