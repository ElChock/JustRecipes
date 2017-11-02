/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var usuario;
    $(document).ready(function(){
    
    Session();
    if(usuario!==undefined&&usuario.nombre!==null)
    {
        $("#headerRegistro").append("<table id=datos_usuario>\n\
                <tr>\n\
                    <th><a href=#>"+usuario.nombre+"</a></th>\n\
                    <td rowspan=2 id=avatar_usr><img src=imagenes/usuario.png alt=></td>\n\
                </tr>\n\
                <tr>\n\
                    <td align=center><a href=Controller/controllerLogin.php?cerrar=1>Cerrar Sesión</a></td>\n\
                </tr>\n\
            </table>\n\
            <nav class=menu>\n\
                <a href=Inicio.html>Inicio</a>\n\
                <a href=CrearReceta.html>Crear Nueva Receta</a>\n\
                <!--<a href=>Mis Recetas</a>-->\n\
                <a href=EditarPerfil.html>Mi Cuenta</a>\n\
                <!--<a href=>Contactanos</a>-->\n\
            </nav>");
    }
    else
    {
        $("#headerRegistro").append("<table cellspacing=35px id=datos_usuario>\n\
                <tr>\n\
                    <td><a href=Registro.html>Regístrate</a></td>\n\
                    <td align=center id=open><a href=#>Inicar Sesión</a></td>\n\
                </tr>\n\
            </table>");
    }
        
    });
    
    function Session()
    {
        $.ajax({
        type:"get",
        url:"http://54.191.0.0/justRecipes/Controller/controllerLogin.php?usuario=1",
        async:false,
        contentType: "application/json; charset=utf-8",
        dataType: 'json',
        success:function(data)
            {
                usuario=data;               
            }
        });
    }