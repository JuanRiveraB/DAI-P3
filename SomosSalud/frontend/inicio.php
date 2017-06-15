<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio</title>
    </head>
    <body>
        <div id="contenido">
            <form id="beneficiario" action="agendado.php" method="POST">
                <fieldset>
                    <legend>Datos del cliente y beneficiario</legend>
                    <div id="DatosCliente">
                        <input id="rut" type="text" placeholder="RUT"/>
                        <br/>
                        <input id="nombre" type="text" placeholder="Nombre"/>
                        <br/>
                        <input id="apellido" type="text" placeholder="Apellido"/>
                        <br/>
                        <select>
                            <option> - Beneficiario -</option>
                        </select>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Zona de atención</legend>
                    <div id="DatosAtencion">
                        <select id="region">
                            <option> - Región -</option>
                        </select>
                        <br/>
                        <select id="provincia">
                            <option> - Provincia -</option>
                        </select>
                        <br/>
                        <select id="comuna">
                            <option> - Comuna -</option>
                        </select>
                        <br/>
                        <label id="lblFecha">Fecha de Atención</label>
                        <input id="atencion" type="date"/>
                    </div>
                </fieldset>
                <input type="reset" value="Limpiar"/>
                <input type="submit" value="Agendar"/>
            </form>
        </div>
    </body>
</html>
