<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*Route::view('/welcome', 'welcome')->middleware ('auth');

Route::view('/login', 'login')->name ('login')->middleware ('guest');

Route::view('/singin', 'singin');

Route::post('login', function(){
    $credentials = request()->only ('email', 'password');

    if (Auth::attempt($credentials)){
       return"Registro exitoso"; 
    }
    return "Registro fallido";


});*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('login');
});

Route::get('singin', function () {
    return view('singin');
});

Route::get('/mapa', function () {
    return view('mapa');
});
