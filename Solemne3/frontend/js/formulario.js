jQuery(document).ready(function () {
    jQuery.ajaxSetup({
        "error": function (respuesta, jqXHR, errorMsg) {
            alert("ha ocurrido el siguiente error: " + errorMsg);
        }
    });

    jQuery("select[name='region'] option").remove();
    jQuery("select[name='region']").append("<option value=\"\">-- Seleccione la region --</option>");

    jQuery.getJSON("/Solemne3/backend/infoRegiones.php",
            function (regiones) {
                jQuery.each(regiones, function (indice, region) {
                    jQuery("select[name='region']").append("<option value=\"" + region[0].idRegion + "\">" + region[0].nombreRegion + "</option>");
                });
            });

    /**
     * Manejo de provincias
     */
    jQuery("select[name='provincia'] option").remove()
    jQuery("select[name='provincia']").append("<option value=\"\">-- Seleccione una provincia --</option>");

    jQuery("select[name='region']").change(function () {
        //var valor = jQuery(this).val();
        jQuery.getJSON("/Solemne3/backend/infoProvincias.php",
                function (provincias) {
                    jQuery.each(provincias, function (indice, provincia) {
                        jQuery("select[name='provincia']").append("<option value=\"" + provincia[0]["idProvincia"] + "\">" + provincia[0]["nombreProvincia"] + "</option>");
                    });
                });
    });
});


