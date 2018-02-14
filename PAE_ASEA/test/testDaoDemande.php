<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>test DaoDemande</title>
    </head>
    <body>
        <?php
        require_once("../includes/parametres.inc.php");
        require_once("../includes/fonctions.inc.php");

        $dao = new M_DaoDemande();
        $dao->connecter();

        //Test de sélection par Id 
        echo "<p>Test de sélection par Id </p>";
        $demande = $dao->getOneById(1);
        var_dump($demande);
        
        //Test de sélection de toutes les demandes
        echo "<p>Test de sélection de tous les demandes</p>";
        $lesDemandes = $dao->getAll();
        var_dump($lesDemandes);
        
        //Test de sélection de toutes les demandes d'une personne 
        echo "<p>Test de sélection de toutes les demandes d'une personne</p>";
        $lesDemandes = $dao->getAllByPersonne(1);
        var_dump($lesDemandes);

        //Test d'insertion
//        echo "<p>Test d'insertion</p>";
//        $role = new M_Role(2, "intendant");
//        $role= new M_User(null, "Hugo", "Victor","vhugo@free.fr", "0678901234", "vhugo", "vhugo", $role);
//        var_dump($role);
//        $dao->insert($role);
//        $persLu = $dao->getOneByLogin('vhugo');
//        var_dump($persLu);
        
        //Test de modification
//        echo "<p>Test de modification</p>";
//        $role->setEmail("victor.hugo@laposte.net");
//        $role->setNomUser("uther");
//        $enr = $dao->getPdo()->query('SELECT MAX(IDUSER) FROM USER;')->fetch();
//        $id= $enr[0];
//        $dao->update($id,$role);
//        $persLu = $dao->getOneByLogin('vhugo');
//        var_dump($persLu);
 
        //Test de suppression
//        echo "<p>Test de suppression</p>";
//        $id = $persLu->getIdUser();
//        echo "Supprimer : ".$id."<br/>";
//        $dao->delete($id);
//        $persLu = $dao->getOneById($id);
//        var_dump($persLu);
        
        $dao->deconnecter();
        ?>
    </body>
</html>
