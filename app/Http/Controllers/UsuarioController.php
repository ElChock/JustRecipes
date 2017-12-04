<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Mail\mailGmail;

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

        //$url = route('/inicio');
        $user =new Usuario();
        $user = DB::table('usuarios')->where([
            ['correo', '=', $request->correo],
            ['contraseña', '=', $request->contraseña],
        ])->get();
        $request->session()->forget('user');
        session(['user'=> $user]);
        //return ['redirect' => route('training_schedules.index')];
        //return ['redirect' => redirect('inicio')];
        //return view('inicio' );
        //return  redirect()->route('inicioLogin');
        return  $request->session()->get('user');
        return Redirect::to('inicio') ;
        //showProfile();
        

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
            $user->save();
           // Mail::to("wha.spir.wha@hotmail.com")->send(new mailGmail());
           $mail=new mailGmail();
            session('user', $user);
            //$user=Usuario::all();
            //$create = Usuario::create($user);
           // $email->sendEmail();
            return  response()->json($user);

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
