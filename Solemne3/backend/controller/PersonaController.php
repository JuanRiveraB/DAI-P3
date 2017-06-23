<<<<<<< HEAD
<?php

/**
 * Description of PersonaController
 *
 * @author Juan
 */
include_once __DIR__ . "\..\dao\DBConnection.php";
include_once __DIR__ . "\..\domain\Persona.php";
include_once __DIR__ . "\..\dao\PersonaDAO.php";

class PersonaController {

    public static function buscarPorId($id) {

        $conexion = DBConnection::getConexion();
        $personaDAO = new PersonaDAO($conexion);
        $persona = new Persona();
        $persona = $personaDAO->buscarPorIndice($id);
        return json_encode($persona->jsonSerialize());
    }

    public static function listarTodos() {

        $conexion = DBConnection::getConexion();
        $regionDAO = new RegionDAO($conexion);
        return json_encode($regionDAO->listarTodos());
    }

}
