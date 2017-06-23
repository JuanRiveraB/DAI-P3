<?php
/**
 * Description of ProvinciaController
 *
 * @author Juan
 */

include_once __DIR__ . "\..\dao\DBConnection.php";
include_once __DIR__ . "\..\domain\Region.php";
include_once __DIR__ . "\..\dao\ProvinciaDAO.php";

class ProvinciaController {
    
    public static function listarPorId($id){
        
        $conexion = DBConnection::getConexion();
        $provinciaDAO = new ProvinciaDAO($conexion); 
        return json_encode($provinciaDAO->buscarPorIndice($id));
    }
    
    public static function listarTodos(){
        
        $conexion = DBConnection::getConexion();
        $provinciaDAO = new ProvinciaDAO($conexion); 
        return json_encode($provinciaDAO->listarTodos());
    }
}
