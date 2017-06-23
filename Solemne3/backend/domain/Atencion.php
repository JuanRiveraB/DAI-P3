<?php
/**
 * Description of Atencion
 *
 * @author F4YW3K
 */
class Atencion {
    
    private $idAtencion;
    private $idBeneficiario;
    private $fecAtencion;
    private $comunaID;
    
    function __construct() {
        
    }
    
    function getIdAtencion() {
        return $this->idAtencion;
    }

    function getIdBeneficiario() {
        return $this->idBeneficiario;
    }

    function getFecAtencion() {
        return $this->fecAtencion;
    }

    function getComunaID() {
        return $this->comunaID;
    }

    function setIdAtencion($idAtencion) {
        $this->idAtencion = $idAtencion;
    }

    function setIdBeneficiario($idBeneficiario) {
        $this->idBeneficiario = $idBeneficiario;
    }

    function setFecAtencion($fecAtencion) {
        $this->fecAtencion = $fecAtencion;
    }

    function setComunaID($comunaID) {
        $this->comunaID = $comunaID;
    }
    
    public function jsonSerialize() {
        $arregloAsociativo = Array(["idAtencion" => $this->idAtencion,
                                   "idBeneficiario" => $this->idBeneficiario,
                                   "fecAtencion" => $this->fecAtencion,
                                   "comunaID" => $this->comunaID]);
        return $arregloAsociativo;
    }
}
