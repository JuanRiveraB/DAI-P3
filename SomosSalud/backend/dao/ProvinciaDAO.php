<?php
include_once __DIR__."/MetodoZonas.php";
include_once __DIR__."/../domain/Provincia.php";
/**
 * Description of ProvinciaDAO
 *
 * @author " "
 */
class ProvinciaDAO implements MetodoZonas{
    /**
     * 
     * @var PDO
     */
    
    private $conexion;
    
    function __construct($conexion) {
        $this->conexion = $conexion;
    }

    
    public function listarPorIndice($indice) {        
        $listado = array();        
        $query("Select * from provincia where PROVINCIA_REGION_ID=''");
        $sentencia = $this->conexion->prepare($query);
        $sentencia->bindParam(':indice',$indice);
        $sentencia->execute();
        
        if ($sentencia !=null) {
            foreach ($sentencia as $fila)
            {
                $provincia = new Provincia();
                $provincia->setProvinciaID($fila["0"]);
                $provincia->setProvinciaNombre($fila["1"]);
                $provincia->setProvinciaRegionID($fila["2"]);
                array_push($listado, $provincia);
            }
        }
        return $listado;
    }

    public function listarTodo() {
        
    }

}
