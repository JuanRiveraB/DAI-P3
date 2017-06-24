<!DOCTYPE html>
<?php
   /* Se llamo la base de datos de aqui porque al crearla 
    * desde backend tiene que esperar que se llame primero el js y da error por los json
    * pero si se borra este directorio la pag funciona igual,
    * solo que para poder ver las regiones por primera vez sin db
    * se debe recargar la pag.
    */
   include_once __DIR__."/../backend/dao/DBConnection.php";
   $conexion = DBConnection::getConexion();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="js/formulario.js" type="text/javascript"></script>
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.Rut.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="contenido" role="main">
            <form id="beneficiario" action="#" method="POST">
                <fieldset>
                    <legend>Datos del cliente y beneficiario</legend>
                    <div id="DatosCliente">
                        <input name="rut" type="text" placeholder="RUT" required=""/>
                        <br/>
                        <input name="nombre" type="text" placeholder="Nombre" onfocus = "this.blur()" required=""/>
                        <br/>
                        <input name="apellido" type="text" placeholder="Apellido" onfocus = "this.blur()" required=""/>
                        <br/>
                        <select name="beneficiarios">
                            <option> - Beneficiario -</option>
                        </select>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Zona de atención</legend>
                    <div id="DatosAtencion">
                        <select name="region">
                            <option value="vr"> - Región -</option>
                        </select>
                        <br/>
                        <select name="provincia">
                            <option> - Provincia -</option>
                        </select>
                        <br/>
                        <select name="comuna">
                            <option> - Comuna -</option>
                        </select>
                        <br/>
                        <label>Fecha de Atención</label>
                        <input name="atencion" type="date"/>
                    </div>
                </fieldset>
                <input type="reset" value="Limpiar"/>
                <input type="submit" value="Agendar"/>
            </form>
        </div>
    </body>
</html>