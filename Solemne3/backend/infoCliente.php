<?php
/**
 * Description of infoComuna
 *
 * @author Juan
 */
include_once __DIR__ . "/controller/PersonaController.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["id"])) {
        $json = PersonaController::buscarPorId($_GET["id"]);
        echo $json;
    } else {
        echo "{\"error\": \"solictud incorrecta, no se ha enviado el parámetro 'rut' del cliente\"";
        exit;
    }
} else {
    echo "{\"error\": \"Error, solicite ayuda a soporte\"";
    exit;
}