<?php

/**
 * Description of M_Qualification
 *
 * @author arichard
 */
class M_Qualification {

    private $idQualification; // type : int
    private $libelleQualification; // type : String

    function __construct($idQualification, $libelleQualification) {
        $this->idQualification = $idQualification;
        $this->libelleQualification = $libelleQualification;
    }

    function getIdQualification() {
        return $this->idQualification;
    }

    function getLibelleQualification() {
        return $this->libelleQualification;
    }

    function setIdQualification($idQualification) {
        $this->idQualification = $idQualification;
    }

    function setLibelleQualification($libelleQualification) {
        $this->libelleQualification = $libelleQualification;
    }

}
