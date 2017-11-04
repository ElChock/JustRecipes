<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
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

    public  function statusLogin(Request $request){
        $user =  $request->session()->get('user');
        return $user;
    }


    public function login(Request $request){

        $user =new Usuario();
        $user = DB::table('usuarios')->where([
            ['correo', '=', $request->correo],
            ['contraseña', '=', $request->contraseña],
        ])->get();
        session(['user' => json_encode($user)]);
        //return ['redirect' => route('training_schedules.index')];
        //return ['redirect' => redirect('inicio')];
        return redirect('inicio');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $user = new Usuario;
            $user->id=0;
            $user->nombre = $request->nombre;
            $user->contraseña = $request->contraseña;
            $user->correo = $request->correo;
            $user->foto="foto";
            $user->token="";
            $create=$user->save();
            //$user=Usuario::all();
            //$create = Usuario::create($user);
            return  response()->json($create);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
