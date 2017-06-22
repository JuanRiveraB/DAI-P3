<?php
include_once __DIR__ . "/controller/ProvinciaController.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $json = ProvinciaController::listarTodos();
    echo $json;
} else {
    echo "{\"error\": \"el método de la solicitud no está permitido\"";
    exit;
}