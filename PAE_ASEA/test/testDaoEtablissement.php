<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>test DaoEtablissement</title>
    </head>
    <body>
        <?php
        require_once("../includes/parametres.inc.php");
        require_once("../includes/fonctions.inc.php");

        $dao = new M_DaoEtablissement();
        $dao->connecter();

        //Test de sélection par Id 
        echo "<p>Test de sélection par Id </p>";
        $etablissement = $dao->getOneById(1);
        var_dump($etablissement);

        //Test de sélection de tous les établissements
        echo "<p>Test de sélection de tous les enregistrements</p>";
        $lesEtablissements = $dao->getAll();
        var_dump($lesEtablissements);

        //Test d'insertion
        echo "<p>Test d'insertion</p>";
        $etablissement = new M_Etablissement(null, "bat test");
        var_dump($etablissement);
        $dao->insert($etablissement);
        $etablissementLu = $dao->getOneByName("bat test");
        var_dump($etablissementLu);

        //Test de modification
        echo "<p>Test de modification</p>";
        $etablissement->setNomEtablissement("bat modif");
        $enr = $dao->getPdo()->query('SELECT MAX(idEtablissement) FROM etablissement;')->fetch();
        $id = $enr[0];
        $dao->update($id, $etablissement);
        $etablissementLu = $dao->getOneByName("bat modif");
        var_dump($etablissementLu);

        //Test de suppression
        echo "<p>Test de suppression</p>";
        $id = $etablissementLu->getIdEtablissement();
        echo "Supprimer : " . $id . "<br/>";
        $dao->delete($id);
        $etablissementLu = $dao->getOneById($id);
        var_dump($etablissementLu);

        $dao->deconnecter();
        ?>
    </body>
</html>
