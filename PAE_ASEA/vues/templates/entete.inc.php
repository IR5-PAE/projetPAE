<div id="titreEntete">
    Demande de contrat de travail
    <br>
    <a href=".?controleur=accueil&action=defaut">Acceuil</a>
</div>
<div id="logoEntete"><img src="../vues/images/logo_asea.gif"></div>
<?php
if (!is_null($this->lireDonnee('loginAuthentification'))) {
    ?>
    <span class="deconnexion" >
        <a href=".?controleur=connexion&action=seDeconnecter">
            <img src="../vues/images/exit.png" style="width:25px; height:25px;" alt="" />
        </a>   
    </span>

    <?php
}
?>