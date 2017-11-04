<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimum-scale=1.0">
       <!--  <link rel="stylesheet" href="css/EstilosInicioNew.css">
        <link rel="stylesheet" href="css/RegistroNew.css"> -->

        <link rel="stylesheet" href="/css/LandingPageResponsive.css">

        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://unpkg.com/vue"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="/jquery/jquery.js"></script>
        <script src="/jquery/jquery-1.11.3.js"></script>
        <script src="/jquery/jquery-3.1.1.js"></script>
    </head>
    <body >
        <img class="testBody" src="/imagenes/JustRecipesBack.jpg" width="1380px" height="720px" opac>
        <header>
            
            <nav class="navbar navbar-inverse Navegacion">
                <div class="container-fluid">

                        <div class="navbar-header">
                                <a class="navbar-brand" href="#">
                                        <img class="logoNav" src="/images/logo.png" width="200px" height="65px">
                                </a>
                        </div>

                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li><a href="#">Registrate</a></li> -->
                        <li><a href="#">Registrate</a></li>
                    </ul>
                </div>
            </nav>
        </header>


    <div class="contenedor">
        <div class="container-fluid">
            <div class="main row">
                <div class="    col-xs-12 col-sm-7 col-md-3 col-lg-3    ">
                    
                </div>




                <div class="columna        col-xs-12 col-sm-5  col-md-6  col-lg-4 col-lg-offset-1">
                    <div class="cajaBlanca">
                        <!-- <h3>Aun no formas parte de nuestra comunidad?</h3> -->
                        <div id="logo">
                             <img src="/images/logo.png" width="280px" height="90px">
                        </div>
                        <form id="formularioRegistro" v-on:submit.prevent="loginUser" method="post" enctype="multipart/form-data">
                            
                            <input type="email" required="" name="correo" id="correo" placeholder="Correo Electronico"  v-model="usuario.correo" />
                            <input type="password" required="" name="password" id="password" placeholder="Contraseña"  v-model="usuario.contraseña" />

                            <!-- <div class="configuracionImagen">
                                <label for="imagen" id="botonimg"> Imagen de Perfil</label>
                                <input id="imagen" type="file" name="imagen">
                            </div>
                            <div>
                                <img id="avatar">
                            </div> -->
                            <input type="submit" name="Registro" class="button" value="Iniciar sesion">
                        </form>
                    </div>
                </div>
                    
                <!-- <div  class="as              col-xs-0 col-sm-4 col-md-4   col-lg-4" >
                    VERDE
                </div> -->
            </div>
            
        </div>

    </div>
    
    <script src="/jquery/Registro.js"></script>
    <script src="/jquery/box.js"></script>
    <script src="/jquery/menu.js"></script>
    <script src="/jquery/javascript.js"></script>
    <script src="/js/LoginVue.js"></script>
    </body>
</html>