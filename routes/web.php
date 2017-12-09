<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//$url = route('inicioLogin');
//redirect()->route('inicioLogin');

Route::get('/', function () {
    return view('LandingPageResponsive');
});

Route::get('/inicio',function(){
    return view("Inicio");
});

Route::get('/crearReceta',function(){
    return view("CrearReceta");
});

Route::get("/editaPerfil",function(){
    return view("EditarPerfil");
});

Route::get("/login",function(){
    return view("Login");
});

Route::get("/mostrarReceta",function(){
    return view("MostrarReceta");
});

Route::get("/misRecetas",function(){
    return view("MisRecetas");
});

Route::get("/buscarRecetas",function(){
    return view("BuscarRecetas");
});

Route::get("/editarPerfil",function(){
    return view("EditarPerfil");
});

Route::get("/logout","UsuarioController@logout");

Route::post("/vueUser","UsuarioController@store");

Route::post("/vueLogin","UsuarioController@login");

Route::post("/vueLoginStatus","UsuarioController@statusLogin");

Route::post("/vueCrearReceta","RecetaController@store");

Route::post("/vueReceta", 'RecetaController@mostrar');

Route::post("/vueMisRecetas","RecetaController@mostrarMisRecetas");

Route::post("/vueRecetaTodas", 'RecetaController@mostrarTodas');

Route::post("/vueBuscarReceta","RecetaController@buscarReceta");

Route::post("/vueEliminarReceta","RecetaController@eliminar");

Route::post("/vueActualizarReceta","RecetaController@actualizar");