<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Nueva Receta</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="/css/EstilosInicio.css">
        <link rel="stylesheet" href="/css/fontello.css">
        <link rel="stylesheet" href="/css/Crear.css">
        <link rel="stylesheet" type="text/css" href="/css/EstiloSesion.css" />
        <script src="/jquery/jquery.js"></script>
        <script src="/jquery/jquery-3.1.1.js"></script>
        <script src="https://unpkg.com/vue"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script language="javascript" type="text/javascript" src="/js/Inicio.js"></script>
        <script language="javascript" type="text/javascript" src="/jquery/POP.js"></script>
    </head>
    <body>
    <header>
        <div class="contenedor" id="headerRegistro">
            <img src="/imagenes/logo16.png" class="logo" alt="">
            <input type="checkbox" id="menu_bar">
            <label class="icon-menu" for="menu_bar"></label>
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
        <form  method="POST" enctype="multipart/form-data" v-on:submit.prevent="CrearReceta" id="formReceta" >
        <section id="crear_receta">
            <div class="contenedor">
                <div id="datos_receta">
                    <table cellspacing="3">
                        <th colspan="9"><h3>Crea tu Propia Receta</h3></th>
                        <tr>
                            <td class="handlee_font">Nómbre de la Receta</td>
                            <td colspan="8"><input id="tam_nombre" type="text" name="NombreReceta" required="" placeholder="Ejemplo: Pizza con Quéso" v-model="receta.nombre" ></td>
                        </tr>
                        <tr>
                            <td class="handlee_font">Dificultad</td>
                            <td>
                               <select name="dificultad" v-model="receta.dificultad">
                               <option value="Fácil">Fácil</option>
                               <option value="Normal">Normal</option>
                               <option value="Difícil">Difícil</option>
                               <option value="Avanzado">Avanzado</option>
                               </select>
                            </td>
                            <td class="handlee_font">Porciónes</td>
                            <td><input name="porciones" type="text" v-model="receta.porciones"></td>
                            <td class="handlee_font">Tiémpo de Preparación</td>
                            <td><input name="horas" type="text" id="txt_hrs_min" v-model="receta.tiempoPreparacion" ></td>
                            <td class="handlee_font">hrs</td>
                            <td><input name="minutos" type="text" id="txt_hrs_min"></td>
                            <td class="handlee_font">min</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
        <section id="descripcion">
            <div class="contenedor">
                <div id="descripcion_receta">
                    <table cellspacing="3">
                        <th colspan="9"><h3>Descripción</h3></th>
                        <tr>
                            <td>
                                <textarea name="descripcion" v-model="receta.descripcion"></textarea>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
        <section id="ingredientes">
            <div class="contenedor">
                <div id="ingredientes_receta">
                    <table id="tabla" cellspacing="3">
                     <thead>
                     <tr>
                      <th colspan="3"><h3>Ingredientes</h3></th>
                      </tr>
                      </thead>
                       <tbody>
                       <tr class="fila_base">
                            <td id="ing" class="handlee_font">Ingrediente :</td>
                            <td><input type="text" name="ingrediente[]"  placeholder="ej: 100 gramos de jitomate picado"></td>
                            <td id="icono_cancel"><h1 class="icon-cancel"></h1>
                            </td>
                        </tr>
                        <tr>
                            <td id="ing" class="handlee_font">Ingrediente :</td>
                            <td><input type="text" name="ingrediente[]" placeholder="ej: 100 gramos de jitomate picado"></td>
                            <td id="icono"><h1 class="icon-plus-circled"></h1>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <section id="pasos">
            <div class="contenedor">
                <div id="pasos_receta">
                    <table id="tabla_pasos" cellspacing="3">
                     <thead>
                     <tr>
                      <th colspan="5"><h3>Pasos</h3></th>
                      </tr>
                      </thead>
                       <tbody>
                       <tr class="fila_base_pasos">
                            <td id="ing_pasos" class="handlee_font">Paso :</td>
                            <td><input type="text" name="pasos[]" placeholder="ej: 100 gramos de jitomate picado"></td>
                            <!-- <td id="tam_icon_pasos"><label for="imagen_pasos" class="icon-picture"></label></td> -->
                            <!-- <td id="tam_img_pasos"><input id="imagen_pasos" type="file"  name="imagenPasos[]"><div><img id="avatar_pasos"></div></td> -->
                            <td id="icono_cancel_pasos"><h1 class="icon-cancel"></h1>
                            </td>
                        </tr>
                        <tr>
                            <td id="ing_pasos" class="handlee_font">Paso :</td>
                            <td><input type="text" name="pasos[]" placeholder="ej: 100 gramos de jitomate picado"></td>
                            <!-- <td id="tam_icon_pasos"><label for="imagen_pasos" class="icon-picture"></label></td> -->
                            <!-- <td id="tam_img_pasos"><input id="imagen_pasos" type="file" name="imagenPasos[]" ></td> -->
                            <td id="icono_pasos"><h1 class="icon-plus-circled"></h1>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
            <!-- etiquetas-->
            
        <!-- <section id="ingredientes">
            <div class="contenedor">
                <div id="ingredientes_receta">
                    <table id="tabla_etiqueta" cellspacing="3">
                     <thead>
                     <tr>
                      <th colspan="3"><h3>Eriquetas</h3></th>
                      </tr>
                      </thead>
                       <tbody>
                       <tr class="fila_base_etiqueta">
                            <td id="etiqueta" class="handlee_font">Etiqueta :</td>
                            <td><input type="text" name="etiqueta[]"  placeholder="ej: Picante"></td>
                            <td id="icono_cancel_etiqueta"><h1 class="icon-cancel"></h1>
                            </td>
                        </tr>
                        <tr>
                            <td id="etiqueta" class="handlee_font">Etiqueta :</td>
                            <td><input type="text" name="etiqueta[]" placeholder="ej: Picante"></td>
                            <td id="icono_etiqueta"><h1 class="icon-plus-circled"></h1>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>        -->
            
        <section id="boton">
        <div class="contenedor">
        <div id="boton_receta">
        <input type="submit" name="subirReceta" class="botton" value="Subir Receta">
        </div>
        </div>
        </section>
        </form>
        
<!-- <div id="popup">
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
</div> -->
    
<div class="popup-overlay"></div>

</main>
    
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
    <script src="/jquery/Crear.js"></script>
    <script src="/jquery/Registro.js"></script>
    <script src="/js/SesionVue.js"></script>
    <script src="/js/CrearRecetaVue.js"></script>
    </body>
</html>