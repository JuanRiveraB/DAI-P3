<?php
/**
 * Description of PersonaController
 *
 * @author Juan
 */
include_once __DIR__ . "\..\dao\DBConnection.php";
include_once __DIR__ . "\..\domain\Persona.php";
include_once __DIR__ . "\..\domain\CargaLegal.php";
include_once __DIR__ . "\..\dao\PersonaDAO.php";

class PersonaController {

    public static function buscarPorId($id) {

        $conexion = DBConnection::getConexion();
        $personaDAO = new PersonaDAO($conexion);;
        return json_encode($personaDAO->buscarPorIndice($id)->jsonSerialize());
    }
    
    public static function BeneficiariosPorRutTitular($id){
        $conexion = DBConnection::getConexion();
        $personaDao = new PersonaDAO($conexion);        
        return json_encode($personaDao->listarTodosBeneficiarios($id));
    }
}
