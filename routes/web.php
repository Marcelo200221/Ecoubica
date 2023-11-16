<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReportController;

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

Route::get('/general', function(){
    return view('general');
})->name('general');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/singup', function () {
    return view('singup');
})->name('signup');

Route::get('/reporte', function() {
    return view('reporte');
})->name('reporte');

Route::get('/ver-reportes', [ReportController::class, 'mostrarReportes'])->name('verReportes');
Route::put('/validar-reporte/{id}', [ReportController::class, 'validarReporte'])->name('validar-reporte');

Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class, 'login'])->name('inicia-sesion');
Route::post('/envioRepo', [ReportController::class, 'reporte'])->name('envioRepo');
Route::delete('/eliminar-reporte/{id}', [ReportController::class, 'eliminarReporte'])->name('eliminar-reporte');

Route::get('/mapa', function () {
    return view('mapa');
})/*->middleware('auth')*/->name('mapa');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
