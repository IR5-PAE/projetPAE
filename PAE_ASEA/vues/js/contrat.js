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

//Concernant le cdi
document.getElementById("cdi").onclick = function() {
    document.getElementById("cdd").checked = false;
    document.getElementById("divCdi").style.display = "block";
    document.getElementById("divCdd").style.display = "none";
};    
document.getElementById("completCdi").onclick = function() {
    document.getElementById("tempsPartielCdi").checked = false;
};  
document.getElementById("tempsPartielCdi").onclick = function() {
    document.getElementById("completCdi").checked = false;
};  
document.getElementById("oui").onclick = function() {
    document.getElementById("non").checked = false;
};  
document.getElementById("non").onclick = function() {
    document.getElementById("oui").checked = false;
}; 

//Concernant le cdd
document.getElementById("cdd").onclick = function() {
    document.getElementById("cdi").checked = false;
    document.getElementById("divCdi").style.display = "none";
    document.getElementById("divCdd").style.display = "block";
};  

//Si il y a remplacement de salarié
document.getElementById("remplacementCascade").onclick = function() {
    document.getElementById("remplacementPartiel").checked = false;
    document.getElementById("divRemplacementCascade").style.display = "block";
    document.getElementById("divRemplacementPartiel").style.display = "none";
};  
document.getElementById("remplacementPartiel").onclick = function() {
    document.getElementById("remplacementCascade").checked = false;
    document.getElementById("divRemplacementCascade").style.display = "none";
    document.getElementById("divRemplacementPartiel").style.display = "block";
};  

function listLink() {
    var optionSelected = document.getElementById("motif").value;
    if(optionSelected==="surcroit"){
      document.getElementById("divSurcroit").style.display = "block";
      document.getElementById("divTacheOcas").style.display = "none";
      document.getElementById("divRemplacement").style.display = "none";
    }else{
        if(optionSelected==="tacheOcas"){
          document.getElementById("divSurcroit").style.display = "none";
          document.getElementById("divTacheOcas").style.display = "block";
          document.getElementById("divRemplacement").style.display = "none";
        }else{
            if(optionSelected==="remplacement"){
                document.getElementById("divSurcroit").style.display = "none";
                document.getElementById("divTacheOcas").style.display = "none";
                document.getElementById("divRemplacement").style.display = "block";
              }else{
                  document.getElementById("divSurcroit").style.display = "none";
                  document.getElementById("divTacheOcas").style.display = "none";
                  document.getElementById("divRemplacement").style.display = "none";
              }
        }
    }
}
