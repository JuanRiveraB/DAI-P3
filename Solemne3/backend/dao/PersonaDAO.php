<?php

/**
 * Description of PersonaDAO
 *
 * @author Juan
 */
include_once __DIR__ . "\..\domain\Persona.php";
include_once __DIR__ . "\Metodos.php";

class PersonaDAO implements Metodos {

    /**
     *
     * @var PDO
     */
    private $conexion;

    function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function buscarPorIndice($indiceRegistro) {
        $query = 'SELECT * FROM PERSONA WHERE PERSONA_ID = :personaId';
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
        return $persona;
    }

    public function listarTodos() {
        
    }

    public function listarTodosBeneficiarios($id) {
        $listado = Array();
        $query = "SELECT * FROM PERSONA P JOIN CARGA_LEGAL CL ON (CL.BENEFICIARIO_ID=P.PERSONA_ID) WHERE CL.TITULAR_ID= :personaId";
        $registros = $this->conexion->prepare($query);
        $registros->bindParam(':personaId', $id);
        $registros->execute();
        if ($registros != null) {
            while ($registro = $registros->fetch()) {
                $persona = new Persona();
                $persona->setIdPersona($fila["0"]);
                $persona->setNombrePersona($fila["1"]);
                $persona->setApellidoPersona($fila["2"]);
                $persona->setFecNacimientoPersona($fila["3"]);
                array_push($listado, $persona->jsonSerialize());
            }
        }
        return $listado;
    }

}
