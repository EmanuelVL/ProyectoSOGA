<?php

Route::post('home', 'Auth\LoginController@login')->name('login');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('register','HomeController@agregar')->name('ventana4');

Route::post('register','HomeController@agregarus')->name('agrgarusua');

Route::view('menu', 'menu')->name('menu');
