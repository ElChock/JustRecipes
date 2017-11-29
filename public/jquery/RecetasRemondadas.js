/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var recetas;
$(document).ready(function() {
    //recetasRecomendadas();
    //ImprimirRecetas();
});

function recetasRecomendadas() {
    // $.ajax({
    //     type: "get",
    //     url: "http://54.191.0.0/justRecipes/Controller/controllerRecetas.php?recetas=1",
    //     async: true,
    //     contentType: "application/json; charset=utf-8",
    //     dataType: 'json',
    //     success: function(data) {
    //         recetas = data;

    //     }
    // });
}

function ImprimirRecetas() {
    for (index = 0; index < recetas.length; index++) {
        if (recetas[index].tiempoHoras == null) {
            recetas[index].tiempoHoras = 0;
        }
        if (recetas[index].tiempoMinutos == null) {
            recetas[index].tiempoMinutos = 0;
        }
        $(".agregarReceta").append("<div class=receta>\n\
                <table cellspacing=5>\n\
                    <tr>\n\
                        <td rowspan=7 id=imagen_receta ><img src=imagenes/pizza.jpg alt=></td>\n\
                        <td colspan=3><a href=MostrarReceta.html?idReceta=" + recetas[index].idReceta + ">" + recetas[index].nombre + "</a></td>\n\
                    </tr>\n\
                    <tr id=ocultar>\n\
                        <td colspan=2><hr></td>\n\
                        <td rowspan=5><textarea name=comentarios readonly>" + recetas[index].descripcion + "</textarea></td>\n\
                    </tr>\n\
                    <tr id=ocultar>\n\
                        <td class=handlee_font id=datos >Tiempo de Preparación: </td>\n\
                        <td class=roboto_font id=datos_receta >" + recetas[index].tiempoHoras + " hora " + recetas[index].tiempoMinutos + " min</td>\n\
                    </tr>\n\
                    <tr id=ocultar>\n\
                        <td class=handlee_font>Porciónes: </td>\n\
                        <td class=roboto_font>" + recetas[index].porciones + "</td>\n\
                    </tr>\n\
                    <tr id=ocultar>\n\
                        <td class=handlee_font>Dificultad: </td>\n\
                        <td class=roboto_font>" + recetas[index].dificultad + "</td>\n\
                    </tr>\n\
                    <tr id=ocultar>\n\
                        <td id=calificacion colspan=2><img src=imagenes/calificacion.png alt=></td>\n\
                    </tr>\n\
                    <tr id=ocultar>\n\
                        <td class=handlee_font>Receta por:</td>\n\
                        <td class=roboto_font id=usuario_receta colspan=2 >Jovy</td>\n\
                    </tr>\n\
                </table>\n\
                </div>");
    }
}