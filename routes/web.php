<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Acceso;
use App\Http\Controllers\SucursalController;

Route::get('/', function () {
    return view('acceso');
});

Route::view('/login', 'acceso')->name('login');
Route::post('/acceso', [Acceso::class, 'acceso'])->name('acceso');

Route::middleware(['auth'])->group(function () {
    // Logout
    Route::post('/logout', [Acceso::class, 'logout'])->name('logout');

    // App
    Route::view('/inicio', 'app.inicio')->name('inicio');
    Route::get('/sucursales', [SucursalController::class, 'listar'])->name('sucursales.listar');
    Route::get('/sucursales/{id}/empleados', [SucursalController::class, 'empleados'])->name('sucursales.empleados');
});