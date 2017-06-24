<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agendado</title>
        <script src="js/agendado.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="contenido">
            <fieldset>
                <legend>Resumen atención agendada</legend>
                <div id="labels">
                    Beneficiario: <label id="lblRut"></label>
                    <label id="lblNombre"><?php
                        if (isset($_POST["beneficiarios"])) {
                            echo $_POST["beneficiarios"];
                        }
                        ?></label>
                    <br/>
                    Comuna: <label id="lblCAtencion">
                        <?php
                        if (isset($_POST["comuna"])) {
                            echo $_POST["comuna"];
                        }
                        ?></label>
                    <br/>
                    Fecha de Atención: <label id="lblFechaA">
                        <?php
                        if (isset($_POST["atencion"])) {
                            echo $_POST["atencion"];
                        }
                        ?></label>
                </div>
            </fieldset>
            <input type="button" onclick="volver()" value="Volver"/>
        </div>
    </body>
</html>
<?php
include_once __DIR__ . "/../backend/controller/AtencionController.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["atencion"]) && isset($_POST["beneficiarios"]) && isset($_POST["comuna"])) {

        $exito = AtencionController::agregarAtencion($_POST["beneficiarios"], $_POST["atencion"], $_POST["comuna"]);
        $beneficiario = $_POST["beneficiarios"];
    }
}
?>
