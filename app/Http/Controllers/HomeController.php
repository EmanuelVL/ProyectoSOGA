<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class HomeController extends Controller{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//Validar si hay secion abierta
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /*
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){

        return view('home');
    }

    public function agregarus(Request $datosNue){
      $datosNue->validate([
        'nombre' => 'required',
        'user_neme' => 'required',
        'contrasena' => 'required'
      ]);

      $nuevoR = new App\user;

      $nuevoR->name = $datosNue->nombre ;
      $nuevoR->username = $datosNue->user_neme ;
      $nuevoR->email = $datosNue->email ;
      $nuevoR->password = $datosNue->contrasena ;

      $nuevoR->save();

      return view('auth/register');
    }

    public function agregar(){
      $verAreas = App\areas::All();

      return view('auth/register', compact('verAreas'));
    }

    /*public function verAreas(){
      $nombres = App\areas::all();

      //return view('auth/register', compact('areas'));
      return view('auth/register')->with('areas',$areas);
    }*/


}
