<?php
/**
 * Description of ComunaDAO
 *
 * @author " "
 */
include_once __DIR__."/MetodoZonas.php";
include_once __DIR__."../domain/Comuna.php";

class ComunaDAO implements MetodoZonas{
    /**
     * 
     * @varPDO
     */
    private $conexion;
    
    function __construct($conexion) {
        $this->conexion = $conexion;
    }
    
    public function listarPorIndice($indice) {
        $listado = array();        
        $query("Select * from comuna where COMUNA_PROVINCIA_ID=':indice'");
        $sentencia = $this->conexion->prepare($query);
        $sentencia->bindParam(':indice',$indice);
        $sentencia->execute();
        
        if ($sentencia !=null) {
            foreach ($sentencia as $fila)
            {
                $comuna = new Comuna();
                $comuna->setComunaID($fila["0"]);
                $comuna->setComunaNombre($fila["1"]);
                $comuna->setComunaProvincia($fila["2"]);
                $comuna($listado, $comuna);
            }
        }
        return $listado;
    }

    public function listarTodo() {
        
    }
}
