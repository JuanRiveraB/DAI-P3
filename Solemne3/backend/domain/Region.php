<?php

class Region {

    private $regionId;
    private $nombreRegion;
    private $siglaRegion;

    function __construct() {
        
    }

    function getRegionId() {
        return $this->regionId;
    }

    function getNombreRegion() {
        return $this->nombreRegion;
    }

    function getSiglaRegion() {
        return $this->siglaRegion;
    }

    function setRegionId($regionId) {
        $this->regionId = $regionId;
    }

    function setNombreRegion($nombreRegion) {
        $this->nombreRegion = $nombreRegion;
    }

    function setSiglaRegion($siglaRegion) {
        $this->siglaRegion = $siglaRegion;
    }

    public function jsonSerialize() {
        $arregloAsociativo = Array(["idRegion" => $this->regionId,
                                   "nombreRegion" => $this->nombreRegion,
                                   "siglaRegion" => $this->siglaRegion]);
        return $arregloAsociativo;
    }

}
