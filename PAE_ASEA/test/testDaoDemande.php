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

        $daoDemande = new M_DaoDemande();
        $daoPersonne = new M_DaoPersonne();
        $daoDemande->connecter();
        $daoPersonne->connecter();

        //Test de sélection par Id 
        echo "<p>Test de sélection par Id </p>";
        $demande = $daoDemande->getOneById(1);
        var_dump($demande);

        //Test de sélection de toutes les demandes
        echo "<p>Test de sélection de tous les demandes</p>";
        $lesDemandes = $daoDemande->getAll();
        var_dump($lesDemandes);

        //Test de sélection de toutes les demandes d'une personne spécifique
        echo "<p>Test de sélection de toutes les demandes d'une personne</p>";
        $lesDemandes = $daoDemande->getAllByPersonne(1);
        var_dump($lesDemandes);

        //Test d'insertion
        echo "<p>Test d'insertion</p>";
        $personne = $daoPersonne->getOneById(1);
        $demande = new M_Demande(null, "ASEA", 1, "stagiaire", "aucune", "angers", "1050", "pass metro", "stage", "2018-05-29", "2018-05-29", "malade", "très malade", "2018-05-29", 1, "6 mois", "", "2018-05-29", "2018-05-29", "z", "z", "z", "z", "z", "z", "z", "z", "z", $personne);
        $daoDemande->insert($demande);
        var_dump($demande);

        //Test de modification
        echo "<p>Test de modification</p>";
        $demande->setEtablissement("esaip");
        $demande->setEmploi("etudiant");
        $enr = $daoDemande->getPdo()->query('SELECT MAX(idDemande) FROM demandecontrat;')->fetch();
        $idLastDemande = $enr[0];
        $daoDemande->update($idLastDemande, $demande);
        $demandeLu = $daoDemande->getOneById($idLastDemande);
        var_dump($demandeLu);

        //Test de suppression
        echo "<p>Test de suppression</p>";
        $id = $demandeLu->getIdDemande();
        echo "Supprimer : " . $id . "<br/>";
        $daoDemande->delete($id);
        $demandeLu = $daoDemande->getOneById($id);
        var_dump($demandeLu);

        $daoDemande->deconnecter();
        $daoPersonne->deconnecter();
        ?>
    </body>
</html>
