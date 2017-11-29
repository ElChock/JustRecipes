<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Inico</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="/css/EstilosInicio.css">
        <link rel="stylesheet" href="/css/EstilosInicioNL.css">
        <link href="https://fonts.googleapis.com/css?family=Courgette|Handlee|Kameron" rel="stylesheet">
        <link rel="stylesheet" href="/css/fontello.css">
        <link rel="stylesheet" type="text/css" href="/css/EstiloSesion.css" />

        <script language="javascript" type="text/javascript" src="/jquery/jquery.js"></script>
        <script language="javascript" type="text/javascript" src="/jquery/jquery-1.11.3.js"></script>
        <script language="javascript" type="text/javascript" src="/jquery/jquery-3.1.1.js"></script>
        <script src="https://unpkg.com/vue"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
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
                        <h4 >@{{usuario.nombre}}</h4>
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

        <section id="slider">
            <div class="contenedor">
                <ul id="ul_slider">
                    <li><h3 class="icon-circle"></h3></li>
                    <li><h3>Recetas de la Semana</h3></li>
                </ul>
                <div id='carousel_container' class="slideimg">
                    <div id='left_scroll'><a href='javascript:slide("left");'><img src='/imagenes/left.png' /></a></div>
                        <div id='carousel_inner'>
                            <ul id='carousel_ul'>
                                <li><img class="box_comida" src='/imagenes/pizza.jpg' />
                                <div id="link"><a href="#">Pizza</a></div>
                                </li>
                                <li><img class="box_comida" src='/imagenes/tacos.jpg' />
                                <div id="link"><a href="#">Tacos de Trompo</a></div>
                                </li>
                                <li><img class="box_comida" src='/imagenes/niidea.jpg' />
                                <div id="link"><a href="#">Pollo</a></div>
                                </li>
                                <li><img class="box_comida" src='/imagenes/queso.jpg' />
                                <div id="link"><a href="#">Queso</a></div>
                                </li>
                                <li><img class="box_comida" src='/imagenes/loquesea.jpg' />
                                <div id="link"><a href="#">Ensalada</a></div>
                                </li>
                                <li><img class="box_comida" src='/imagenes/pizza.jpg' />
                                <div id="link"><a href="#">Pizza</a></div>
                                </li>
                                <li><img class="box_comida" src='/imagenes/tacos.jpg' />
                                <div id="link"><a href="#">Tacos</a></div>
                                </li>
                                <li><img class="box_comida" src='/imagenes/niidea.jpg' />
                                <div id="link"><a href="#">Pechuga de Pollo</a></div>
                                </li>
                                <li><img class="box_comida" src='/imagenes/queso.jpg' />
                                <div id="link"><a href="#">Queso</a></div>
                                </li>
                                <li><img class="box_comida" src='/imagenes/loquesea.jpg' />
                                <div id="link"><a href="#">Sopa</a></div>
                                </li>
                            </ul>
                        </div>
                    <div id='right_scroll'><a href='javascript:slide("right");'><img src='/imagenes/right.png' /></a></div>
                    <input type='hidden' id='hidden_auto_slide_seconds' value=0 />
                </div>
            </div>
        </section>










                                                          <!-- LISTA RECETAS -->


        <ul id="ul_lista_recetas">
            <li><h2 class="icon-circle"></h2></li>
            <li><h2>Recomendado para ti</h2></li>
        </ul>

        <section id="lista_recetas">
            <div class="contenedor agregarReceta">

            </div>
            <div id="recetas" class="contenedor agregarReceta">
            </div>

        </section>

                                                            <!-- TOP RECETAS -->

        <!-- <ul id="ul_facil_recetas">
            <li><a href="#">Ver lo más Reciente...</a></li>
        </ul> -->
        <ul id="ul_top_recetas">
            <li><h2 class="icon-circle"></h2></li>
            <li><h2>Top 5 Recetas</h2></li>
        </ul>

        <section id="top_recetas">
            <div class="contenedor">
                <div class="top">
                    <table cellspacing="0">
                        <tr>
                            <td rowspan="3" id="imagen_top_receta" class="separador"><img class="box_comida" src="/imagenes/rollos.jpg" alt=""></td>
                            <td colspan="2"><a href="#">Rollitos</a></td>
                        </tr>
                        <tr>
                            <td class="handlee_font" id="dato_usr">Receta por:</td>
                            <td class="roboto_font" id="usuario_receta">Jovy</td>
                        </tr>
                        <tr>
                            <td id="calificacion" class="separador" colspan="2"><img src="/imagenes/calificacion.png" alt=""></td>
                        </tr>

                        <tr>
                            <td rowspan="3" id="imagen_top_receta" class="separador"><img class="box_comida" src="/imagenes/pizza.jpg" alt=""></td>
                            <td colspan="2"><a href="#">Pizza</a></td>
                        </tr>
                        <tr>
                            <td class="handlee_font" id="dato_usr">Receta por:</td>
                            <td class="roboto_font" id="usuario_receta">Jovy</td>
                        </tr>
                        <tr>
                            <td id="calificacion" class="separador" colspan="2"><img src="/imagenes/calificacion.png" alt=""></td>
                        </tr>

                        <tr>
                            <td rowspan="3" id="imagen_top_receta" class="separador"><img class="box_comida" src="/imagenes/ensalada.jpg" alt=""></td>
                            <td colspan="2"><a href="#">Ensalada de pollo</a></td>
                        </tr>
                        <tr>
                            <td class="handlee_font" id="dato_usr">Receta por:</td>
                            <td class="roboto_font" id="usuario_receta">Jovy</td>
                        </tr>
                        <tr>
                            <td id="calificacion" class="separador" colspan="2"><img src="/imagenes/calificacion.png" alt=""></td>
                        </tr>

                        <tr>
                            <td rowspan="3" id="imagen_top_receta" class="separador"><img class="box_comida" src="/imagenes/queso.jpg" alt=""></td>
                            <td colspan="2"><a href="#">Queso</a></td>
                        </tr>
                        <tr>
                            <td class="handlee_font" id="dato_usr">Receta por:</td>
                            <td class="roboto_font" id="usuario_receta">Jovy</td>
                        </tr>
                        <tr>
                            <td id="calificacion" class="separador" colspan="2"><img src="/imagenes/calificacion.png" alt=""></td>
                        </tr>

                        <tr>
                            <td rowspan="3" id="imagen_top_receta" class="separador"><img class="box_comida" src="/imagenes/tacos.jpg" alt=""></td>
                            <td colspan="2"><a href="#">Tácos de Trompo</a></td>
                        </tr>
                        <tr>
                            <td class="handlee_font" id="dato_usr">Receta por:</td>
                            <td class="roboto_font" id="usuario_receta">Jovy</td>
                        </tr>
                        <tr>
                            <td id="calificacion" class="separador" colspan="2"><img src="/imagenes/calificacion.png" alt=""></td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>








                                                               <!-- RECETAS FACILES -->

        <section id="facil_recetas">
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
    <script src="/js/InicioVue.js"></script>
    </body>
</html>