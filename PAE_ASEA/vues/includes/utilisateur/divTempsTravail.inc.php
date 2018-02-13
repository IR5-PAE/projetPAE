<form class="sectionMarge" method="post" action=".?controleur=connexion&action=authentifier">
    <div class="formsDemandeContrat">
        <label>Etablissement :</label>
        <input type="text" id="etablissement" required/>
        <br><br>
        <label>Offre d'emploi n° :</label>
        <input type="text" id="numOffreEmploi" required/>
        <br><br><br>
        <button id="BoutonSuivantDemande" type="submit">Suivant</button>
    </div>
</form>

<script>
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
</script>