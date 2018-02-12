<ol class="breadcrumb breadcrumb-arrow">
    <li><a class="" id="boutonDemande">Demande</a></li>
    <li><a class="disabled" id="boutonSalarie">Salarié</a></li>
    <li><a class="disabled" id="boutonContrat">Contrat</a></li>
    <li><a class="disabled" id="boutonTempsTravail">Temps Travail</a></li>
</ol>

<div id="globalNewDemande" class="centrerElem">
    <div id="divDemande" style="display: block">
        <?php include($this->lireDonnee('divDemande')); ?>
        <?php include($this->lireDonnee('divSalarie')); ?>
    </div>
    <div id="divSalarie" style="display: none">
        <?php include($this->lireDonnee('divSalarie')); ?>
    </div>
    <div id="divContrat" style="display: none">
        c
    </div>
    <div id="divTempsTravail" style="display: none">
        d
    </div>
</div>

<script>
    document.querySelector("#boutonDemande").onclick = function() {
        document.querySelector("#divDemande").style.display = "block";
        document.querySelector("#divSalarie").style.display = "none";
        document.querySelector("#divContrat").style.display = "none";
        document.querySelector("#divTempsTravail").style.display = "none";
        document.querySelector("#boutonDemande").className="";
        document.querySelector("#boutonSalarie").className="";
        document.querySelector("#boutonContrat").className="";
        document.querySelector("#boutonTempsTravail").className="";
    };    
</script>

