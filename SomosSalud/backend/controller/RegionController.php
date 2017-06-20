<?php
/**
 * Description of RegionController
 *
 * @author " "
 */

include_once __DIR__ . "/../dao/DBConnection.php";
include_once __DIR__ . "/../dao/RegionDAO.php";

class RegionController {
    
    public static function listarRegiones()
    {
        $conexion = DBConnection::getConexion();
        $daoRegion = new RegionDAO($conexion);
        return $daoRegion->listarTodo();
    }
}
