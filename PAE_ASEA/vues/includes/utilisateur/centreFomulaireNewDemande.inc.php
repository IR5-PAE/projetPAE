<ol class="breadcrumb breadcrumb-arrow">
    <li><a class="" id="boutonDemande">Demande</a></li>
    <li><a class="disabled" id="boutonSalarie">Salarié</a></li>
    <li><a class="disabled" id="boutonContrat">Contrat</a></li>
    <li><a class="disabled" id="boutonTempsTravail">Temps Travail</a></li>
</ol>

<div id="globalNewDemande" class="centrerElem">
    <div id="divDemande" style="display: block">
        <?php include($this->lireDonnee('divDemande')); ?>
    </div>
    <div id="divSalarie" style="display: none">
        <?php include($this->lireDonnee('divSalarie')); ?>
    </div>
    <div id="divContrat" style="display: none">
        <?php include($this->lireDonnee('divContrat')); ?>
    </div>
    <div id="divTempsTravail" style="display: none">
        <?php include($this->lireDonnee('divTempsTravail')); ?>
    </div>
</div>

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

