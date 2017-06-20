<?php
/**
 * Description of ProvinciaController
 *
 * @author " "
 */

include_once __DIR__ . "/../dao/DBConnection.php";
include_once __DIR__ . "/../dao/ProvinciaDAO.php";

class ProvinciaController {
    
    public static function listarProvinciasPorRegion($IDRegion)
    {
        $conexion = DBConnection::getConexion();
        $daoProvincia = new ProvinciaDAO($conexion);
        return $daoProvincia->listarPorIndice($IDRegion);
    }
}
