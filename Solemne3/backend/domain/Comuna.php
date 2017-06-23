<?php
/**
 * Description of Comuna
 *
 * @author F4YW3K
 */
class Comuna {
    private $idComuna;
    private $nombreComuna;
    private $idProvincia;
    
    function __construct() {
        
    }    
    function getIdComuna() {
        return $this->idComuna;
    }

    function getNombreComuna() {
        return $this->nombreComuna;
    }

    function getIdProvincia() {
        return $this->idProvincia;
    }

    function setIdComuna($idComuna) {
        $this->idComuna = $idComuna;
    }

    function setNombreComuna($nombreComuna) {
        $this->nombreComuna = $nombreComuna;
    }

    function setIdProvincia($idProvincia) {
        $this->idProvincia = $idProvincia;
    }
    
    public function jsonSerialize() {
        $arregloAsociativo = Array("idComuna" => $this->idComuna,
                                   "nombreComuna" => $this->nombreComuna,
                                   "provinciaId" => $this->idProvincia);
        return $arregloAsociativo;
    }
}
