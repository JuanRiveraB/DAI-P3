<?php
/**
 * Description of ComunaController
 *
 * @author Juan
 */
include_once __DIR__ . "\..\dao\DBConnection.php";
include_once __DIR__ . "\..\domain\Region.php";
include_once __DIR__ . "\..\dao\RegionDAO.php";

class RegionController {
    
    public static function buscarPorId($id){
        
        $conexion = DBConnection::getConexion();
        $regionDAO = new RegionDAO($conexion);
        
        $region = new Region();
        $region = $regionDAO->buscarPorIndice($id);
        //echo '<div class="error">' .$region->getNombreRegion(). '</div>';
        return json_encode($region->jsonSerialize());
    }
    
    public static function listarTodos(){
        
        $conexion = DBConnection::getConexion();
        $regionDAO = new RegionDAO($conexion);
        return json_encode($regionDAO->listarTodos());
    }
}
