<!DOCTYPE html >
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../vues/css/styleLargeurFixe.css" />
        <title><?php echo $this->lireDonnee('titreVue'); ?></title>
    </head>
    <body>
        <div id="global" class="centrerElem">
            <header>
                <?php include($this->lireDonnee('entete')); ?>
            </header>
            <section>
                <?php include($this->lireDonnee('centre')); ?>
            </section>
            <footer>
                <?php include($this->lireDonnee('pied')); ?>
            </footer>
        </div>
    </body>
</html>

