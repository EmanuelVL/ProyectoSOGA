<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /*
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('home');
    }

    public function agregarusarios(Request $datosNuevos){

      // se validan los datos
        /*$datosNuevos->validate[(
          'name' => 'required',
          'username' => 'required',
          'password' => 'required'
        )]*/

      //Conectar
        $datosNuevosSub = new App\Registra;
      //Guardar en la base de datos
        $datosNuevosSub->name = $datosNuevos->name ;
        $datosNuevosSub->username = $datosNuevos->username ;
        $datosNuevosSub->password = $datosNuevos->password ;

        if(!empty($datosNuevos->email)){
          $datosNuevosSub->email = $datosNuevos->email ;
        }

        $datosNuevosSub->save();

        return view('register');
    }

      public function agregarus(){
        return view('register');
      }


}
