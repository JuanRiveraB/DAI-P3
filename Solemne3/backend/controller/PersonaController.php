<?php
/**
 * Description of PersonaController
 *
 * @author F4YW3K
 */
include_once __DIR__ . "\..\dao\DBConnection.php";
include_once __DIR__ . "\..\domain\Persona.php";
include_once __DIR__ . "\..\dao\PersonaDAO.php";

class PersonaController {
    
    public static function buscarPorId($id){
        
        $conexion = DBConnection::getConexion();
        $personaDAO = new PersonaDAO($conexion);
        
        $persona = new Persona();
        $persona = $personaDAO->buscarPorIndice($id);
        return json_encode($region->jsonSerialize());
    }
}
