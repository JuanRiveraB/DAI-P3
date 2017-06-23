<?php
include_once __DIR__ . "/controller/ProvinciaController.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if(isset($_GET["id"])) {
        $json = ProvinciaController::listarPorId($_GET["id"]);
        echo $json;   
    }    
} else {
    echo "{\"error\": \"el método de la solicitud no está permitido\"";
    exit;
}