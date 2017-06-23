<?php
include_once __DIR__ . "/controller/PersonaController.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["id"])) {
        $json = PersonaController::buscarPorId($_GET["id"]);
        echo $json;
    }
} else {
    echo "{\"error\": \"el método de la solicitud no está permitido\"";
    exit;
}