<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
})->name('welcome');;

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/singup', function () {
    return view('singup');
})->name('signup');

Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class, 'login'])->name('inicia-sesion');

Route::get('/mapa', function () {
    return view('mapa');
})->middleware('auth')->name('mapa');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
