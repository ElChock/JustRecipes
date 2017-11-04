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
Route::get('/', function () {
    return view('LandingPageResponsive');
});

Route::get('/inicio',function(){
    return view("inicio");
});

Route::get('/crearReceta',function(){
    return view("CrearReceta");
});

Route::get("/editaPerfil",function(){
    return view("EditarPerfil");
});

Route::get("/login",function(){
    return view("login");
});

Route::get("/mostrarReceta",function(){
    return view("MostrarReceta");
});

Route::post("/vueUser","UsuarioController@store");



// Route::resource("vueUser","UsuarioController");
