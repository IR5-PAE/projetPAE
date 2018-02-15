<?php

/**
 * Description of M_Etablissement
 *
 * @author arichard
 */
class M_Etablissement {

    private $idEtablissement; // type : int
    private $nomEtablissement; // type : String

    function __construct($idEtablissement, $nomEtablissement) {
        $this->idEtablissement = $idEtablissement;
        $this->nomEtablissement = $nomEtablissement;
    }

    function getIdEtablissement() {
        return $this->idEtablissement;
    }

    function getNomEtablissement() {
        return $this->nomEtablissement;
    }

    function setIdEtablissement($idEtablissement) {
        $this->idEtablissement = $idEtablissement;
    }

    function setNomEtablissement($nomEtablissement) {
        $this->nomEtablissement = $nomEtablissement;
    }

}
