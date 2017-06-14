<?php
/**
 * Description of Region
 *
 * @author " "
 */
class Region {
    private $regionID;
    private $regionNombre;
    private $regionSigla;
    function __construct() {
        
    }
    
    function getRegionID() {
        return $this->regionID;
    }

    function getRegionNombre() {
        return $this->regionNombre;
    }

    function getRegionSigla() {
        return $this->regionSigla;
    }

    function setRegionID($regionID) {
        $this->regionID = $regionID;
    }

    function setRegionNombre($regionNombre) {
        $this->regionNombre = $regionNombre;
    }

    function setRegionSigla($regionSigla) {
        $this->regionSigla = $regionSigla;
    }
}
