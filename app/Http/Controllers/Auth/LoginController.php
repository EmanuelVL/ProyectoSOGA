<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
  public function __construct(){
    $this->middleware('guest',['only'=>'formaLogin ']);
  }

  public function formaLogin(){
    return view('home');
  }

  public function login(){

    $licencia = $this->validate(request(),[
      'username' => 'required|string',
      'password' => 'required|string'
    ]);

    if(Auth::attempt($licencia)){
      return redirect()->route('menu');
    }
    return back()
        ->withErrors(['credenciales' => 'El correo o la contraseña no se encontraron']);
  }
}
