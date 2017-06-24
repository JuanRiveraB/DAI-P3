<?php
/**
 * Description of CargaLegalDAO
 *
 * @author F4YW3K
 */
include_once __DIR__ . "\..\domain\CargaLegal.php";
include_once __DIR__ . "\Metodos.php";

class CargaLegalDAO implements Metodos{
    
    /**
     *
     * @var PDO
     */
    private $conexion;
    
    function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function buscarPorIndice($indiceRegistro) {
        $listado = array();
        $query = 'SELECT * FROM carga_legal WHERE TITULAR_ID = :personaId';
        $sentencia = $this->conexion->prepare($query);
        $id = $indiceRegistro;
        $sentencia->bindParam(':personaId', $id);
        $sentencia->execute();

        while ($registro = $sentencia->fetch()) {
            $beneficiario = new CargaLegal();
            $beneficiario->setIdTitular($registro["0"]);
            $beneficiario->setBeneficiarioID($registro["1"]);
        }
        return $listado;
    }

    public function listarTodos() {
        
    }

}
