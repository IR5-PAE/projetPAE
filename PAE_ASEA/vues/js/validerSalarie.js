/* 
 Controle des champs pour valider la partie salarie
 */

function validerSalarie() {
    var ok = 1;

// CALCUL NUM SECU SOC 
// 2A ET 2B SONT LES DEPARTEMENT DE CORSE A CONVERTIR EN NOMBRE

//    var nir = document.getElementsByName("numSecu")[0].value;
//    nir.toString().toUpperCase();
//    var num = nir.substring(0, 13);
//    var key = nir.substring(13);
//
//    num = num.replace("2A", "19").replace("2B", "18");
//
//    Number(num);
//    Number(key);
//
//    var calculKey = 97 - (num % 97);
//    if (key != calculKey) {
//        alert("Le numéro de sécurité sociale est incorrect");
//        ok = 0;
//        document.getElementsByName("numSecu")[0].focus();
//        return false;
//    }

    if (ok === 1) {
        document.submit();
    }
}   