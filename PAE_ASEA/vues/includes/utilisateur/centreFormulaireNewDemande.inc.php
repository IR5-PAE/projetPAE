<!-- Récuperation des variables session demande et salarie -->
<?php
include_once("../modeles/metier/M_Demande.class.php");
include_once("../modeles/metier/M_Personne.class.php");
$demande = $_SESSION['demande'];
$salarie = $_SESSION['salarie'];
?>

<!-- Centre de la page pour faire une nouvelle demande -->

<!-- Barre d'onglets de la demande -->
<ol class="breadcrumb breadcrumb-arrow">
    <li><a class="disabled" id="boutonDemande">Demande</a></li>
    <li><a class="disabled" id="boutonSalarie">Salarié</a></li>
    <li><a class="disabled" id="boutonContrat">Contrat</a></li>
    <li><a class="disabled" id="boutonTempsTravail">Temps Travail</a></li>
</ol>

<!-- Formulaires de chaque onglets -->
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

<!-- Affichage ou non du bon formulaire en fonction des étapes de la demande gére par le controleur C_Demande -->
<?php
if ($this->lireDonnee('etape') == 'newDemande') {
    ?>
    <script type="text/javascript">
        document.getElementById("divDemande").style.display = "block";
        document.getElementById("boutonDemande").className = "";
    </script>
    <?php
}
if ($this->lireDonnee('etape') == 'okDemande') {
    ?>
    <script type="text/javascript">
        document.getElementById("divDemande").style.display = "none";
        document.getElementById("divSalarie").style.display = "block";
        document.getElementById("boutonDemande").className = "disabled";
        document.getElementById("boutonSalarie").className = "";
    </script>
    <?php
}
if ($this->lireDonnee('etape') == 'okSalarie') {
    ?>
    <script type="text/javascript">
        document.getElementById("divSalarie").style.display = "none";
        document.getElementById("divContrat").style.display = "block";
        document.getElementById("boutonSalarie").className = "disabled";
        document.getElementById("boutonContrat").className = "";
    </script>
    <?php
}
if ($this->lireDonnee('etape') == 'okContrat') {
    ?>
    <script type="text/javascript">
        document.getElementById("divContrat").style.display = "none";
        document.getElementById("divTempsTravail").style.display = "block";
        document.getElementById("boutonContrat").className = "disabled";
        document.getElementById("boutonTempsTravail").className = "";
    </script>
    <?php
}
?>

<!-- Appel du script js pour afficher correctement les formulaires -->
<script src="../vues/js/affichageForms.js" type="text/javascript"></script>

<!-- Appel des scripts js pour vérifier les champs des formulaires -->
<script src="../vues/js/validerDemande.js" type="text/javascript"></script>
<script src="../vues/js/validerSalarie.js" type="text/javascript"></script>
<script src="../vues/js/validerContrat.js" type="text/javascript"></script>
<script src="../vues/js/validerTempsTravail.js" type="text/javascript"></script>
