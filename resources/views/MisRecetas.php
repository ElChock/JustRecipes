<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>MisRecetas</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="/css/EstilosInicio.css">
        <link rel="stylesheet" href="/css/EstilosInicioNL.css">
        <link href="https://fonts.googleapis.com/css?family=Courgette|Handlee|Kameron" rel="stylesheet"> 
        <link rel="stylesheet" href="/css/fontello.css">
        <link rel="stylesheet" type="text/css" href="/css/EstiloSesion.css" />
        
        <script language="javascript" type="text/javascript" src="/jquery/jquery.js"></script>
        <script language="javascript" type="text/javascript" src="/jquery/jquery-1.11.3.js"></script>
        <script language="javascript" type="text/javascript" src="/jquery/jquery-3.1.1.js"></script>
        
        <script language="javascript" type="text/javascript" src="/js/Inicio.js"></script>
        <script language="javascript" type="text/javascript" src="/jquery/POP.js"></script>
        <script language="javascript" type="text/javascript" src="/jquery/RecetasRemondadas.js"></script>
    </head>
    <body>
    <header>
            <div class="contenedor" id="headerRegistro">
                <img src="/imagenes/logo16.png" class="logo" height="80px;" alt="">
                <input type="checkbox" id="menu_bar">
                <form action="">
                    <div id="busqueda">
                        <input type="text" class="buscar" id="find" placeholder="Ejemplo: Pizza">
                        <input type="submit" value="Buscar" class="buscar" id="btn_find">
                    </div>
                </form>


                <nav class="menu">
                    <a href="">Inicio</a>
                    <a href="">Nueva Receta</a>
                    <a href="">Mis Recetas</a>
                    <a href="">Mi Cuenta</a>
                    
                </nav>

                <div id="cuenta">
                    <div style="float: left;">
                        <h4>Abraham</h4>
                        <h4><a href="">Cerrar Sesion</a></h4>
                    </div>
                    <div style="float: right; ">
                        <img src="/imagenes/usuario.png" width="70px" height="70px">
                    </div>
                    
                </div>

        </div>
    </header>
    <main>



                                                              <!-- SLIDER -->

        










                                                          <!-- LISTA RECETAS -->


        <ul id="ul_lista_recetas" class="misRecetas-ul misRecetas-listas">
            <li><h2 class="icon-circle"></h2></li>
            <li><h2>Mis Recetas</h2></li>
        </ul>

        <section id="lista_recetas" class="misRecetas-listas">

            <div class="contenedor agregarReceta">
                <div class="receta">
                    <table cellspacing="5">
                        <tr>
                            <td rowspan="7" id="imagen_receta" ><img src="/imagenes/pizza.jpg" alt=""></td>
                            <td colspan="2"><a href="#">PIZZA</a></td>
                        </tr>
                        <tr id="ocultar">
                            <td colspan="2"><hr></td>
                            <td rowspan="5"><textarea name="comentarios"></textarea></td>
                        </tr>
                        <tr id="ocultar">
                            <td colspan="1" class="handlee_font" id="datos" >Tiempo de Preparación: </td>
                            <td class="roboto_font" id="datos_receta" >1 hora 30 min</td>
                        </tr>
                        <tr id="ocultar">
                            <td class="handlee_font">Porciónes: </td>
                            <td class="roboto_font">4 Persónas</td>
                        </tr>
                        <tr id="ocultar">
                            <td class="handlee_font">Dificultad: </td>
                            <td class="roboto_font">Média</td>
                        </tr>
                        <tr id="ocultar">
                            <td id="calificacion" colspan="2"><img src="/imagenes/calificacion.png" alt=""></td>
                        </tr>
                        <tr id="ocultar">
                            <td class="handlee_font">Receta por:</td>
                            <td class="roboto_font" id="usuario_receta" colspan="2" >Jovy</td>
                        </tr>
                        <tr id="ocultar" >
                            <td class="handlee_font" colspan="4">
                                <ul>
                                    <li>
                                        <p class="usuario_comentario">Nombre</p>
                                        <p class="contenido_comentario">Comentarios</p>
                                    </li>
                                    <li>
                                        <p class="usuario_comentario">Nombre</p>
                                        <p class="contenido_comentario">Comentarios</p>
                                    </li>
                                </ul>
                            </td>
                            
                            
                        </tr>
                    </table>
                </div>
                
                <div class="receta">
                    <table cellspacing="5">
                        <tr>
                            <td rowspan="7" id="imagen_receta" ><img src="/imagenes/pizza.jpg" alt=""></td>
                            <td colspan="2"><a href="#">PIZZA</a></td>
                        </tr>
                        <tr id="ocultar">
                            <td colspan="2"><hr></td>
                            <td rowspan="5"><textarea name="comentarios"></textarea></td>
                        </tr>
                        <tr id="ocultar">
                            <td colspan="1" class="handlee_font" id="datos" >Tiempo de Preparación: </td>
                            <td class="roboto_font" id="datos_receta" >1 hora 30 min</td>
                        </tr>
                        <tr id="ocultar">
                            <td class="handlee_font">Porciónes: </td>
                            <td class="roboto_font">4 Persónas</td>
                        </tr>
                        <tr id="ocultar">
                            <td class="handlee_font">Dificultad: </td>
                            <td class="roboto_font">Média</td>
                        </tr>
                        <tr id="ocultar">
                            <td id="calificacion" colspan="2"><img src="/imagenes/calificacion.png" alt=""></td>
                        </tr>
                        <tr id="ocultar">
                            <td class="handlee_font">Receta por:</td>
                            <td class="roboto_font" id="usuario_receta" colspan="2" >Jovy</td>
                        </tr>
                        <tr id="ocultar" >
                            <td class="handlee_font" colspan="4">
                                <ul>
                                    <li>
                                        <p class="usuario_comentario">Nombre</p>
                                        <p class="contenido_comentario">Comentarios</p>
                                    </li>
                                    <li>
                                        <p class="usuario_comentario">Nombre</p>
                                        <p class="contenido_comentario">Comentarios</p>
                                    </li>
                                </ul>
                            </td>
                            
                            
                        </tr>
                    </table>
                </div>


                <div class="receta">
                    <table cellspacing="5">
                        <tr>
                            <td rowspan="7" id="imagen_receta" ><img src="/imagenes/pizza.jpg" alt=""></td>
                            <td colspan="2"><a href="#">PIZZA</a></td>
                        </tr>
                        <tr id="ocultar">
                            <td colspan="2"><hr></td>
                            <td rowspan="5"><textarea name="comentarios"></textarea></td>
                        </tr>
                        <tr id="ocultar">
                            <td colspan="1" class="handlee_font" id="datos" >Tiempo de Preparación: </td>
                            <td class="roboto_font" id="datos_receta" >1 hora 30 min</td>
                        </tr>
                        <tr id="ocultar">
                            <td class="handlee_font">Porciónes: </td>
                            <td class="roboto_font">4 Persónas</td>
                        </tr>
                        <tr id="ocultar">
                            <td class="handlee_font">Dificultad: </td>
                            <td class="roboto_font">Média</td>
                        </tr>
                        <tr id="ocultar">
                            <td id="calificacion" colspan="2"><img src="/imagenes/calificacion.png" alt=""></td>
                        </tr>
                        <tr id="ocultar">
                            <td class="handlee_font">Receta por:</td>
                            <td class="roboto_font" id="usuario_receta" colspan="2" >Jovy</td>
                        </tr>
                        <tr id="ocultar" >
                            <td class="handlee_font" colspan="4">
                                <ul>
                                    <li>
                                        <p class="usuario_comentario">Nombre</p>
                                        <p class="contenido_comentario">Comentarios</p>
                                    </li>
                                    <li>
                                        <p class="usuario_comentario">Nombre</p>
                                        <p class="contenido_comentario">Comentarios</p>
                                    </li>
                                </ul>
                            </td>
                            
                            
                        </tr>
                    </table>
                </div>

                
                







            </div>
        </section>












                                                            <!-- TOP RECETAS -->

       








                                                               <!-- RECETAS FACILES -->

        <section id="facil_recetas" class="misRecetas-facil">
            <div class="contenedor">
               <a href="#">Ver mas Recetas Fáciles y Divertidas...</a>
               <ul>
               <li>
                <div class="divertidas">
                   <img src="/imagenes/galletas.jpg" alt="">
                   <div class="divertidas_nombre">
                       <a href="#">Galletas de Mantequilla</a>
                   </div>
                </div>
                </li>
                <li>
                <div class="divertidas">
                   <img src="/imagenes/margarita.jpg" alt="">
                   <div class="divertidas_nombre">
                       <a href="#">Margarita con Chamoy</a>
                   </div>
                </div>
                </li>
                <li>
                <div class="divertidas">
                   <img src="/imagenes/niidea.jpg" alt="">
                   <div class="divertidas_nombre">
                       <a href="#">Pollo</a>
                   </div>
                </div>
                </li>
                <li>
                <div class="divertidas">
                   <img src="/imagenes/loquesea.jpg" alt="">
                   <div class="divertidas_nombre">
                       <a href="#">Fideos</a>
                   </div>
                </div>
                </li>
                <li>
                <div class="divertidas">
                   <img src="/imagenes/taza.jpg" alt="">
                   <div class="divertidas_nombre">
                       <a href="#">Coditos con quéso y tomate</a>
                   </div>
                </div>
                </li>
                </ul>
            </div>
        </section>






                                                                <!-- POPUP -->

<div id="popup">
    <div class="content-popup">
       <div class="close"><a href="#" id="close">Cerrar</a></div>
        <div>
            <h3>Iniciar Sesión</h3>
            <div id="POPformularioRegistro">
                <form id="POPIniciarSesion" name="Session" action="Controller/controllerLogin.php"  method="POST" >              
                <input type="text" name="correo" id="correo" placeholder="Ingresa tu correo"/>               
                <input type="password" name="password" id="password" placeholder="Contraseña"/>
                <input class="POPbutton" type="submit" value="Entrar">
                </form>
            </div>
            
        </div>
   </div>
     
</div>
    
<div class="popup-overlay"></div>

    </main>








                                                             <!-- FOOTER -->

    <footer class="footer">
        <div class="social">
            <a href="#" class="icon-facebook-squared"></a>
            <a href="#" class="icon-twitter-squared"></a>
            <a href="#" class="icon-gplus-squared"></a>
        </div>
        <p class="copy">&copy; JustRecipes. Todos los Derechos Reservados</p>
    </footer>
    <script src="/jquery/box.js"></script>
    <script src="/jquery/menu.js"></script>
    <script src="/jquery/javascript.js"></script>
    </body>
</html>