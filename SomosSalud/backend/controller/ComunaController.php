<?php
/**
 * Description of ComunaController
 *
 * @author " "
 */    
include_once __DIR__ . "../dao/DBConnection.php";
include_once __DIR__ . "../dao/ComunaDAO.php";

class ComunaController {
    
    public static function listarComunasPorProvincia($IDProvincia)
    {
        $conexion = DBConnection::getConexion();
        $daoComuna = new ComunaDAO($conexion);
        return $daoComuna->listarPorIndice($IDProvincia);
    }
}
