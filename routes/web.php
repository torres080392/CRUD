<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\SucursalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

   // Listar todos los clientes
Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');

// Mostrar el formulario para crear un nuevo cliente
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');

// Almacenar un nuevo cliente
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');

// Mostrar un cliente específico
Route::get('/clientes/{id}', [ClienteController::class, 'show'])->name('clientes.show');

// Mostrar el formulario para editar un cliente específico
Route::get('/clientes/{id}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');

// Actualizar un cliente específico
Route::patch('/clientes/{id}', [ClienteController::class, 'update'])->name('clientes.update');

// Eliminar un cliente específico
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

//sucursales
 // Listar todas las sucursales
 Route::get('/sucursal', [SucursalController::class, 'index'])->name('sucursales.index');

 // Mostrar el formulario para crear una nueva sucursal
Route::get('/sucursal/create', [SucursalController::class, 'create'])->name('sucursales.create');

// Mostrar una sucursl en específico
Route::get('/sucursal/{id}', [SucursalController::class, 'show'])->name('sucursales.show');

// Mostrar el formulario para editar una sucursa específico
Route::get('/sucursal/{id}/edit', [SucursalController::class, 'edit'])->name('sucursales.edit');

// Eliminar un cliente específico
Route::delete('/sucursal/{id}', [SucursalController::class, 'destroy'])->name('sucursales.destroy');

// Almacenar una sucursal
Route::post('/sucursal', [SucursalController::class, 'store'])->name('sucursales.store');

// Actualizar una sucursal en específico
Route::patch('/sucursal/{id}', [SucursalController::class, 'update'])->name('sucursales.update');




});

require __DIR__.'/auth.php';
