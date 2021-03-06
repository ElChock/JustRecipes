<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Mi Perfil</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="/css/EstilosInicio.css">
        <link rel="stylesheet" href="/css/Registro.css">
        <link rel="stylesheet" href="/css/fontello.css">
        <link rel="stylesheet" href="/css/Perfil.css">
        <meta name="csrf-token" content={{csrf_token()}}>
        <script src="/jquery/jquery.js"></script>
        <script src="/jquery/jquery-1.11.3.js"></script>
        <script src="/jquery/jquery-3.1.1.js"></script>
        <script src="/js/vue.js"></script>
        <script src="/js/axios.min.js"></script>
    </head>
    <body>
    <header>
        <div class="contenedor">
            <img src="/imagenes/logo16.png" class="logo" height="80px" alt="">
            <input type="checkbox" id="menu_bar">
            <label class="icon-menu" for="menu_bar"></label>
            <form action="/buscarRecetas" method=get>
                <div id="busqueda">
                    <input type="text" class="buscar" name=nombre id="find" placeholder="Ejemplo: Pizza">
                    <input type="submit" value="Buscar" class="buscar" id="btn_find">
                </div>
            </form>
            


            <nav class="menu">
            <a href="/inicio">Inicio</a>
            <a href="/crearReceta">Nueva Receta</a>
            <a href="/misRecetas">Mis Recetas</a>
            <a href="/editarPerfil">Mi Cuenta</a>
                    
                </nav>


                <div id="cuenta">
                    <div style="float: left;">
                    <h4 >@{{usuario.nombre}}</h4>
                        <h4><a href="/logout">Cerrar Sesion</a></h4>
                    </div>
                    <div style="float: right; ">
                        <img src="/imagenes/usuario.png" width="70px" height="70px">
                    </div>
                    
                </div>

            
        </div>
    </header>
    <main>
    <section id="formularioRegistro">
        <div class="contenedor">
            <form action="">
                <h1>Mi Perfil</h1>
                <!-- <label class="datos">Nombre: </label> -->
                <input type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre de Usuario"/>
                <!-- <label class="datos">Correo: </label> -->
                <input type="text" name="correo" id="correo" placeholder="Dejanos tu e-mail"/>
                <!-- <label class="datos">Contraseña: </label> -->
                <input type="password" name="password" id="password" placeholder="Ingresa una Contraseña"/>
                <div>
                <label for="imagen" id="botonimg"> Imagen de Perfil</label>
                <input id="imagen" type="file" name="imagen"></input>
                </div>
                <div>
                <img id="avatar">
                </div>
                <input type="submit" class="button" value="Guardar Cambios">
            </form>
        </div>
    </section>
    </main>
    <script src="/jquery/Registro.js"></script>
    <script src="/jquery/box.js"></script>
    <script src="/jquery/menu.js"></script>
    <script src="/jquery/javascript.js"></script>
    <script src="/js/tools.js"></script>
    <script src="/js/SesionVue.js"></script>
    </body>
</html>