<?php
/**
 * Description of PersonaDAO
 *
 * @author F4YW3K
 */
include_once __DIR__ . "\..\domain\Persona.php";
include_once __DIR__ . "\Metodos.php";

class PersonaDAO implements Metodos{

    /**
     *
     * @var PDO
     */
    private $conexion;
    
    function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function buscarPorIndice($indiceRegistro) {
        /* @var $persona Persona */
        $persona = null;

        $query = 'SELECT * FROM persona WHERE PERSONA_ID = :personaId';
        $sentencia = $this->conexion->prepare($query);
        $id = $indiceRegistro;
        $sentencia->bindParam(':personaId', $id);
        $sentencia->execute();

        while ($registro = $sentencia->fetch()) {
            $persona = new Persona();
            $persona->setIdPersona($registro["0"]);
            $persona->setNombrePersona($registro["1"]);
            $persona->setApellidoPersona($registro["2"]);
            $persona->setFecNacimientoPersona($registro["3"]);
        }
        return $region;
    }

    public function listarTodos() {
        
    }

}
