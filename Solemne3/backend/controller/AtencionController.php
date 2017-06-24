<?php
/**
 * Description of AtencionController
 *
 * @author F4YW3K
 */
include_once __DIR__ . "\..\dao\DBConnection.php";
include_once __DIR__ . "\..\dao\AtencionDAO.php";
include_once __DIR__ . "\..\domain\Atencion.php";

class AtencionController {
    public static function agregarAtencion($beneficiario_id,$fecha,$comuna_id){
        $atencion = new Atencion();
        $atencion->setIdBeneficiario($beneficiario_id);
        $atencion->setFecAtencion($fecha);
        $atencion->setComunaID($comuna_id);        
        $conexion = DBConnection::getConexion();
        $daoAtencion = new AtencionDAO($conexion);        
        return $daoAtencion->agregarAtencion($atencion);
    }
}
