<?php

Route::view('/', 'home')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('register','HomeController@agregarus')->name('ventanaregistrar');

Route::post('register','HomeController@agregarusarios')->name('agregarusua');
