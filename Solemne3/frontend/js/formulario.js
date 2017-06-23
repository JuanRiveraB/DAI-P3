jQuery(document).ready(function () {
    jQuery.ajaxSetup({
        "error": function (respuesta, jqXHR, errorMsg) {
            alert("ha ocurrido el siguiente error: " + errorMsg);
        }
    });

    /**
     * Manejo del campo RUT
     */
    jQuery("input[name='rut']").Rut({format_on: 'keyup'});
    jQuery("input[name='rut']").blur(function () {
        if (this.value !== "") {

            if (!validarRut()) {
                jQuery(this).addClass("error");
                alert('Rut invalido');
                return;
            } else {
                jQuery(this).removeClass("error");
            }

            var rutSinFormato = jQuery.Rut.quitarFormato(this.value);
            var mantisa = rutSinFormato.slice(0, rutSinFormato.length - 1);

            jQuery.getJSON("/DAI-P3/Solemne3/backend/infoCliente.php",
                    {id: mantisa},
                    function (titular) {
                        if (edad(titular.fecNac) === true) {
                            jQuery("input[name='nombre']").val(titular.nombrePersona);
                            jQuery("input[name='nombre']").attr("readonly", true);

                            jQuery("input[name='apellido']").val(titular.apellidoPersona);
                            jQuery("input[name='apellido']").attr("readonly", true);

                            jQuery("select[name='beneficiario'] option").remove();
                            jQuery("select[name='beneficiario']").append("<option value=\"\">-- Seleccione el beneficiario --</option>");

                            /*jQuery.each(titular.beneficiarios, function (indice, beneficiario) {
                                jQuery("select[name='beneficiario']").append("<option value=\"" + beneficiario.id + "\">" + beneficiario.nombre + " " + beneficiario.apellido + "</option>");
                            });*/
                        } else {
                            alert('Es menor de Edad');
                            return;
                        }
                    });
        }
    });

    jQuery("select[name='region'] option").remove();
    jQuery("select[name='region']").append("<option value=\"\">-- Seleccione la region --</option>");

    jQuery.getJSON("/DAI-P3/Solemne3/backend/infoRegiones.php",
            function (regiones) {
                jQuery.each(regiones, function (indice, region) {
                    jQuery("select[name='region']").append("<option value=\"" + region[0].idRegion + "\">" + region[0].nombreRegion + "</option>");
                });
            });

    /**
     * Manejo de provincias
     */
    jQuery("select[name='region']").change(function () {
        var idRegion = $(this).val();
        jQuery("select[name='provincia'] option").remove()
        jQuery("select[name='provincia']").append("<option value=\"\">-- Seleccione una provincia --</option>");
        jQuery("select[name='comuna'] option").remove()
        jQuery("select[name='comuna']").append("<option value=\"\">-- Seleccione una Comuna --</option>");
        jQuery.getJSON("/DAI-P3/Solemne3/backend/infoProvincias.php", {id: idRegion},
                function (provincias) {
                    jQuery.each(provincias, function (indice, provincia) {
                        jQuery("select[name='provincia']").append("<option value=\"" + provincia["idProvincia"] + "\">" + provincia["nombreProvincia"] + "</option>");
                    });
                });
    });

    /**
     * Manejo de Comunas
     */
    jQuery("select[name='provincia']").change(function () {
        var idRegion = $(this).val();
        jQuery("select[name='comuna'] option").remove()
        jQuery("select[name='comuna']").append("<option value=\"\">-- Seleccione una Comuna --</option>");
        jQuery.getJSON("/DAI-P3/Solemne3/backend/infoComuna.php", {id: idRegion},
                function (comunas) {
                    jQuery.each(comunas, function (indice, comuna) {
                        jQuery("select[name='comuna']").append("<option value=\"" + comuna["idComuna"] + "\">" + comuna["nombreComuna"] + "</option>");
                    });
                });
    });
});

function validarRut() {
    var rut = jQuery("input[name='rut']").val();

    return jQuery.Rut.validar(rut);
}

function edad(fechaNacimiento) {
    fecha = new Date(fechaNacimiento);
    hoy = new Date().toJSON().slice(0, 10);
    ed = parseInt((hoy - fecha) / 365 / 24 / 60 / 60 / 1000);
    if (ed < 18) {
        return false;
    }
    return true;
}

function validarFechaMayor(fechaInicial, fechaFinal)
{
    valuesStart = fechaInicial.split("/");
    valuesEnd = fechaFinal.split("/");

    // Verificamos que la fecha no sea posterior a la actual
    var dateStart = new Date(valuesStart[2], (valuesStart[1] - 1), valuesStart[0]);
    var dateEnd = new Date(valuesEnd[2], (valuesEnd[1] - 1), valuesEnd[0]);
    if (dateStart >= dateEnd)
    {
        return true;
    }
    return false;
}


