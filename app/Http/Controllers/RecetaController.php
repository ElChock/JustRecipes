<?php

namespace App\Http\Controllers;

use App\Receta;
use App\Paso;
use App\Ingrediente;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class RecetaController extends Controller
{

    public function mostrar(Request $request)
    {
        $idReceta = $request->idReceta;   
        $receta =new Receta();
        $pasos = new Paso();
        $ingrediente= new Ingrediente();
        $receta=Receta::find($idReceta);
        // $receta = DB::table('recetas')->where(
        //         "id","=",$idReceta
        //     )->get();

        $pasos=DB::table("pasos")->where(
            "idReceta","=",$idReceta
        )->get();

        $ingrediente=DB::table("ingredientes")->where(
            "idReceta","=",$idReceta
        )->get();

        $receta->pasos=$pasos;
        $receta->ingredientes=$ingrediente;
        return response()->json($receta);
        //return $idReceta."yolo";
    }

    public function eliminar(Request $request){
        $user = new Usuario();
        $user = $request->session()->get("user");
        
        $deleteRow=Receta::where([
            ['id', '=', $request->id],
            ['idUsuario', '=', $user[0]->id],
        ])->delete();
        return $deleteRow;
    }

    public function mostrarTodas(){
        //$user = new Usuario();
        //$user = $request->session()->get();

        $receta=Receta::all();
        return response()->json($receta);

    }
    public function mostrarMisRecetas(Request $request){

        //$receta = new Receta();
        $user = new Usuario();
        $user =  $request->session()->get('user');
       
        $receta=Receta::where("idUsuario","=",$user[0]->id)
                ->get();

        return response()->json($receta);
    }

    public function buscarReceta(Request $request){
        
        //return $request->nombre;
        $receta=Receta::where("nombre",'like', '%' . $request->nombre . '%')
                ->get();

        return response()->json($receta);
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $receta = new Receta();
        $user = new Usuario();
        $ingredientes = null;
        $pasos = null;
        $user =  $request->session()->get('user');
        
        $recetaVue=$request;
        //return $user[0]->id;
        //return  $recetaVue["ingredientesReceta"][1];
        $receta->nombre=$recetaVue["nombre"];
        $receta->idUsuario=$user[0]->id;
        $receta->porciones=$recetaVue["porciones"];
        $receta->foto="";
        $receta->dificultad=$recetaVue["dificultad"];
        $receta->descripcion=$recetaVue["descripcion"];
        $receta->tiempo=$recetaVue["tiempoPreparacion"];
        $create=$receta->save();

        //return response()->json($receta);

        for ($i=0; $i < count($recetaVue["ingredientesReceta"]); $i++) { 
            $ingrediente= new Ingrediente();
            $ingrediente->nombre=$recetaVue["ingredientesReceta"][$i];
            $ingrediente->idReceta=$receta->id;
            $ingrediente->cantidad=0;
            $ingrediente->save();            
        }

        for ($i=0; $i < count($recetaVue["pasosReceta"]); $i++) { 
            $pasos = new Paso;
            $pasos->descripcion=$recetaVue["pasosReceta"][$i];
            $pasos->idReceta=$receta->id;
            $pasos->paso=$i;
            $pasos->foto="";
            
            $pasos->save();
        }

    }

    public function recomendadas(Request $request){
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function show(Receta $receta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function edit(Receta $receta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receta $receta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receta $receta)
    {
        //
    }
}
