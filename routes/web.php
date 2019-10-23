<?php

Route::view('/', 'home')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
