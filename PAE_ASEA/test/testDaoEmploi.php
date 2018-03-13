<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>test DaoEmploi</title>
    </head>
    <body>
        <?php
        require_once("../includes/parametres.inc.php");
        require_once("../includes/fonctions.inc.php");

        $dao = new M_DaoEmploi();
        $dao->connecter();

        //Test de sélection par Id 
        echo "<p>Test de sélection par Id </p>";
        $emploi = $dao->getOneById(1);
        var_dump($emploi);

        //Test de sélection de tous les emplois
        echo "<p>Test de sélection de tous les enregistrements</p>";
        $lesEmplois = $dao->getAll();
        var_dump($lesEmplois);

        //Test d'insertion
        echo "<p>Test d'insertion</p>";
        $emploi = new M_Emploi(null, "emploi test");
        var_dump($emploi);
        $dao->insert($emploi);
        $emploiLu = $dao->getOneByName("emploi test");
        var_dump($emploiLu);

        //Test de modification
        echo "<p>Test de modification</p>";
        $emploi->setLibelleEmploi("emploi modif");
        $enr = $dao->getPdo()->query('SELECT MAX(idEmploi) FROM emploi;')->fetch();
        $id = $enr[0];
        $dao->update($id, $emploi);
        $emploiLu = $dao->getOneByName("emploi modif");
        var_dump($emploiLu);

        //Test de suppression
        echo "<p>Test de suppression</p>";
        $id = $emploiLu->getIdEmploi();
        echo "Supprimer : " . $id . "<br/>";
        $dao->delete($id);
        $emploiLu = $dao->getOneById($id);
        var_dump($emploiLu);

        $dao->deconnecter();
        ?>
    </body>
</html>
