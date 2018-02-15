<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>test DaoQualification</title>
    </head>
    <body>
        <?php
        require_once("../includes/parametres.inc.php");
        require_once("../includes/fonctions.inc.php");

        $dao = new M_DaoQualification();
        $dao->connecter();

        //Test de sélection par Id 
        echo "<p>Test de sélection par Id </p>";
        $qualification = $dao->getOneById(1);
        var_dump($qualification);

        //Test de sélection de toutes les qualifications
        echo "<p>Test de sélection de tous les enregistrements</p>";
        $lesQualifications = $dao->getAll();
        var_dump($lesQualifications);

        //Test d'insertion
        echo "<p>Test d'insertion</p>";
        $qualification = new M_Qualification(null, "qualif test");
        var_dump($qualification);
        $dao->insert($qualification);
        $qualificationLu = $dao->getOneByName("qualif test");
        var_dump($qualificationLu);

        //Test de modification
        echo "<p>Test de modification</p>";
        $qualification->setLibelleQualification("qualif modif");
        $enr = $dao->getPdo()->query('SELECT MAX(idQualification) FROM qualification;')->fetch();
        $id = $enr[0];
        $dao->update($id, $qualification);
        $qualificationLu = $dao->getOneByName("qualif modif");
        var_dump($qualificationLu);

        //Test de suppression
        echo "<p>Test de suppression</p>";
        $id = $qualificationLu->getIdQualification();
        echo "Supprimer : " . $id . "<br/>";
        $dao->delete($id);
        $qualificationLu = $dao->getOneById($id);
        var_dump($qualificationLu);

        $dao->deconnecter();
        ?>
    </body>
</html>
