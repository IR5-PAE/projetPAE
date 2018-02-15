document.querySelector("#BoutonSuivantDemande").onclick = function() {
    document.querySelector("#divDemande").style.display = "none";
    document.querySelector("#divSalarie").style.display = "block";
    document.querySelector("#divContrat").style.display = "none";
    document.querySelector("#divTempsTravail").style.display = "none";
    document.querySelector("#boutonDemande").className="disabled";
    document.querySelector("#boutonSalarie").className="";
    document.querySelector("#boutonContrat").className="disabled";
    document.querySelector("#boutonTempsTravail").className="disabled";
};    

document.querySelector("#BoutonSuivantSalarie").onclick = function() {
    document.querySelector("#divDemande").style.display = "none";
    document.querySelector("#divSalarie").style.display = "none";
    document.querySelector("#divContrat").style.display = "block";
    document.querySelector("#divTempsTravail").style.display = "none";
    document.querySelector("#boutonDemande").className="disabled";
    document.querySelector("#boutonSalarie").className="disabled";
    document.querySelector("#boutonContrat").className="";
    document.querySelector("#boutonTempsTravail").className="disabled";
};   

document.querySelector("#BoutonSuivantContrat").onclick = function() {
    document.querySelector("#divDemande").style.display = "none";
    document.querySelector("#divSalarie").style.display = "none";
    document.querySelector("#divContrat").style.display = "none";
    document.querySelector("#divTempsTravail").style.display = "block";
    document.querySelector("#boutonDemande").className="disabled";
    document.querySelector("#boutonSalarie").className="disabled";
    document.querySelector("#boutonContrat").className="disabled";
    document.querySelector("#boutonTempsTravail").className="";
};    

//Concernant le cdi
document.querySelector("#cdi").onclick = function() {
    document.querySelector("#cdd").checked = false;
    document.querySelector("#divCdi").style.display = "block";
    document.querySelector("#divCdd").style.display = "none";
};    
document.querySelector("#completCdi").onclick = function() {
    document.querySelector("#tempsPartielCdi").checked = false;
};  
document.querySelector("#tempsPartielCdi").onclick = function() {
    document.querySelector("#completCdi").checked = false;
};  
document.querySelector("#oui").onclick = function() {
    document.querySelector("#non").checked = false;
};  
document.querySelector("#non").onclick = function() {
    document.querySelector("#oui").checked = false;
}; 

//Concernant le cdd
document.querySelector("#cdd").onclick = function() {
    document.querySelector("#cdi").checked = false;
    document.querySelector("#divCdi").style.display = "none";
    document.querySelector("#divCdd").style.display = "block";
};  
document.querySelector("#completCdd").onclick = function() {
    document.querySelector("#tempsPartielCdd").checked = false;
};  
document.querySelector("#tempsPartielCdd").onclick = function() {
    document.querySelector("#completCdd").checked = false;
}; 

function listLink() {
    var optionSelected = document.querySelector("#motif").value;
    if(optionSelected==="surcroit"){
      document.querySelector("#divSurcroit").style.display = "block";
      document.querySelector("#divTacheOcas").style.display = "none";
      document.querySelector("#divRemplacement").style.display = "none";
    }else{
        if(optionSelected==="tacheOcas"){
          document.querySelector("#divSurcroit").style.display = "none";
          document.querySelector("#divTacheOcas").style.display = "block";
          document.querySelector("#divRemplacement").style.display = "none";
        }else{
            if(optionSelected==="remplacement"){
                document.querySelector("#divSurcroit").style.display = "none";
                document.querySelector("#divTacheOcas").style.display = "none";
                document.querySelector("#divRemplacement").style.display = "block";
              }else{
                  document.querySelector("#divSurcroit").style.display = "none";
                  document.querySelector("#divTacheOcas").style.display = "none";
                  document.querySelector("#divRemplacement").style.display = "none";
              }
        }
    }
}
