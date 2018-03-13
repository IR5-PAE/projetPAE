<?php

/**
 * Description of M_Emploi
 *
 * @author arichard
 */
class M_Emploi {

    private $idEmploi; // type : int
    private $libelleEmploi; // type : String

    function __construct($idEmploi, $libelleEmploi) {
        $this->idEmploi = $idEmploi;
        $this->libelleEmploi = $libelleEmploi;
    }

    function getIdEmploi() {
        return $this->idEmploi;
    }

    function getLibelleEmploi() {
        return $this->libelleEmploi;
    }

    function setIdEmploi($idEmploi) {
        $this->idEmploi = $idEmploi;
    }

    function setLibelleEmploi($libelleEmploi) {
        $this->libelleEmploi = $libelleEmploi;
    }

}
