$(document).ready(function() {
    $("#icono").click(function() {
        $("#tabla tbody tr:eq(0)").clone().removeClass('fila_base').appendTo("#tabla tbody");
    });
    $(document).on("click", "#icono_cancel", function() {
        var parent = $(this).parents().get(0);
        $(parent).remove();
    });
});

$(document).ready(function() {
    $("#icono_pasos").click(function() {
        $("#tabla_pasos tbody tr:eq(0)").clone().removeClass('fila_base_pasos').appendTo("#tabla_pasos tbody");
    });
    $(document).on("click", "#icono_cancel_pasos", function() {
        var parent = $(this).parents().get(0);
        $(parent).remove();
    });
});

$(document).ready(function() {
    $("#icono_etiqueta").click(function() {
        $("#tabla_etiqueta tbody tr:eq(0)").clone().removeClass('fila_base_etiqueta').appendTo("#tabla_etiqueta tbody");
    });
    $(document).on("click", "#icono_cancel_etiqueta", function() {
        var parent = $(this).parents().get(0);
        $(parent).remove();
    });
});

/*$(document).ready(function(){
    $("#icono").click(function(){
        var tds=$("#tabla tr:first td").length;
        var trs=$("#tabla tr").length;
        var nuevaFila="<tr>";
        nuevaFila+='<td id="ing" class="handlee_font">Ingrediente # '+(trs)+'<td><input type="text" placeholder="ej: 100 gramos de jitomate picado"><td id="icono_cancel"><h1 class="icon-cancel"></h1></td>';
        $("#tabla").append(nuevaFila);
    });
    $("#icono_cancel").click(function(){
       var parent=$(this).parents().get(0);
       $(parent).remove();
    });
});*/