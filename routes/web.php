<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\PanaderiaController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\VentasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Ruta /
Route::get('/',[PanaderiaController::class,'getIndex']);

//Ruta Categoria
Route::get('categoria',[ProductosController::class,'Categoria'])->name('listado');
Route::post('categoria',[ProductosController::class,'registrar']);

//Ruta Productos
Route::get('productos',[ProductosController::class,'Productos']);

//Ruta Clientes
Route::get('clientes',[ClientesController::class,'getClientes']);

//Ruta Ventas
Route::get('ventas',[VentasController::class,'getVentas']);

//Ruta Servicios/Habitaciones
//Route::get('servicios/habitaciones',[HabitacionesController::class,'showHabitaciones']);

//Ruta Clientes/Visualizar
//Route::get('clientes/visualizar',[ClientesController::class,'showClientes']);

//Ruta Facturacion
//Route::get('facturacion/factura',[FacturacionController::class,'getFactura']);

//Ruta Reservas
//Route::get('reservas',[ReservasController::class,'getReservas']);

//Ruta Contactos
//Route::get('contactos',[HotelController::class,'showContactos']);
