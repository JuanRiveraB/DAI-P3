jQuery(document).ready(function () {
    jQuery.ajaxSetup({
        "error": function (respuesta, jqXHR, errorMsg) {
            alert("ha ocurrido el siguiente error: " + errorMsg);
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
        jQuery.getJSON("/DAI-P3/Solemne3/backend/infoProvincias.php",{id:idRegion},
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
        jQuery.getJSON("/DAI-P3/Solemne3/backend/infoComuna.php",{id:idRegion},
                function (comunas) {
                    jQuery.each(comunas, function (indice, comuna) {
                        jQuery("select[name='comuna']").append("<option value=\"" + comuna["idComuna"] + "\">" + comuna["nombreComuna"] + "</option>");
                    });
                });
    });
});


