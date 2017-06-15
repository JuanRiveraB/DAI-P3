<?php

class atencion{
    private $atencion_id;
    private $beneficiario_id;
    private $fechas_atencion;
    private $comuna_id;
    
    function __construct() {
        
    }
    
    function getAtencion_id() {
        return $this->atencion_id;
    }

    function getBeneficiario_id() {
        return $this->beneficiario_id;
    }

    function getFechas_atencion() {
        return $this->fechas_atencion;
    }

    function getComuna_id() {
        return $this->comuna_id;
    }

    function setAtencion_id($atencion_id) {
        $this->atencion_id = $atencion_id;
    }

    function setBeneficiario_id($beneficiario_id) {
        $this->beneficiario_id = $beneficiario_id;
    }

    function setFechas_atencion($fechas_atencion) {
        $this->fechas_atencion = $fechas_atencion;
    }

    function setComuna_id($comuna_id) {
        $this->comuna_id = $comuna_id;
    }



}

