<?php
/**
 * Description of CargaLegal
 *
 * @author F4YW3K
 */
class CargaLegal implements JsonSerializable{
    
    private $idTitular;
    private $beneficiarioID;
    
    function __construct() {
        
    }
    function getIdTitular() {
        return $this->idTitular;
    }

    function getBeneficiarioID() {
        return $this->beneficiarioID;
    }

    function setIdTitular($idTitular) {
        $this->idTitular = $idTitular;
    }

    function setBeneficiarioID($beneficiarioID) {
        $this->beneficiarioID = $beneficiarioID;
    }

    public function jsonSerialize() {
        $arregloAsociativo = Array(["idTitular" => $this->idTitular,
                                   "idBeneficiario" => $this->beneficiarioID]);
        return $arregloAsociativo;
    }
}
