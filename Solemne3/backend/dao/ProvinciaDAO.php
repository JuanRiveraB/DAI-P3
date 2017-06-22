<?php
/**
 * Description of ProvinciaDAO
 *
 * @author Juan
 */
include_once __DIR__ . "\..\domain\Provincia.php";
include_once __DIR__ . "\Metodos.php";

class ProvinciaDAO implements Metodos {
    
    /**
     *
     * @var PDO
     */
    private $conexion;

    function __construct($conexion) {
        $this->conexion = $conexion;
    }
    
    public function buscarPorIndice($indiceRegistro) {
        $listado = Array();

        $query = 'SELECT * FROM PROVINCIA WHERE PROVINCIA_REGION_ID = :regionId';
        $sentencia = $this->conexion->prepare($query);
        $id = $indiceRegistro;
        $sentencia->bindParam(':regionId', $id);
        $sentencia->execute();
        while ($registro = $sentencia->fetch()) {
            $provincia = new Provincia();
            $provincia->setProvinciaId($registro["0"]);
            $provincia->setNombreProvincia($registro["1"]);
            $provincia->setProvinciaRegionId($registro["2"]);
            array_push($listado, $provincia->jsonSerialize());
        }
        return $listado;
    }

    public function listarTodos() {
        $listado = Array();

        $registros = $this->conexion->query('SELECT * FROM PROVINCIA');

        $registros->execute();

        while ($registro = $registros->fetch()) {
            $provincia = new Provincia();
            $provincia->setProvinciaId($registro["0"]);
            $provincia->setNombreProvincia($registro["1"]);
            $provincia->setProvinciaRegionId($registro["2"]);
            array_push($listado, $provincia->jsonSerialize());
        }
        return $listado;
    }

}
