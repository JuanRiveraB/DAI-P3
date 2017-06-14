<?php

class carga_legal{
    private $titular_id;
    private $beneficiario_id;
    
    function __construct() {
        
    }
    
    function getTitular_id() {
        return $this->titular_id;
    }

    function getBeneficiario_id() {
        return $this->beneficiario_id;
    }

    function setTitular_id($titular_id) {
        $this->titular_id = $titular_id;
    }

    function setBeneficiario_id($beneficiario_id) {
        $this->beneficiario_id = $beneficiario_id;
    }


}
