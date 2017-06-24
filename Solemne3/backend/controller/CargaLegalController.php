<?php
include_once __DIR__ . "\..\dao\DBConnection.php";
include_once __DIR__ . "\..\domain\CargaLegal.php";
include_once __DIR__ . "\..\dao\CargaLegalDAO.php";
class CargaLegalController
{
    public static function buscarPorId($id){
        
        $conexion = DBConnection::getConexion();
        $CLDAO = new CargaLegalDAO($conexion);
        
        $clegal = new CargaLegal();
        $clegal = $CLDAO->buscarPorIndice($id);        
        return json_encode($clegal->jsonSerialize());
    }
}
