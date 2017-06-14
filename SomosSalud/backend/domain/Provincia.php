<?php
/**
 * Description of Provincia
 *
 * @author " "
 */
class Provincia {
    private $provinciaID;
    private $provinciaNombre;
    private $provinciaRegionID;
    function __construct() {
        
    }
    function getProvinciaID() {
        return $this->provinciaID;
    }

    function getProvinciaNombre() {
        return $this->provinciaNombre;
    }

    function getProvinciaRegionID() {
        return $this->provinciaRegionID;
    }

    function setProvinciaID($provinciaID) {
        $this->provinciaID = $provinciaID;
    }

    function setProvinciaNombre($provinciaNombre) {
        $this->provinciaNombre = $provinciaNombre;
    }

    function setProvinciaRegionID($provinciaRegionID) {
        $this->provinciaRegionID = $provinciaRegionID;
    }
}
