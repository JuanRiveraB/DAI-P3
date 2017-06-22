<?php
include_once __DIR__ . "/controller/RegionController.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $json = RegionController::listarTodos();
    echo $json;
} else {
    echo "{\"error\": \"el método de la solicitud no está permitido\"";
    exit;
}
