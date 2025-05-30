<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\TipoEquipoController;
use App\Http\Controllers\HistorialMantenimientoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PrestamoController;

Route::get('/', function () {
    return view('home');
});

Route::resource('equipos', EquipoController::class);
Route::resource('usuarios', UsuarioController::class);
Route::resource('tipo-equipos', TipoEquipoController::class);
Route::resource('prestamos', PrestamoController::class);
Route::resource('historial-mantenimientos', HistorialMantenimientoController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
