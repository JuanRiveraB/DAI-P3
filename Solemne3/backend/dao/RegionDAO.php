<?php

include_once __DIR__ . "\..\domain\Region.php";
include_once __DIR__ . "\Metodos.php";

class RegionDAO implements Metodos {

    /**
     *
     * @var PDO
     */
    private $conexion;

    function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function buscarPorIndice($indiceRegistro) {

        /* @var $region Region */
        $region = null;

        $query = 'SELECT * FROM REGION WHERE REGION_ID = :regionId';
        $sentencia = $this->conexion->prepare($query);
        $id = $indiceRegistro;
        $sentencia->bindParam(':regionId', $id);
        $sentencia->execute();

        while ($registro = $sentencia->fetch()) {
            $region = new Region();
            $region->setRegionId($registro["0"]);
            $region->setNombreRegion($registro["1"]);
            $region->setSiglaRegion($registro["2"]);
        }
        return $region;
    }

    public function listarTodos() {
        $listado = Array();

        $registros = $this->conexion->query('SELECT * FROM REGION');

        $registros->execute();

        while ($registro = $registros->fetch()) {
            $region = new Region();
            $region->setRegionId($registro["0"]);
            $region->setNombreRegion($registro["1"]);
            $region->setSiglaRegion($registro["2"]);
            array_push($listado, $region->jsonSerialize());
        }
        return $listado;
    }
}
