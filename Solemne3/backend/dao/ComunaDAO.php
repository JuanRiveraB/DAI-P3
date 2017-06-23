<?php
/**
 * Description of ComunaDAO
 *
 * @author F4YW3K
 */
include_once __DIR__ . "\..\domain\Comuna.php";
include_once __DIR__ . "\Metodos.php";
class ComunaDAO implements Metodos{
    /**
     * 
     * @var PDO
     */
    
    private $conexion;
    function __construct(PDO $conexion) {
        $this->conexion = $conexion;
    }

    public function buscarPorIndice($indiceRegistro) {
        $listado = Array();

        $query = 'SELECT * FROM comuna WHERE COMUNA_PROVINCIA_ID = :provinciaId';
        $sentencia = $this->conexion->prepare($query);
        $id = $indiceRegistro;
        $sentencia->bindParam(':provinciaId', $id);
        $sentencia->execute();
        while ($registro = $sentencia->fetch()) {
            $comuna = new Comuna();
            $comuna->setIdComuna($registro["0"]);
            $comuna->setNombreComuna($registro["1"]);
            $comuna->setIdProvincia($registro["2"]);
            array_push($listado, $comuna->jsonSerialize());
        }
        return $listado;
    }

    public function listarTodos() {
        $listado = Array();

        $registros = $this->conexion->query('SELECT * FROM comuna');

        $registros->execute();

        while ($registro = $registros->fetch()) {
            $comuna = new Comuna();
            $comuna->setIdComuna($registro["0"]);
            $comuna->setNombreComuna($registro["1"]);
            $comuna->setIdProvincia($registro["2"]);
            array_push($listado, $comuna->jsonSerialize());
        }
        return $listado;
    }

}
