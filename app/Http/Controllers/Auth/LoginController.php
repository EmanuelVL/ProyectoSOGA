<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
  public function login(){

    $licencia = $this->validate(request(),[
      'username' => 'required|string',
      'password' => 'required|string'
    ]);

    if(Auth::attempt($licencia)){
      return view('/menu');
    }
    return back()
        ->withErrors(['email' => 'El correo o la contraseña no se encontraron']);

  }
}
