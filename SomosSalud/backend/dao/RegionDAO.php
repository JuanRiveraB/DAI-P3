<?php

include_once __DIR__."/MetodoZonas.php";
include_once __DIR__."../domain/Region.php";
/**
 * Description of RegionDAO
 *
 * @author " "
 */
class RegionDAO implements MetodoZonas {
    
    /**
     *
     * @var PDO
     */
    private $conexion;
    function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function listarPorIndice($indice) {   
        
    }

    public function listarTodo() {
        $listado=array();
        $registro = $this->conexion->query("select * from region");
        
        if ($registro !=null) {
            foreach ($registro as $fila)
            {
                $region = new Region();
                $region->setRegionID($fila["0"]);
                $region->setRegionNombre($fila["1"]);
                $region->setRegionSigla($fila["2"]);
                array_push($listado, $region);
            }
        }
        return $listado;
    }

}
