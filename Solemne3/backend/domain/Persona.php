<?php
/**
 * Description of Persona
 *
 * @author F4YW3K
 */
class Persona {
    
    private $idPersona;
    private $nombrePersona;
    private $apellidoPersona;
    private $FecNacimientoPersona;
    
    function __construct() {
        
    }

    function getIdPersona() {
        return $this->idPersona;
    }

    function getNombrePersona() {
        return $this->nombrePersona;
    }

    function getApellidoPersona() {
        return $this->apellidoPersona;
    }

    function getFecNacimientoPersona() {
        return $this->FecNacimientoPersona;
    }

    function setIdPersona($idPersona) {
        $this->idPersona = $idPersona;
    }

    function setNombrePersona($nombrePersona) {
        $this->nombrePersona = $nombrePersona;
    }

    function setApellidoPersona($apellidoPersona) {
        $this->apellidoPersona = $apellidoPersona;
    }

    function setFecNacimientoPersona($FecNacimientoPersona) {
        $this->FecNacimientoPersona = $FecNacimientoPersona;
    }

    public function jsonSerialize() {
        $arregloAsociativo = Array(["idPersona" => $this->idPersona,
                                   "nombrePersona" => $this->nombrePersona,
                                   "apellidoPersona"=>  $this->apellidoPersona, 
                                   "fecNac" => $this->FecNacimientoPersona]);
        return $arregloAsociativo;
    }

}
