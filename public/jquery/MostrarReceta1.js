/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var receta;
var ingredientes;
var pasos;
var idReceta;
$(document).ready(function()
{
    idReceta=$.get("idReceta");
    obtenerPasos();
    obtenerReceta();
    OntenerIngredientes();
    if(receta.tiempoHoras==null)
        {
            receta.tiempoHoras=0;
        }
    if(receta.tiempoMinutos==null)
        {
            receta.tiempoMinutos=0;
        }
    ImprimirReceta();
    
});

function obtenerReceta() 
{
        $.ajax({
        type:"get",
        url:"http://54.191.0.0/justRecipes/Controller/controllerRecetas.php?idReceta="+idReceta,
        async:false,
        contentType: "application/json; charset=utf-8",
        dataType: 'json',
        success:function(data)
            {
                receta=data;               
            }
        });   
}
function OntenerIngredientes() 
{
        $.ajax({
        type:"get",
        url:"http://54.191.0.0/justRecipes/Controller/controllerRecetas.php?Ingredientes="+idReceta,
        async:false,
        contentType: "application/json; charset=utf-8",
        dataType: 'json',
        success:function(data)
            {
                ingredientes=data;               
            }
        });     
}
function obtenerPasos() 
{
        $.ajax({
        type:"get",
        url:"http://54.191.0.0/justRecipes/Controller/controllerRecetas.php?Pasos="+idReceta,
        async:false,
        contentType: "application/json; charset=utf-8",
        dataType: 'json',
        success:function(data)
            {
                pasos=data;               
            }
        });     
}
function ImprimirReceta()
{
    var ingredientesImprimir;
    var pasosImprimir
    for(index=1;index<ingredientes.length;index++)
    {
        ingredientesImprimir+="<tr><td><textarea name id= readonly>"+ingredientes[index].nombre+"</textarea></td></tr>";
    }
   /* for(index=0;index<pasos.length;index++)
    {
        pasosImprimir+="<tr><td><textarea name id= readonly>"+pasos[index].descripcion+"</textarea></td></tr>";
    }*/
    
    $ (".Recetaimprimir").append("<div class=contenedor>\n\
                <div class=mostrar>\n\
                   <table>\n\
                        <tr>\n\
                        <td id=tam_slider_receta rowspan=6>\n\
                            <ul class=sliderm>\n\
                            <li>\n\
                                <input type=radio id=sbutton1 name=sradio checked>\n\
                                <label for=sbutton1></label>\n\
                                <img src=imagenes/ensalada.jpg>\n\
                            </li>\n\
                            <li>\n\
                                <input type=radio id=sbutton2 name=sradio>\n\
                                <label for=sbutton2></label>\n\
                                <img src=imagenes/pizza.jpg>\n\
                            </li>\n\
                            <li>\n\
                                <input type=radio id=sbutton3 name=sradio>\n\
                                <label for=sbutton3></label>\n\
                                <img src=imagenes/loquesea.jpg>\n\
                            </li>\n\
                            <li>\n\
                                <input type=radio id=sbutton4 name=sradio>\n\
                                <label for=sbutton4></label>\n\
                                <img src=imagenes/niidea.jpg>\n\
                            </li>\n\
                            <li>\n\
                                <input type=radio id=sbutton5 name=sradio>\n\
                                <label for=sbutton5></label>\n\
                                <img src=imagenes/queso.jpg>\n\
                            </li>\n\
                            </ul>\n\
                        </td>\n\
                    </tr>\n\
                    <tr>\n\
                        <th colspan=5><h3>"+receta.nombre+"</h3></th>\n\
                    </tr>\n\
                    <tr>\n\
                        <td class=handlee_font id=tam_mostrar_datos >Tiémpo de Preparación: </td>\n\
                        <td class=roboto_font id=tam_mostrar_datos2>"+receta.tiempoHoras+"</td>\n\
                        <td class=handlee_font id=padd_time>hóra</td>\n\
                        <td class=roboto_font id=padd_time>"+receta.tiempoMinutos+"</td>\n\
                        <td class=handlee_font >min</td>\n\
                    </tr>\n\
                    <tr>\n\
                        <td class=handlee_font id=tam_mostrar_datos>Dificultad: </td>\n\
                        <td colspan=4 class=roboto_font id=padd>"+receta.dificultad+"</td>\n\
                    </tr>\n\
                    <tr>\n\
                        <td class=handlee_font id=tam_mostrar_datos>Porciónes: </td>\n\
                        <td class=roboto_font id=tam_mostrar_datos2>"+receta.porciones+"</td>\n\
                    </tr>\n\
                    <tr>\n\
                </table>\n\
            </div>\n\
        </div>\n\
        </section>\n\
        <section id=ing_receta>\n\
            <div class=contenedor>\n\
                <div class=ing>\n\
                    <table>\n\
                        <tr>\n\
                            <th><h3>Ingredientes</h3></th>\n\
                        </tr>\n\
                            "+ingredientesImprimir+"\n\
                    </table>\n\
                </div>\n\
            </div>\n\
        </section>\n\
        <section id=ing_receta>\n\
            <div class=contenedor>\n\
                <div class=ing>\n\
                    <table>\n\
                        <tr>\n\
                            <th><h3>Pásos</h3></th>\n\
                        </tr>\n\
                        <tr>\n\
                            <!--/*+pasosImprimir+*/-->\n\
                        </tr>\n\
                    </table>\n\
                </div>\n\
            </div>\n\
        </section>");
}

(function($) {  
    $.get = function(key)   {  
        key = key.replace(/[\[]/, '\\[');  
        key = key.replace(/[\]]/, '\\]');  
        var pattern = "[\\?&]" + key + "=([^&#]*)";  
        var regex = new RegExp(pattern);  
        var url = unescape(window.location.href);  
        var results = regex.exec(url);  
        if (results === null) {  
            return null;  
        } else {  
            return results[1];  
        }  
    }  
})(jQuery);  