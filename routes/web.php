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

Route::post("/send","EmailController@send");

//Route::get("/mostrarReceta", ['as' => 'mostrarReceta', 'uses' => 'RecetaController@mostrar']);
Route::get("/mostrarReceta",function(){
    return view("mostrarReceta");
});

Route::get("/misRecetas",function(){
    return view("MisRecetas");
});

Route::post("/vueUser","UsuarioController@store");

Route::post("/vueLogin","UsuarioController@login");

Route::post("/vueLoginStatus","UsuarioController@statusLogin");

Route::post("/vueCrearReceta","RecetaController@store");

Route::post("/vueReceta", 'RecetaController@mostrar');

Route::post("/vueMisRecetas","RecetaController@mostrarMisRecetas");
