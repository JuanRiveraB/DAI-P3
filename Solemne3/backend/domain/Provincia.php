<?php
/**
 * Description of Provincia
 *
 * @author Juan
 */
class Provincia {
    
    private $provinciaId;
    private $nombreProvincia;
    private $provinciaRegionId;
    
    function __construct() {
        
    }
    
    function getProvinciaId() {
        return $this->provinciaId;
    }

    function getNombreProvincia() {
        return $this->nombreProvincia;
    }

    function getProvinciaRegionId() {
        return $this->provinciaRegionId;
    }

    function setProvinciaId($provinciaId) {
        $this->provinciaId = $provinciaId;
    }

    function setNombreProvincia($nombreProvincia) {
        $this->nombreProvincia = $nombreProvincia;
    }

    function setProvinciaRegionId($provinciaRegionId) {
        $this->provinciaRegionId = $provinciaRegionId;
    }

    public function jsonSerialize() {
        $arregloAsociativo = Array("idProvincia" => $this->provinciaId,
                                   "nombreProvincia" => $this->nombreProvincia,
                                   "provinciaRegionId" => $this->provinciaRegionId);
        return $arregloAsociativo;
    }

}
