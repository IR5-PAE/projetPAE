<?php
    $demande = $this->lireDonnee('demande');
?>

<ol class="breadcrumb breadcrumb-arrow">
    <li><a class="disabled" id="boutonDemande">Demande</a></li>
    <li><a class="disabled" id="boutonSalarie">Salarié</a></li>
    <li><a class="disabled" id="boutonContrat">Contrat</a></li>
    <li><a class="disabled" id="boutonTempsTravail">Temps Travail</a></li>
</ol>

<div id="globalNewDemande" class="centrerElem">
    <div id="divDemande" style="display: none">
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

<?php
    if($this->lireDonnee('etape')=='newDemande'){
        ?>
        <script type="text/javascript">
            document.getElementById("divDemande").style.display = "block";
            document.getElementById("boutonDemande").className="";
        </script>
        <?php
    }
    if($this->lireDonnee('etape')=='okDemande'){
        echo $demande->getEtablissement();
        ?>
        <script type="text/javascript">
            document.getElementById("divDemande").style.display = "none";
            document.getElementById("divSalarie").style.display = "block";
            document.getElementById("boutonDemande").className="disabled";
            document.getElementById("boutonSalarie").className="";
        </script>
        <?php
    }
    if($this->lireDonnee('etape')=='okSalarie'){
        ?>
        <script type="text/javascript">
            document.getElementById("divSalarie").style.display = "none";
            document.getElementById("divContrat").style.display = "block";
            document.getElementById("boutonSalarie").className="disabled";
            document.getElementById("boutonContrat").className="";
        </script>
        <?php
    }
    if($this->lireDonnee('etape')=='okContrat'){
        ?>
        <script type="text/javascript">
            document.getElementById("divContrat").style.display = "none";
            document.getElementById("divTempsTravail").style.display = "block";
            document.getElementById("boutonContrat").className="disabled";
            document.getElementById("boutonTempsTravail").className="";
        </script>
        <?php
    }
?>

<script src="../vues/js/validerDemande.js" type="text/javascript"></script>

