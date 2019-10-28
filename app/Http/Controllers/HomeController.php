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

    /*
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){

        return view('menu');
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
      $nuevoR->password = $datosNue->contrasena ;

      if(!empty($datosNue->email)) {
        $nuevoR->email = $datosNue->email ;
      }

      $nuevoR->save();

      return view('auth/register');
    }

    public function agregar(){
      $verAreas = App\areas::All();

      return view('auth/register', compact('verAreas'));
      //return view('auth/register');
    }

    /*public function verAreas(){
      $nombres = App\areas::all();

      //return view('auth/register', compact('areas'));
      return view('auth/register')->with('areas',$areas);
    }*/


}
