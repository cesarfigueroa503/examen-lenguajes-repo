<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProveedorController;



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

Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/productos/crear', [ProductoController::class, 'create']);
Route::post('/productos/crear/guardar', [ProductoController::class, 'store'])->name('producto.guardar');

Route::get('/empleados', [EmpleadoController::class, 'index']);
Route::get('/empleados/crear', [EmpleadoController::class, 'create']);
Route::post('/empleados/crear/guardar', [EmpleadoController::class, 'store'])->name('empleado.guardar');

Route::get('/proveedores', [ProveedorController::class, 'index']);
Route::get('/proveedores/crear', [ProveedorController::class, 'create']);
Route::post('/proveedores/crear/guardar', [ProveedorController::class, 'store'])->name('proveedor.guardar');


