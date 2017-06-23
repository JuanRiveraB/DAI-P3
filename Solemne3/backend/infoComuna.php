<?php
/**
 * Description of infoComuna
 *
 * @author F4YW3K
 */
include_once __DIR__ . "/controller/ComunaController.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if(isset($_GET["id"])) {
        $json = ComunaController::listarPorId($_GET["id"]);
        echo $json;   
    }    
} else {
    echo "{\"error\": \"el método de la solicitud no está permitido\"";
    exit;
}