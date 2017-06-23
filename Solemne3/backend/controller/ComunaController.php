<?php
/**
 * Description of ComunaController
 *
 * @author F4YW3K
 */
include_once __DIR__ . "\..\dao\DBConnection.php";
include_once __DIR__ . "\..\domain\Comuna.php";
include_once __DIR__ . "\..\dao\ComunaDAO.php";

class ComunaController {
    
    public static function listarPorId($id){
        
        $conexion = DBConnection::getConexion();
        $ComunaDAO = new ComunaDAO($conexion); 
        return json_encode($ComunaDAO->buscarPorIndice($id));
    }
    
    public static function listarTodos(){
        
        $conexion = DBConnection::getConexion();
        $ComunaDAO = new ComunaDAO($conexion); 
        return json_encode($ComunaDAO->listarTodos());
    }
}
