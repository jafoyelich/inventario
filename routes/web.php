<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/', function () {
    return view('welcome');
});

// Ruta del Dashboard protegida con autenticación
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Rutas protegidas para los módulos
Route::middleware(['auth'])->group(function () {
    Route::resource('productos', ProductoController::class)->except(['show']);
    Route::resource('facturas', FacturaController::class)->only(['index', 'create', 'store']);
    Route::resource('clientes', ClienteController::class)->except(['show']);
    Route::resource('usuarios', UsuarioController::class)->except(['show']);
});

require __DIR__.'/auth.php';
