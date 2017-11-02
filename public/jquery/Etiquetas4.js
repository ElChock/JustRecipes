/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var listEtiqueta;

$(document).ready(function(){
    obtenerEtiquetas();
    imprimirEtiquetas();
});

function obtenerEtiquetas()
{
        $.ajax({
        type:"get",
        url:"http://54.191.0.0/justRecipes/Controller/ControllerEtiqueta.php?etiqueta=1",
        async:false,
        contentType: "application/json; charset=utf-8",
        dataType: 'json',
        success:function(data)
            {
                listEtiqueta=data;               
            }
        });
}
function imprimirEtiquetas()
{
    for(index=0;index<listEtiqueta.length;index++)
    {
        $(".containPrefe").append("<div class=mov>\n\
                <div class=checkbo>\n\
  		<input type=checkbox value="+listEtiqueta[index].idEtiqueta+" id=checkbo name=gustos[] />\n\
	  	<label for=checkbo></label>\n\
                <span  id=DescripPrefe>"+listEtiqueta[index].nombre+"</span>\n\
                </div>\n\
        </div>");
        

    }
}