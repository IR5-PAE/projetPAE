<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>test DaoPersonne</title>
    </head>
    <body>
        <?php
        require_once("../includes/parametres.inc.php");
        require_once("../includes/fonctions.inc.php");

        $dao = new M_DaoPersonne();
        $dao->connecter();

        //Test de sélection par Id 
        echo "<p>Test de sélection par Id </p>";
        $personne = $dao->getOneById(1);
        var_dump($personne);


        //Test de sélection de toutes les personnes
        echo "<p>Test de sélection de tous les enregistrements</p>";
        $lesPers = $dao->getAll();
        var_dump($lesPers);

        //Test d'insertion
        echo "<p>Test d'insertion</p>";
        $personne = new M_Personne(null, "DURAND", "DUPE", "Antoine", "2018-12-26", "Bastia", "168015892002039", "Micronesia", "424-396 Fermentum St.", "Corse", 1, "Bastia");
        var_dump($personne);
        $dao->insert($personne);

        //Test de selection par login
//        $persLu = $dao->getOneByLogin('vhugo');
//        var_dump($persLu);
        
        //Test de modification
        echo "<p>Test de modification</p>";
        $personne->setNom("RICHARD");
        $personne->setLieuNaissance("NANTES");
        var_dump($personne);
        $enr = $dao->getPdo()->query('SELECT MAX(idPersonne) FROM Personne;')->fetch();
        $id = $enr[0];
        $dao->update($id, $personne);
        $persLu = $dao->getOneById($id);
        var_dump($persLu);

        //Test de suppression
        echo "<p>Test de suppression</p>";
        $id = $persLu->getId();
        echo "Supprimer : " . $id . "<br/>";
        $dao->delete($id);
        $persLu = $dao->getOneById($id);
        var_dump($persLu);

        $dao->deconnecter();
        ?>
    </body>
</html>
