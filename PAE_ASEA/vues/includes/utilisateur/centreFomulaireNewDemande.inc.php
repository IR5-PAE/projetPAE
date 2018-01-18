<ol class="breadcrumb breadcrumb-arrow">
    <li><a class="" id="boutonDemande">Demande</a></li>
    <li><a class="" id="boutonSalarie">Salarié</a></li>
    <li><a class="" id="boutonContrat">Contrat</a></li>
    <li><a class="" id="boutonTempsTravail">Temps Travail</a></li>
</ol>
 
<div id="divDemande" style="display: block">
    a
</div>

<div id="divSalarie" style="display: none">
    b
</div>

<div id="divContrat" style="display: none">
    c
</div>

<div id="divTempsTravail" style="display: none">
    d
</div>

<script>
    document.querySelector("#boutonDemande").onclick = function() {
        document.querySelector("#divDemande").style.display = "block";
        document.querySelector("#divSalarie").style.display = "none";
        document.querySelector("#divContrat").style.display = "none";
        document.querySelector("#divTempsTravail").style.display = "none";
        document.querySelector("#boutonDemande").className="active";
        document.querySelector("#boutonSalarie").className="";
        document.querySelector("#boutonContrat").className="";
        document.querySelector("#boutonTempsTravail").className="";
    };    
    document.querySelector("#boutonSalarie").onclick = function() {
        document.querySelector("#divDemande").style.display = "none";
        document.querySelector("#divSalarie").style.display = "block";
        document.querySelector("#divContrat").style.display = "none";
        document.querySelector("#divTempsTravail").style.display = "none";
        document.querySelector("#boutonDemande").className="";
        document.querySelector("#boutonSalarie").className="active";
        document.querySelector("#boutonContrat").className="";
        document.querySelector("#boutonTempsTravail").className="";
    };
    document.querySelector("#boutonContrat").onclick = function() {
        document.querySelector("#divDemande").style.display = "none";
        document.querySelector("#divSalarie").style.display = "none";
        document.querySelector("#divContrat").style.display = "block";
        document.querySelector("#divTempsTravail").style.display = "none";
        document.querySelector("#boutonDemande").className="";
        document.querySelector("#boutonSalarie").className="";
        document.querySelector("#boutonContrat").className="active";
        document.querySelector("#boutonTempsTravail").className="";
    };
    document.querySelector("#boutonTempsTravail").onclick = function() {
        document.querySelector("#divDemande").style.display = "none";
        document.querySelector("#divSalarie").style.display = "none";
        document.querySelector("#divContrat").style.display = "none";
        document.querySelector("#divTempsTravail").style.display = "block";
        document.querySelector("#boutonDemande").className="";
        document.querySelector("#boutonSalarie").className="";
        document.querySelector("#boutonContrat").className="";
        document.querySelector("#boutonTempsTravail").className="active";
    };
</script>

