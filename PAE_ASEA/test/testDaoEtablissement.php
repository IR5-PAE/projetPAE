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
        $qualification = $dao->getOneById(1);
        var_dump($qualification);

        //Test de sélection de tous les établissements
        echo "<p>Test de sélection de tous les enregistrements</p>";
        $lesEtablissements = $dao->getAll();
        var_dump($lesEtablissements);

        //Test d'insertion
        echo "<p>Test d'insertion</p>";
        $qualification = new M_Etablissement(null, "bat test");
        var_dump($qualification);
        $dao->insert($qualification);
        $qualificationLu = $dao->getOneByName("bat test");
        var_dump($qualificationLu);

        //Test de modification
        echo "<p>Test de modification</p>";
        $qualification->setNomEtablissement("bat modif");
        $enr = $dao->getPdo()->query('SELECT MAX(idEtablissement) FROM etablissement;')->fetch();
        $id = $enr[0];
        $dao->update($id, $qualification);
        $qualificationLu = $dao->getOneByName("bat modif");
        var_dump($qualificationLu);

        //Test de suppression
        echo "<p>Test de suppression</p>";
        $id = $qualificationLu->getIdEtablissement();
        echo "Supprimer : " . $id . "<br/>";
        $dao->delete($id);
        $qualificationLu = $dao->getOneById($id);
        var_dump($qualificationLu);

        $dao->deconnecter();
        ?>
    </body>
</html>
