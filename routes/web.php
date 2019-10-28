<?php

<<<<<<< HEAD
Route::post('home', 'Auth\LoginController@login')->name('login');
=======
Route::view('/', 'auth/login')->name('home');

Auth::routes();
>>>>>>> bce2358cebf89240289ec327d6ebdc41373137eb

Route::get('/home', 'HomeController@index')->name('home');

Route::get('register','HomeController@agregar')->name('ventana4');

Route::post('register','HomeController@agregarus')->name('agrgarusua');

Route::view('menu', 'menu')->name('menu');
